<?php

namespace Barriers;

use Bones\Request;

class IsLoggedIn
{
	public $excludeRoutes = [
		// define routes to exclude from barrier check
	];

	public function check(Request $request)
	{
		if (auth()->check())
			return redirect(auth()->defaultRoute())->go();

		return true;
	}
}
