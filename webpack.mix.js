let mix = require('laravel-mix');
const path = require('path');

require('dotenv').config();
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
mix.sass('resources/assets/sass/app.scss', 'public/css/frontend.css')
    .js('resources/assets/js/app.js', 'public/js/frontend.js')
    .js('resources/assets/js/store/store.js', 'public/js/store.js')
    .js('resources/assets/js/store/checkout.js', 'public/js/checkout.js')
    .js('resources/assets/js/account.js', 'public/js/account.js')
    .js('resources/assets/js/admin/admin.js', 'public/js/admin.js')
    .js('resources/assets/js/content-filter/main.js', 'public/js/content-filter.js')
    .js('resources/assets/js/content-filter/jquery.mixitup.min.js', 'public/js/jquery.mixitup.min.js')
    .sass('resources/assets/sass/content-filter/style.scss', 'public/css/content-filter.css')
    .copy('resources/assets/images', 'public/images')
    .options({
        uglify: {
            uglifyOptions: {
                compress: {
                    collapse_vars: false
                }
            }
        }
    })
    .webpackConfig({
        resolve: {
            alias: {
                ziggy: path.resolve('vendor/tightenco/ziggy/src/js/route.js'),
            },
        },
    });


if (mix.inProduction() || process.env.npm_lifecycle_event !== 'hot') {
    mix.version();
}
