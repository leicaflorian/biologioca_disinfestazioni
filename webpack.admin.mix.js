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

mix
  .js(['resources/js/admin/admin.js'], 'public/js')
  .sass('resources/sass/admin/admin.scss', 'public/css')
  .vue()

mix.version()
  .mergeManifest()
