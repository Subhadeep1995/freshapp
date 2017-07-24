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

@endsection