<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks=Task::all();
        return view('index',compact('tasks'));
    }

    public function create(Task $request)
    {

        return view('common.errors');
    }

    public function store(Request $request)
    {
       /* dd($request->all());*/
        $task =new Task();
        $task->name = $request->get('name');
        $task->save();

        return redirect('/tasks')->with('status','Add task successfully');
    }

    public function show($id){
        // dd($id);
        $task=Task::findOrFail($id);
        return view ('show',compact('task'));
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect('/tasks')->with('status','The task '.$id.' has been destroyed');
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('common.edit',compact('task'));
    }

    public function update(Request $request, $id)
    {
        $task=Task::findOrFail($id);
        $task->name = $request->get('name');
        $task->save();
        return redirect('/tasks')->with('status','The task '.$id.' has been updated!');
    }
}
