<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\TaskRequest;//baru
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
     
        return view('task.index', [
            // 'tasks' => DB::table('tasks')->get(),
            // --------------------------------------------------------------------------
            // 'tasks' => DB::table('tasks')->orderBy('id', 'desc')->get(),
            'task' => new Task,
            'tasks' => Task::orderBy('id', 'desc')->get(),
            'submit' => 'Create',
        ]);
        // $tasks = DB::table('tasks')->get();
        // // dd($task);
        // return view('task.index', compact('tasks'));
    }

    // public function create()
    // {
    //     return view('task.create');
    // }

    // public function store(Request $request)
    public function store(TaskRequest $request)
    {
        // validation
        // php artisan make:request TaskRequest
        // ---------------------------------------------------------
        // $request->validate([
        //     // 'list'=>['required', 'min:3'],
        //     // 'list'=>['required', 'min:3', 'alpha'],
        //     // 'list'=>['required', 'min:3', 'alpha_num'],
        //     'list'=>['required', 'min:3', 'string'],
        // ]);


        // ---------------------------------------------------------
        Task::create($request->all());
        
        // ---------------------------------------------------------
        // Task::create([
        //     'list'=> $request->list,
        //     'mark'=> false,
        // ]);
        // ---------------------------------------------------------

        // Task::insert([
        //     'list'=> $request->list,
        // ]);


        // DB::table('tasks')->insert([
        //     'list'=> $request->list,
        // ]);

        // ---------------------------------------------------------

        // return redirect('tasks/create');
        // return redirect()->back();
        return back();
    }
    
    public function edit(Task $task)
    // public function edit($id)
    {
        // $task =Task::find($id);//only id
        // dd($task);
        // $task =Task::where('id', $id)->first();
        // $task = DB::table('tasks')->where('id', $id)->first();
        return view('task.edit', [
            'task'=>$task,
            'submit'=> 'Update'
        ]);
    }

    // public function update(Request $request, $id)
    public function update(TaskRequest $request, $id)
    {
        // DB::table('tasks')->where('id', $id)-> update(['list'=> $request->list]);
        Task::find($id)->update(['list'=> $request->list,]);
        return redirect('tasks');
    }

    public function destroy($id)
    {
        // $task = DB::table('tasks')->where('id', $id)->first();
        Task::find($id)->delete();
        // $task->delete;
        return back();
    }
}
