@extends('layout')

@section('content')
    <a href="{{ route('tasks.create') }}" class="btn btn-add">+ Add Task</a>

    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <table>
        <tr>
            <th>Task Name</th>
            <th>Description</th>
            <th>Status</th>
            <th>Due Date</th>
            <th>Actions</th>
        </tr>
        @forelse($tasks as $task)
        <tr>
            <td>{{ $task->task_name }}</td>
            <td>{{ $task->description }}</td>
            <td class="status-{{ $task->status }}">{{ $task->status }}</td>
            <td>{{ $task->due_date }}</td>
            <td>
                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-edit">Edit</a>

                <form action="{{ route('tasks.updateStatus', $task->id) }}" method="POST" style="display:inline;">
                    @csrf @method('PATCH')
                    <button type="submit" class="btn btn-edit">Toggle Status</button>
                </form>

                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-delete" onclick="return confirm('Delete this task?')">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="5">No tasks yet.</td></tr>
        @endforelse
    </table>
@endsection