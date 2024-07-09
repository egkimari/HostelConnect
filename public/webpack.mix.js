const mix = require('laravel-mix');

mix
    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .js('node_modules/admin-lte/dist/js/adminlte.min.js', 'public/adminlte/js')
    .css('node_modules/admin-lte/dist/css/adminlte.min.css', 'public/adminlte/css')
    .copy('node_modules/font-awesome/css/all.min.css', 'public/adminlte/css')
    .version();
