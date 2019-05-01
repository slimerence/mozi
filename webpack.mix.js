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

mix.sass('resources/scss/vitality.scss', 'public/css/mozi_style.css')
    .sass('resources/scss/custom.scss', 'public/css');

mix.styles([
    'public/css/mozi_style.css',
    'public/css/custom.css'
], 'public/css/mozi.css');
