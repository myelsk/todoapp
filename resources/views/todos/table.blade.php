
<table class="table">
	<tr>
		<th>is_completed</th>
		<th>Title</th>
		<th>Created</th>
		<th class="text-center">Priority</th>
		<th colspan="2" class="text-center">action</th>
	</tr>
	@foreach($todos as $todo)
		<tr>
			<td>
				@if($todo->is_completed) yes
				@else no
				@endif
			</td>
			<td>
				@if($todo->is_completed)
					<a href="/todos/{{ $todo->id }}"><strike>{{ $todo->title }}</strike></a>
				@else
					<a href="/todos/{{ $todo->id }}">{{ $todo->title }}</a>
				@endif
			</td>
			<td>{{ $todo->created_at->diffForHumans() }}</td>
			<td class="text-center"><span class="{{ $todo->priority }}-priority">{{ $todo->priority }}</span></td>
			<td class="text-center">
				<form action="/todos/{{ $todo->id }}" method="post">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button type="submit" class="btn"><i class="fa fa-trash" aria-hidden="true"></i></button>
				</form>
    		</td>
			<td class="text-center">
				<form action="/todos/{{ $todo->id }}/edit" method="post" >
					{{ csrf_field() }}
					<button type="submit" class="btn"><i class="fa fa-pencil" aria-hidden="true"></i></button>
				</form>
    		</td>
		</tr>
	
	@endforeach
</table>