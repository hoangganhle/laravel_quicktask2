@extends('layouts.app')
@section('content')
    <div class="container col-md-8 col-md-offset-2 mt-5">
        <div class="card">
            <div class="card-header ">
                <h5 class="float-left">Task</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body mt-2">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @if ($tasks->isEmpty())
                    <p> There is no task.</p>
                @else
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <td>{{ $task->id }} </td>
                                {{-- <td>{{ $task->name }}</td> --}}
                                <td>
                                    <a href="{{ action('TaskController@show',$task->id) }}"> {{ $task->name }} </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
