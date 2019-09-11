@extends('../layouts.master')
@section('title')
    Tasks
@endsection

@section('content')
    @if (count($tasks) > 0)
        <table class="table table-hover mt-2">
            <!-- Table Headings -->
            <thead class="table-primary">
                <th>Task</th>
                <th>Created at</th>
                <th>Action</th>
            </thead>
            <!-- Table Body -->
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td class="table-text">{{ $task->name }}</td>
                        <td>{{ $task->created_at }}</td>
                        <td>
                            <a name="" id="" class="btn btn-danger" href="" role="button">Delete</a>
                            <button type="button" class="btn btn-primary">Edit</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection