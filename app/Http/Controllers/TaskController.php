<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{



    public function index()
    {
        $tasks = Task::where('user_id',auth()->user()->id)->get();

        $realTasks = [];

        foreach ($tasks as $task) {
            if($task->created_at->format("Y-m-d")==date('Y-m-d')){
                $realTasks[] = $task;
            }
        }

        return view('task.task', compact('realTasks'));
    }

    public function today()
    {
        $tasks = Task::where('user_id',auth()->user()->id)->get();

        $realTasks = [];

        foreach ($tasks as $task) {
            if($task->created_at->format("Y-m-d")==date('Y-m-d')){
                $realTasks[] = $task;
            }
        }

        return view('task.task', compact('realTasks'));
    }

    public function yesterday()
    {
        $tasks = Task::where('user_id',auth()->user()->id)->get();

        $realTasks = [];

        foreach ($tasks as $task) {
            if($task->created_at->format("Y-m-d")==date('Y-m-d',strtotime("-1 days"))){
                $realTasks[] = $task;
            }
        }

        return view('task.task', compact('realTasks'));
    }

    public function tomorrow()
    {
        $tasks = Task::where('user_id',auth()->user()->id)->get();

        $realTasks = [];

        foreach ($tasks as $task) {
            if($task->created_at->format("Y-m-d")==date('Y-m-d',strtotime("+1 days"))){
                $realTasks[] = $task;
            }
        }

        return view('task.task', compact('realTasks'));
    }

    public function all()
    {
        $realTasks = Task::orderBy('created_at','desc')->where('user_id',auth()->user()->id)->get();

        return view('task.task', compact('realTasks'));
    }


    public function store(Request $request)
    {


        $request->validate([
            'task_title' => 'required',
        ]);

        Task::create([
            'title' => $request->task_title,
            'user_id' => auth()->user()->id,
            'completed' => 0,
        ]);

        return redirect()->route('dashboard')
            ->with('success', 'Task created successfully.');
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Task deleted successfully');
    }

    public function complete($id)
    {
        $task = Task::find($id);
        $task->update([
            'completed' => 1,
        ]);

        return redirect()->route('dashboard')
            ->with('success', 'Task completed successfully');
    }

    public function incomplete($id)
    {
        $task = Task::find($id);
        $task->update([
            'completed' => 0,
        ]);

        return redirect()->route('dashboard')
            ->with('success', 'Task marked as incomplete successfully');
    }




}