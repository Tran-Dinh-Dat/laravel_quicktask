@extends('layouts.master')
@section('title')
    {{ trans('tasks.404')}}
@endsection
@section('content')
    <div class="page-wrap d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <span class="display-1 d-block">{{ trans('tasks.404')}}</span>
                    <div class="mb-4 lead">{{ trans('tasks.404ct')}}</div>
                    <a href="{{Route('tasks.index')}}" class="btn btn-link">{{ trans('tasks.backtohome')}}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
