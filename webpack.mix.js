const mix = require('laravel-mix');

mix
    .js('resources/js/dashboard/index.js', 'public/js/dashboard')
    .js('resources/js/bootstrap.js', 'public/js/')
    .vue()
    .extract()
    .browserSync({
        proxy: process.env.APP_URL
    });
