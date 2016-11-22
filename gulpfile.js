const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss')
   		.copy('node_modules/font-awesome/fonts', 'public/build/fonts')
    	.webpack('app.js')
    	.scripts([
            '../../../node_modules/bootstrap/dist/js/bootstrap.js'
		])
		.version([
			'public/css/app.css',
			'public/js/app.js'
		]);
});