<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use App\Http\Requests\TasksRequest;
use App\Models\Task;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function store(TasksRequest $request)
    {
        $validated = $request->validated();
        Task::create($request->all());
        return back()->with('success', trans('tasks.addsuccess'));
    }

    public function update(TasksRequest $request, $id)
    {
        try {
            $validated = $request->validated();
            $task = Task::findOrFail($id); 
            $task->name = $request->name;
            $task->save();
            return back()->with('success', trans('tasks.editsuccess'));
        } catch (ModelNotFoundException $e) {
            return back()->with('false', trans('tasks.findfail'));
        }
    }

    public function destroy($id)
    {
        try {
            $task = Task::findOrFail($id); 
            $task->delete();
            return back()->with('success', trans('tasks.deletesuccess'));
        } catch (ModelNotFoundException $e) {
            return back()->with('false', trans('tasks.findfail'));
        }
    }
}
