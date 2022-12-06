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


mix.js('resources/js/app.js', 'public/js/app.js')
   .sass('resources/sass/app.sass', 'public/css/app.css').options({
       processCssUrls: false
   });
mix.copy('resources/upzet/js/app.js', 'public/js/upzet.js');

mix.styles([
    'resources/upzet/css/app.min.css',
    'resources/upzet/css/icons.min.css',
], 'public/css/upzet.css');
