@extends('layouts.master')
@section('content')
<form method="POST" action="/todos/{{ $todo->id }}">
  {{ csrf_field() }}
  {{ method_field('PUT') }}
    <h1 class="text-center">Edit task</h1>
    <div class="form-group">
      <label for="name">Edit name of Task</label>
      <input type="text" class="form-control" id="name" name="title" value="{{ $todo->title }}">
    </div>
     <div class="form-group">
      <label for="description">Edit description of task</label>
      <textarea class="form-control" id="description" rows="3" name="description">{{ $todo->description }}</textarea>
    </div>
    <div class="form-group">
      <label for="priority">Choose a priority of task</label>
      <select class="form-control" id="priority" name="priority">
        <option>high</option>
        <option>normal</option>
        <option>low</option>
      </select>
    </div>

    <div class="form-group">
      <label for="is_completed">Is task completed?</label>
      <select class="form-control" id="is_completed" name="is_completed">
        <option>0</option>
        <option>1</option>
      </select>
    </div>
        <button type="submit" class="btn btn-primary">Update task</button>
    @include('layouts.errors')
</form>
@endsection