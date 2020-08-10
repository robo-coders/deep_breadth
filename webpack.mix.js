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
   .sass('resources/sass/app.scss', 'public/css')
   .styles([
      // All css files from a package here
      'node_modules\\animate.css\\animate.min.css'
   ], 'public/css/customStyles.css');

  /* .scripts([
      // All js files from package here but for now ill comment it out
   ], 'public/js/customJs.js');*/