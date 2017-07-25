@extends('layouts.master')

@section('content')

	<div class="col-sm-12">
		<h1 class="text-center">Sign in</h1>

		<form method="POST" action="/login">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="email">Your email:</label>
				<input type="email" id="email" class="form-control" name="email" required>
			</div>

			<div class="form-group">
				<label for="password">Your password:</label>
				<input type="password" id="password" class="form-control" name="password" required>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Sign In</button>
				<a href="/register">Dont have an account?</a>
			</div>

			

			<div class="form-group">
				@include('layouts.errors')
			</div>
		</form>
	</div>

@endsection