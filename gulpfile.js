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
            'app.scss',
        ])
        .copy('node_modules/pikaday/css/pikaday.css', 'public/css/pikaday.css')
        .copy('node_modules/pikaday/pikaday.js', 'public/js/pikaday.js')
        .copy('node_modules/moment/moment.js', 'public/js/moment.js')
        .copy('node_modules/font-awesome/fonts', 'public/build/fonts')
        .scripts([
            '../../../node_modules/jquery/dist/jquery.js',
            '../../../node_modules/tether/dist/js/tether.js',
            '../../../node_modules/bootstrap/dist/js/bootstrap.js'
        ])
        .version([
        'public/css/app.css',
        'public/js/all.js'
        ]);
});