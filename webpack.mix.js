let mix  = require('laravel-mix');







mix.css('resources/css/app.css', 'public/css');
 mix.js('resources/js/app.js', 'public/js');

 mix.styles([
     'resources/css/admin/*.css',
 ], 'public/css/app.css')
 mix.scripts([
     'resources/js/admin/*.js',
 ], 'public/js/app.js');

   