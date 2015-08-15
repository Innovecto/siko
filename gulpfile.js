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
    mix.scripts([
            'vendor/jquery.min.js',
            'vendor/jquery-migrate.min.js',
            'vendor/jquery-ui.min.js',
            'vendor/bootstrap.js'
        ], 'public/assets/js/vendor.min.js')

        .scripts([
            'plugin/bootstrap-hover-dropdown.js',
            'plugin/jquery.slimscroll.js',
            'plugin/jquery.blockui.min.js',
            'plugin/jquery.cookie.min.js',
            'plugin/jquery.uniform.js',
            'plugin/jquery.sparkline.min.js',
            'plugin/jquery.vmap.js',
            'plugin/maps/*.js',
            'plugin/morris.js',
            'plugin/raphael.min.js'
        ], 'public/assets/js/plugin.min.js')

        .scripts([
            'metronic.js',
            'layout.js',
            'component/quick-sidebar.js',
            'component/index.js',
            'component/tasks.js',
            'siko.js'
        ], 'public/assets/js/site.min.js');

    mix.sass('vendor.scss', 'public/assets/css/vendor.min.css')
        .sass('plugin.scss', 'public/assets/css/plugin.min.css')
        .sass('layout.scss', 'public/assets/css/site.min.css');


});
