@extends('layouts.app')
{{-- @section('title', 'View a ticket') --}}
@section('content')

    <div class="container col-md-8 col-md-offset-2 mt-5">
        <div class="card">
            <div class="card-header ">
                <h5 class="float-left">{{ $task->name }}</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
                <a href="{{ action('TaskController@edit', $task->id) }}" class="btn btn-info">Edit</a>
                <form method="post" action="{{ action('TaskController@destroy', $task->id) }}" class="float-left">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div>
                        <button type="submit" class="btn btn-warning">Delete</button>
                    </div>
                </form>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

@endsection
