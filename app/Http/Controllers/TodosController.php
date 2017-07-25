<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo;

// use App\Comment;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        // return session('message');
        $todos = Todo::latest()->where('user_id', '=', auth()->id())->get();

        return view('todos.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate(request(), [

            'title' => 'required|min:2',
            'description' => 'required|min:2'

        ]);
        // Todo::create(request(['title', 'description', 'priority', 'user_id']));
        // dd(auth()->id());
        Todo::create([

            'title' => request('title'),
            'description' => request('description'),
            'priority' => request('priority'),
            'user_id' => auth()->id()

        ]);

        session()->flash('message', 'Task have been created');

        return redirect('/todos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {

        return view('todos.show', compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate(request(), [

            'title' => 'required|min:2',
            'description' => 'required|min:2'

        ]);

        Todo::find($id)->update($request->all());

        session()->flash('message', 'Task have been updated');

        return redirect('/todos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $todo = Todo::find($id);

        $todo->delete();

        session()->flash('message', 'Task have been deleted');

        return back();

    }
}
