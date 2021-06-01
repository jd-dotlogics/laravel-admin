<?php 

return [
	'dashboard_url' => '/',

	'footer' => [
		'show_copyright' => true,
		'copyright_text' => 'COPYRIGHT &copy; '. date('Y') .' <a class="text-bold-800 grey darken-2" href="" target="_blank">Topdot,</a> All rights Reserved'
	],
	
	'scripts' => [
		'js/app.js',
	],

	'sidebar' => [
		'main_heading' => 'Laravel Admin',
	],

	'stylesheets' => [
		'css/app.css',
	],

	'routes' => [
		'profile' => [
			'edit' => ''
		],
		'user' => [
			'logout' => 'logout',
		],
	],
];