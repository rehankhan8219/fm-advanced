<?php

namespace Barriers;

use Bones\Request;

class UserOnly
{
	public $excludeRoutes = [
		// define routes to exclude from barrier check
	];

	public function check(Request $request)
	{
		if (!auth()->check() || !auth()->user()->isUser())
			return redirect(auth()->defaultRoute())->go();

		return true;
	}
}
