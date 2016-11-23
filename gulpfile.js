const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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