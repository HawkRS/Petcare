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
//mix.copy('resources/upzet/js/app.js', 'public/js/upzet.js');

mix.js([
  //'resources/js/app.js',
  'resources/upzet/libs/jquery/jquery.min.js',
  'resources/upzet/libs/metismenu/metisMenu.min.js',
  'resources/upzet/libs/simplebar/simplebar.min.js',
  'resources/upzet/libs/node-waves/waves.min.js',
], 'public/js/upzet.js');

mix.styles([
    'resources/upzet/css/app.min.css',
    'resources/upzet/css/icons.min.css',
], 'public/css/upzet.css');
