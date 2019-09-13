@extends('../layouts.master')
@section('title')
    {{ trans('tasks.taskname') }}
@endsection

@section('content')
    @if ($tasks)
        <table class="table table-hover mt-2">
            <!-- Table Headings -->
            <thead class="table-primary">
                <th>{{ trans('tasks.taskname') }}</th>
                <th>{{ trans('tasks.created') }}</th>
                <th>{{ trans('tasks.action') }}</th>
            </thead>
            <!-- Table Body -->
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td class="table-text">{{ $task->name }}</td>
                        <td>{{ $task->created_at }}</td>
                        <td>
                            <a name="" id="" class="btn btn-danger" href="" role="button">{{ trans('tasks.delete') }}</a>
                            <button type="button" class="btn btn-primary">{{ trans('tasks.edit') }}</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection

