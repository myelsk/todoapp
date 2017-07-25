@extends('layouts.master')
@section('content')
		<div class="row">
			<div class="filter-wrapper col-sm-6">
				<p class="col-sm-6 filter-title">Show only tasks with priotiry</p>
				<div class="filter">
					<a class="badge badge-primary" href="/todos/filter/high">high</a>
					<a class="badge badge-primary" href="/todos/filter/normal">normal</a>
					<a class="badge badge-primary" href="/todos/filter/low">low</a>
					<a class="badge badge-primary" href="/todos">show all</a>
				</div>
			</div>

			@if(Auth::check()) 
				<div class="col-sm-6 text-right">
					<span>Welcome back, {{ Auth::user()->name }}</span>
					<a href="/logout" class="badge badge-primary">logout</a>
				</div>
			@endif
		</div>
	@include('todos.table')

 	<a href="/todos/create">
 		<button class="btn btn-primary">Create new Task</button>
 	</a>


 	@if($flash = session('message'))
		<div class="alert alert-success alert-msg" role="alert">{{ $flash }}</div>
	@endif
@endsection
