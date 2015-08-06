var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix
        .sass([
            'vendor/*.scss'
        ], 'public/assets/css/vendor.min.css')
        .sass([
            'plugin/*.scss' 
        ], 'public/assets/css/plugin.min.css')
        .sass([
            'app.scss'
        ], 'public/assets/css/app.min.css')
        .scripts([
            'vendor/*.js'
        ], 'public/assets/js/vendor.min.js')
        .scripts([
            'plugin/*.js'
        ], 'public/assets/js/plugin.min.js')
        .scripts([
            'app.js',
            'component/*.js'
        ], 'public/assets/js/app.min.js')
    ;
});
