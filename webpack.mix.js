const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");

mix
  .js("src/js/app.js", "dist/assets/js")
  .js("src/js/turbo.js", "dist/assets/js")
  .postCss("src/css/app.css", "dist/assets/css")
  .options({
    processCssUrls: false,
    postCss: [
      require("postcss-import"),
      require("tailwindcss/nesting"),
      tailwindcss("./tailwind.config.js"),
    ],
  });

mix.sourceMaps();
