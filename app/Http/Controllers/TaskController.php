<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
     
        return view('task.index', [
            // 'tasks' => DB::table('tasks')->get(),
            // --------------------------------------------------------------------------
            // 'tasks' => DB::table('tasks')->orderBy('id', 'desc')->get(),
            'tasks' => Task::orderBy('id', 'desc')->get(),
        ]);
        // $tasks = DB::table('tasks')->get();
        // // dd($task);
        // return view('task.index', compact('tasks'));
    }

    // public function create()
    // {
    //     return view('task.create');
    // }

    public function store(Request $request)
    {
        Task::create([
            'list'=> $request->list,
        ]);
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
    
    public function edit($id)
    {
        // $task =Task::where('id', $id)->first();
        $task =Task::find($id);//only id
        // $task = DB::table('tasks')->where('id', $id)->first();
        return view('task.edit', ['task'=>$task]);
    }

    public function update(Request $request, $id)
    {
        // DB::table('tasks')->where('id', $id)-> update(['list'=> $request->list]);
        Task::find($id)->update(['list'=> $request->list]);
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
