let mix = require('laravel-mix');

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


// Compile our Javascript files.
mix.scripts([
    'public/js/bootstrap.min.js',
], 'public/js/vendor.js');

mix.js('resources/js/app.js', 'public/js');

mix.sass("public/css/main.scss", "public/css").styles(
    [
        "public/css/bootstrap.min.css",
        "public/css/bootstrap-grid.min.css",
        "public/css/main.css",
    ],
    "public/css/app.css"
);

// Only version files when Mix is running in production mode ("npm run production")
if (mix.inProduction()) {
    mix.version();
}
