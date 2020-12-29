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
    .ts('resources/js/typescript/box_search.ts', 'public/js')
    .ts('resources/js/typescript/btn_like.ts', 'public/js')
    .sass('resources/sass/frame/header-auth.scss', 'public/css')
    .sass('resources/sass/frame/header.scss', 'public/css')
    .sass('resources/sass/pages/welcome-page.scss', 'public/css')
    .sass('resources/sass/pages/register-page.scss', 'public/css')
    .sass('resources/sass/pages/contact-page.scss', 'public/css')
    .sass('resources/sass/pages/ranking-page.scss', 'public/css')
    .sass('resources/sass/pages/home-page.scss', 'public/css')
    .sass('resources/sass/pages/post-page.scss', 'public/css')
    .sass('resources/sass/base/bootstrap.scss', 'public/css');

   

