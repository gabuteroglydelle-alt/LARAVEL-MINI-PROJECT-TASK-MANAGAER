@extends('layout')

@section('content')
    <h2>Add Task</h2>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label>Task Name</label>
        <input type="text" name="task_name" required>

        <label>Description</label>
        <textarea name="description"></textarea>

        <label>Due Date</label>
        <input type="date" name="due_date">

        <button type="submit" class="btn btn-add">Save Task</button>
        <a href="{{ route('tasks.index') }}">Cancel</a>
    </form>
@endsection