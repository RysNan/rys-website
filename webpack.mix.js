const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/docs/js')
   .sass('resources/sass/app.scss', 'public/docs/css')
   .copyDirectory('public/images', 'public/docs/images');