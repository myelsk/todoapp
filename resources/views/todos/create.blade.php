@extends('layouts.master')
@section('content')
  <form method="POST" action="/todos">
  {{ csrf_field() }}
    <h1 class="text-center">Create new task</h1>
    <div class="form-group">
      <label for="name">Name of Task</label>
      <input type="text" class="form-control" id="name" name="title">
    </div>
     <div class="form-group">
      <label for="description">Description of task</label>
      <textarea class="form-control" id="description" rows="3" name="description"></textarea>
    </div>
    <div class="form-group">
      <label for="priority">Choose a priority of task</label>
      <select class="form-control" id="priority" name="priority">
        <option>high</option>
        <option>normal</option>
        <option>low</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Create new task</button>
    @include('layouts.errors')
  </form>
@endsection