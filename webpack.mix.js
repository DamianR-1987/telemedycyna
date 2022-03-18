const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
mix.js('resources/js/home/swiper_sliders.js', 'public/js/home')
    .sass('resources/sass/app.scss', 'public/css')
    .styles('resources/css/layout.css', 'public/css/layout.css')
    .styles('resources/css/header.css', 'public/css/header.css')
    .styles('resources/css/footer.css', 'public/css/footer.css')
    .styles('resources/css/home.css', 'public/css/home.css')
    .sourceMaps();