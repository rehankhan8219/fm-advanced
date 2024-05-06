<?php

use Barriers\AdminOnly;
use Barriers\IsLoggedIn;
use Barriers\UserOnly;
use Barriers\VerifyAuth;
use Barriers\VerifyRequest;

return [

	// Add Barrier aliases to use as an alias
	'Barriers' => [
		'verify-request' => VerifyRequest::class,
		'is-logged-in' => IsLoggedIn::class,
		'verify-auth' => VerifyAuth::class,
		'admin-only' => AdminOnly::class,
		'user-only' => UserOnly::class
	],

	'Form' => Contributors\Particles\Form::class,
	'Html' => Contributors\Particles\Html::class,

];