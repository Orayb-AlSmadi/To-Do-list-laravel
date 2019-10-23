@extends('layouts.layout2')

@section('content')
    <form  method="post">
        {{method_field('PATCH')}}
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Task</label>
            <input type="text" name="task" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Task name" value="{{$task['task']}}">

        </div>

        <select class="custom-select" name="isCompleted">
            @if($task['isCompleted']==0)
                <option value="0" selected>Not complete</option>
                <option value="1">Completed</option>
            @else
                <option value="0">Not complete</option>
                <option value="1" selected>Completed</option>
            @endif
        </select>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
