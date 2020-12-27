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

mix.ts('resources/js/app.js', 'public/js')
    .sass('resources/sass/frame/authheader.scss', 'public/css')
    .sass('resources/sass/frame/header.scss', 'public/css')
    .sass('resources/sass/pages/welcome.scss', 'public/css')
    .sass('resources/sass/pages/contact.scss', 'public/css')
    .sass('resources/sass/pages/home.scss', 'public/css')
    .sass('resources/sass/pages/post.scss', 'public/css')
    .sass('resources/sass/base/bootstrap.scss', 'public/css');

