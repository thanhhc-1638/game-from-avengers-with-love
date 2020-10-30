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

// Copy resources to public
mix.copyDirectory('resources/images', 'public/images');
mix.copyDirectory('resources/media', 'public/media');

// Mix css
mix.copy('resources/css/relax/app.css', 'public/css/relax/app.css');

// Mix js
mix.scripts([
    'resources/js/relax/email-decode.min.js',
    'resources/js/relax/jquery-1.11.2.min.js',
    'resources/js/relax/jquery.textfill.min.js',
    'resources/js/relax/html2canvas.js',
    'resources/js/relax/d3.js',
    'resources/js/relax/d3methods.js',
    'resources/js/relax/jqueryMethods.js',
], 'public/js/relax/app.js');

mix.version();
