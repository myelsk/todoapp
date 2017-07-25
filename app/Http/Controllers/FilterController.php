<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo;

class FilterController extends Controller
{
    
	public function filter($priority)
	{

		$todos = Todo::where([

			'priority' => $priority,
			'user_id' => auth()->id()

		])->get();

		return view('todos.index', compact('todos'));

	}

}
