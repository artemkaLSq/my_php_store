<?php

return [
	
	'main' => [
		'controller' => 'main',
		'action' => 'main'
	],

	'about' => [
		'controller' => 'main',
		'action' => 'about'
	],

	'contacts' => [
		'controller' => 'main',
		'action' => 'contacts'
	],

	'category(?<id>\d+)' => [
		'controller' => 'main',
		'action' => 'category'
	],

	'good(?<id>\d+)' => [
		'controller' => 'main',
		'action' => 'good'
	],
	
	'adminlogin' => [
		'controller' => 'admin',
		'action' => 'login'
	],

	'adminlogout' => [
		'controller' => 'admin',
		'action' => 'logout'
	],

	'adminaddGood' => [
		'controller' => 'admin',
		'action' => 'addGood'
	],
	
	'admineditGood' => [
		'controller' => 'admin',
		'action' => 'editGood'
	],

	'admingoodEdited' => [
		'controller' => 'admin',
		'action' => 'goodEdited'
	],

	'admingoodDeleted' => [
		'controller' => 'admin',
		'action' => 'goodDeleted'
	],
	
	'adminedit' => [
		'controller' => 'admin',
		'action' => 'edit'
	],

	'admindeleteGood' => [
		'controller' => 'admin',
		'action' => 'deleteGood'
	],

	'admincodeEdit' => [
		'controller' => 'admin',
		'action' => 'codeEdit'
	]
];