<?php

use Bones\DataWing;
use Bones\Skeletons\DataWing\Skeleton;

return new class 
{

	protected $table = 'tl_users';

	public function arise()
	{
		DataWing::create($this->table, function (Skeleton $table)
		{
			$table->id()->primaryKey();

			$table->string('first_name');
			$table->string('last_name');
			$table->string('email')->nullable(false);
			$table->string('password')->nullable(false);
			$table->integer('age');
			$table->text('address');
			$table->unsignedBigInteger('type')->default(2);
			$table->integer('status')->default(1);
			$table->timestamps();
			$table->trashMask();

			return $table;
		});
	}

	public function fall()
	{
		DataWing::drop($this->table);
	}

};
