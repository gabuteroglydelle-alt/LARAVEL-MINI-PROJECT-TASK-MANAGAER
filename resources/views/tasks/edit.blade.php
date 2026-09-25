@extends('layout')

@section('content')
    <h2>Edit Task</h2>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf @method('PUT')
        <label>Task Name</label>
        <input type="text" name="task_name" value="{{ $task->task_name }}" required>

        <label>Description</label>
        <textarea name="description">{{ $task->description }}</textarea>

        <label>Status</label>
        <select name="status">
            <option value="Pending" @selected($task->status === 'Pending')>Pending</option>
            <option value="Completed" @selected($task->status === 'Completed')>Completed</option>
        </select>

        <label>Due Date</label>
        <input type="date" name="due_date" value="{{ $task->due_date }}">

        <button type="submit" class="btn btn-add">Update Task</button>
        <a href="{{ route('tasks.index') }}">Cancel</a>
    </form>
@endsection