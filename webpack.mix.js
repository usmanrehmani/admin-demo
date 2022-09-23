let mix  = require('laravel-mix');









mix.js('resources/js/scripts.js', 'public/js')
   .js('resources/js/bundle.js', 'public/js')
   .js('resources/js/charts/gd-default.js', 'public/js')
   .postCss('resources/css/theme.css', 'public/css')
   .postCss('resources/css/dashlite.css', 'public/css');

   