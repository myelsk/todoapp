@extends('layouts.master')
@section('content')
	<h3 class="text-center">Name of task: {{ $todo->title }}</h3>
	<p class="description-task">Description: {{ $todo->description }}</p>
	<a href="/todos"><button class="btn btn-primary">back</button></a>
@endsection