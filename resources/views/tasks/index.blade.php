@extends('../layouts.master')
@section('title')
    {{ trans('tasks.taskname') }}
@endsection

@section('content')
    <form action="{{Route('tasks.store')}}" method="post">
        @csrf
        @include('errors/errors')
        <div class="form-group">
            <label for="">{{ trans('tasks.taskname') }}</label>
            <input type="text" name="name" id="" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">{{ trans('tasks.submit') }}</button>
    </form>

    @if ($tasks)
        <table class="table table-hover mt-2">
            <thead class="table-primary">
                <th>{{ trans('tasks.taskname') }}</th>
                <th>{{ trans('tasks.created') }}</th>
                <th>{{ trans('tasks.action') }}</th>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td class="table-text">{{ $task->name }}</td>
                        <td>{{ $task->created_at }}</td>
                        <td>
                            <div class="btn btn-group">
                                <form action="{{Route('tasks.destroy', $task->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit">{{ trans('tasks.delete') }}</button>
                                </form>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit{{$task->id}}">{{ trans('tasks.edit') }}</button>
                            </div>
                           </td>
                        <form action="{{Route('tasks.update', $task->id)}}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="modal" id="edit{{$task->id}}">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ trans('tasks.edittask') . $task->id }}  </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">{{ trans('tasks.name')}}</label>
                                            <input type="text" name="name"  class="form-control" value="{{$task->name}}">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">{{ trans('tasks.save')}}</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('tasks.close')}}</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
