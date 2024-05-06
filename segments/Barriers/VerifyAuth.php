<?php

namespace Barriers;

use Bones\Request;

class VerifyAuth
{
	public $excludeRoutes = [
		// define routes to exclude from barrier check
	];

	public function check(Request $request)
	{
		if (!auth()->check())
			return redirect(route('auth.login'))->go();

		return true;
	}
}
