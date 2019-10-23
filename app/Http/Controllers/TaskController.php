<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.create');
    }

    public function showTasks()
    {
        $tasks= Task::all();
//        return $tasks;
        return view('pages.showTasks',compact('tasks'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $task = new Task();
        $task->task= request('task');
        $task->isCompleted = 0;
        $task->save();
        return redirect("/showTasks");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editform($id)
    {
        $task= Task::find($id);
//        return $task;
        return view('pages.editTask', compact('task'));
    }

    public function edit($id)
    {
        $task = Task::find($id);

        $task->task= request('task');
        $task->isCompleted = request('isCompleted');
//        $task->name = 'New Flight Name';

        $task->save();
        return redirect("/showTasks");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   Task::find($id)->delete();
        return redirect("/showTasks");
    }
}
