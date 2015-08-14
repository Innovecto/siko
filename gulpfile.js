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
//    mix.sass('app.scss');

    mix.styles([
        '/resources/assets/css/vendor/font-awesome.css',
        '/resources/assets/css/vendor/bootstrap.css'
    ], 'public/assets/css/vendor.min.css');

    mix.styles([
    	'/resources/assets/css/plugin/jquery.fancybox.css',
    	'/resources/assets/css/plugin/owl-carousel/owl.carousel.css',
    ], 'public/assets/css/plugin.min.css');

    mix.styles([
        '/resources/assets/css/component/components-n.css',
        '/resources/assets/css/component/red.css',
        '/resources/assets/css/component/style-responsive.css',
        '/resources/assets/css/component/style-revolution-slider.css',
        '/resources/assets/css/component/style.css'
    ], 'public/assets/css/site.min.css');

    mix.scripts([
        '/resources/assets/js/vendor/jquery.min.js',
        '/resources/assets/js/vendor/jquery-migrate.min.js',
        '/resources/assets/js/vendor/bootstrap.js'
    ], 'public/assets/js/vendor.min.js');

    mix.scripts([
    	'/resources/assets/js/plugin/jquery.fancybox.js',
        '/resources/assets/js/plugin/owl.carousel.js'
    ], 'public/assets/js/plugin.min.js');

    mix.scripts([
        '/resources/assets/js/component/back-to-top.js',
        '/resources/assets/js/component/layout.js'
    ], 'public/assets/js/site.min.js');

});
