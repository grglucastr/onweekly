<?php 

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function showTasks()
    {
        return response()->json(Task::where('active', 1)->get());
    }

    public function showOneTask($id)
    {
        $task = Task::findOrFail($id);
        return response()->json($task, 200);
    }

    public function addNewTask(Request $request)
    {
        Task::create($request->all());
    }

    public function updateTask($id, Request $request)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());
        return response()->json($task, 200);
    }

    public function deleteTask($id)
    {
        $task = Task::findOrFail($id);
        $task->active(false);
        $task->save();
        return response()->json($task->refresh(), 200);
    }

}