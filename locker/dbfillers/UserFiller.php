<?php

namespace Bones\Skeletons\DBFiller;

use Bones\Database;

return new class
{
	protected $table = 'tl_users';

	public function fill()
	{
		Database::table($this->table)->insertMulti([
			[
				'first_name' => 'Mahammadali',
				'last_name' => 'Manknojiya',
				'email' => 'admin@admin.com',
				'password' => md5('secret'),
				'age' => '29',
				'type' => 1,
				'address' => 'Near new masid, chadotar - 385001'
			],
			[
				'first_name' => 'Ayat Zahera',
				'last_name' => 'Manknojiya',
				'email' => 'user@user.com',
				'password' => md5('secret'),
				'age' => '3',
				'type' => 2,
				'address' => 'Baagh-e-Batul, Near new masid, chadotar - 385001'
			]
		]);
	}

};