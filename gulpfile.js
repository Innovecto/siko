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
		'/resources/assets/components/css/components-n.css',
		'/resources/assets/components/css/red.css',
		'/resources/assets/components/css/style-responsive.css',
		'/resources/assets/components/css/style-revolution-slider.css',
		'/resources/assets/components/css/style.css',
    ], 'public/css/component.css', './');

    mix.styles([
    	'/resources/assets/plugins/fancybox/source/jquery.fancybox.css',
    	'/resources/assets/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css',
    	'/resources/assets/plugins/slider-revolution-slider/rs-plugin/css/settings.css',
    ], 'public/css/plugin.css', './');

    mix.styles([
    	'/resources/assets/vendor/font-awesome/css/font-awesome.min.css',
    	'/resources/assets/vendor/bootstrap/css/bootstrap.min.css',
    ], 'public/css/vendor.css', './');

    mix.scripts([
    	'/resources/assets/components/js/back-to-top.js',
    	'/resources/assets/components/js/layout.js',
    ], 'public/js/component.js', './');

    mix.scripts([
    	'/resources/assets/plugins/fancybox/source/jquery.fancybox.pack.js',
    	'/resources/assets/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js',
    ], 'public/js/plugin.js', './');

    mix.scripts([
    	'/resources/assets/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js',
    ], 'public/js/revo1.js', './');

    mix.scripts([
    	'/resources/assets/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js',
    ], 'public/js/revo2.js', './');

    mix.scripts([
    	'/resources/assets/components/js/revo-slider-init.js',
    ], 'public/js/revo3.js', './');

    mix.scripts([
    	'/resources/assets/vendor/jquery.min.js',
    	'/resources/assets/vendor/jquery-migrate.min.js',
    	'/resources/assets/vendor/bootstrap/js/bootstrap.min.js',
    ], 'public/js/vendor.js', './');
});
