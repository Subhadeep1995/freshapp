@extends('layouts.app')

@section('content')    

    <div class="panel panel-default">
        <div class="panel-body">
            @include('common.errors')
            <form action="{{url ('task')}}" method="post" class"form-horizontal">
                <div class="form-group">
                    <div class="col-md-1"><label for="name" class="control-label">Task:</label></div>
                    <div class="col-md-8"><input type="text" class="form-control" id="name" name="name"></div>
                    <div class="col-md-3"><button type="submit" class="btn btn-primary">Create Task</button></div>
                </div>
                {{ csrf_field() }}
            </form>
        </div>
    </div>

    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-header"><h3>Pending Tasks</h3></div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                        <th>Tasks</th>
                        <th>button</th>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $task->name }}</td>
                                <td>
                                    <form action="{{ url('task/' . $task->id)}}" method="post">
                                        <button class="btn btn-danger">Delete</button>
                                        {{ method_field('DELETE')}}
                                        {{ csrf_field() }}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

@endsection