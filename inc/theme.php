<?php

/**
 * Define a global version number.
 * Replace the version number of the theme on each release.
 */
if (!defined('_SU_VERSION')) {
  // Replace the version number of the theme on each release.
  define('_SU_VERSION', '0.1.0');
}

/**
 * Remove the guff that WordPress injects into the
 * theme by default.
 */
function su_setup_wordpress_theme()
{
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_print_styles', 'print_emoji_styles');

  function su_stop_loading_wp_embed_and_jquery()
  {
    if (!is_admin()) {
      wp_deregister_script('wp-embed');
      wp_deregister_script('jquery'); // Remove this if jQuery is required...it shouldn't be!!
    }
  }

  add_action('init', 'su_stop_loading_wp_embed_and_jquery');

  function su_remove_wp_block_library_css()
  {
    wp_dequeue_style('wp-block-library');
  }

  add_action('wp_enqueue_scripts', 'su_remove_wp_block_library_css');

  /**
   * Apply theme support options
   */

  /**
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */
  add_theme_support('title-tag');

  /**
   * Register Menus
   */
  register_nav_menus(
    array(
      'header-menu' => esc_html__('Header', 'stackup'),
      'footer-menu' => esc_html__('Footer', 'stackup')
    )
  );
}

add_action('after_setup_theme', 'su_setup_wordpress_theme');

/**
 * Enqueue scripts and styles.
 */
function su_wordpress_theme_scripts()
{
  wp_enqueue_style('pb-wordpress-theme-style', get_template_directory_uri() . '/dist/assets/css/app.css', array(), _SU_VERSION);

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}

add_action('wp_enqueue_scripts', 'su_wordpress_theme_scripts');
