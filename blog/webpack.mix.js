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

mix.js('resources/assets/js/app.js', 'public/js')
	.js('resources/assets/js/validate.js', 'public/js')
	.js('resources/assets/js/misc.js', 'public/js')

    .copy('resources/assets/CSS/style.css', 'public/css')
    .copy('resources/assets/image/', 'public/img');


