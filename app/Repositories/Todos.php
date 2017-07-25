<?php

namespace App\Repositories;

use App\Todo;

class Todos
{
	public function all()
	{
		return Todo::all();
	}

	public function find()
	{

	}
}