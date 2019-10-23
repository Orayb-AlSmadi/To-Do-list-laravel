@extends('layouts.layout2')

@section('content')
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Is Completed</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $T)
            <tr>
                <th scope="row">{{$T['id']}}</th>
                <td>{{$T['task']}}</td>
                @if($T['isCompleted']==0)
                    <td>No</td>
                @else
                    <td>Yes</td>
                @endif
                <td>
                    <form method="get" action="/editTask/{{$T['id']}}"  >
                        <button type="submit" class="btn btn-info">Edit</button>
                    </form>
                </td>
                <td>
                    <form method="post" action="/showTasks/{{$T['id']}}" >
                        {{method_field('DELETE')}}
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>

    @endsection
