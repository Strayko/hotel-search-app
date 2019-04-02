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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'resources/css/planAndPrice.css'
], 'public/css/planAndPrice.css');

// mix.scripts([
//     'resources/js/bootstrap.js',
//     'resources/js/custom.js',
//     'resources/js/jquery.fancybox.pack.js',
//     'resources/js/jquery.min.js',
//     'resources/js/jquery.mixitup.js',
//     'resources/js/nouislider.js',
//     'resources/js/slick.js'
// ], 'public/js/libs.js');