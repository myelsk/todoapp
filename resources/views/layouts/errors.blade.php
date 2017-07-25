@if(count($errors->all()))
   <div class="alert alert-danger error-block">
	   <ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
   </div>
@endif