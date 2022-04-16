<?php
$text_before_title = get_field('text_before_title') ?: null;
$title = get_field('title') ?: get_the_title();
$first_text_area = get_field('first_text_area') ?: null;
$second_text_area = get_field('second_text_area') ?: null;
$image = get_field('image') ?: null;
$third_text_area = get_field('third_text_area') ?: null;
?>

<article id="post-<?php the_ID(); ?>">
  <div class="relative py-16 bg-white overflow-hidden">
    <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
      <div class="relative h-full text-lg max-w-prose mx-auto" aria-hidden="true">
        <svg class="absolute top-12 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
          <defs>
            <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
            </pattern>
          </defs>
          <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)" />
        </svg>
        <svg class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
          <defs>
            <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
            </pattern>
          </defs>
          <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
        </svg>
        <svg class="absolute bottom-12 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
          <defs>
            <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
            </pattern>
          </defs>
          <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)" />
        </svg>
      </div>
    </div>
    <div class="relative px-4 sm:px-6 lg:px-8">
      <div class="text-lg max-w-prose mx-auto">
        <h1>
          <?php if ($text_before_title) { ?>
            <span class="block text-base text-center text-indigo-600 font-semibold tracking-wide uppercase"><?php echo $text_before_title; ?></span>
          <?php } ?>
          <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl"><?php echo $title; ?></span>
        </h1>
        <?php if ($first_text_area) { ?>
          <p class="mt-8 text-xl text-gray-500 leading-8"><?php echo $first_text_area; ?></p>
        <?php } ?>
      </div>
      <div class="mt-6 prose prose-indigo prose-lg text-gray-500 mx-auto">
        <?php if ($second_text_area) {
          echo $second_text_area;
        } ?>

        <?php if ($image) {
        $url = $image['url'];
        $title = $image['title'];
        $alt = $image['alt'];
        $caption = $image['caption'];
        ?>
        <figure>
          <img class="w-full rounded-lg" src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" title="<?php echo esc_attr($title); ?>" width="1310" height="873">
          <?php if ($caption) { ?>
            <figcaption><?php echo $caption; ?></figcaption>
          <?php } ?>
        </figure>
        <?php } ?>

        <?php if ($third_text_area) {
          echo $third_text_area;
        } ?>
      </div>
    </div>
  </div>
</article>