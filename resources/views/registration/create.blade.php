@extends('layouts.master')

@section('content')

	<div class="col-sm-12">
		<h1 class="text-center">Registration form</h1>

		<form method="POST" action="/register">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="name">Your name:</label>
				<input type="text" id="name" class="form-control" name="name" required>
			</div>

			<div class="form-group">
				<label for="email">Your email:</label>
				<input type="email" id="email" class="form-control" name="email" required>
			</div>

			<div class="form-group">
				<label for="password">Your password:</label>
				<input type="password" id="password" class="form-control" name="password" required>
			</div>

			<div class="form-group">
				<label for="password_confirmation">Your password confirmation:</label>
				<input type="password" id="password_confirmation" class="form-control" name="password_confirmation" required>
			</div>


			<div class="form-group">
				<button type="submit" class="btn btn-primary">Register</button>
				<a href="/login">Already have an account?</a>
			</div>


			<div class="form-group">
				@include('layouts.errors')
			</div>
		</form>
	</div>

@endsection