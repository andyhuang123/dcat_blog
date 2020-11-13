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

mix.styles([
    'resources/css/animate.css',
    'resources/css/bootstrap.css',
    'resources/css/line-awesome.css',
    'resources/css/line-awesome-font-awesome.min.css',
    'resources/jquery/font-awesome.css',
    'resources/css/jquery.mCustomScrollbar.min.css',
    'resources/css/style.css',
    'resources/css/responsive.css',
    'resources/css/google.css'
], 'public/css/app.css');

mix.copyDirectory('resources/fonts', 'public/fonts');
mix.copyDirectory('resources/images', 'public/images');
mix.copyDirectory('resources/lib/slick', 'public/lib/slick');
mix.copy('resources/js/popper.js', 'public/js/popper.js');
mix.copy('resources/jquery/jquery-3.3.1.min.js', 'public/js/jquery-3.3.1.min.js');

mix.scripts([
    'resources/jquery/jquery-3.3.1.min.js',
    'resources/js/bootstrap.min.js',
    'resources/js/jquery.mCustomScrollbar.js',
    'resources/js/script.js',
    'resources/js/scrollbar.js'
], 'public/js/app.js');

mix.version();