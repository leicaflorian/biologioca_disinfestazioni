const mix = require('laravel-mix')
require('laravel-mix-merge-manifest')

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
mix.disableNotifications()

mix.js('resources/js/app.js', 'public/js')
  .vue()
  .extract(['vue'], 'js/vendors-1.js')
  .extract(['bootstrap'], 'js/vendors-2.js')
  .extract(null, 'js/vendors-3.js')

mix.sass('resources/sass/app.scss', 'public/css')
mix.sass('resources/sass/bootstrap.scss', 'public/css/vendors-1.css')
mix.sass('resources/sass/icons.scss', 'public/css/vendors-2.css')

mix.version()
  .mergeManifest()
