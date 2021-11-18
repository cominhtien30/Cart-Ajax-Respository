const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
//compile less
mix.less('resources/less/app.less', 'dist',{
    lessOptions: {
        strictMath: true
    }
});

//complie js
mix.js([
    'resources/js/app.js',
], 'dist/app.js');

//watch code
mix.browserSync('127.0.0.1:8000');
