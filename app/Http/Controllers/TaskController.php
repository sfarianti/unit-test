<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index() 
    {
        $task = Task::all();
        return view('task.index', compact('task'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'type'=>'required',
            'user_id' =>'nullable',
        ]);

        Task::create($request->all());
        
        return redirect()->route('task.index')->with('success', 'Task created successfully');
    }

    public function edit(Task $task)
    {
        return view ('task.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'type'=>'required',
            'user_id' =>'nullable'
        ]);

        $task->update($request->all());

        return redirect()->route('task.index')->with('success', 'Task update successfully');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('task.index')->with('success', 'Task deleted successfully');
    }


}
