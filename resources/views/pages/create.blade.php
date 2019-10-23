@extends('layouts.layout2')

@section('content')
<form  method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Task</label>
        <input type="text" name="task" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Task name">

    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    @endsection
