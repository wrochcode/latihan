<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
     
        return view('task.index', [
            // 'tasks' => DB::table('tasks')->get(),
            'tasks' => DB::table('tasks')->orderBy('id', 'desc')->get(),
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
        DB::table('tasks')->insert([
            'list'=> $request->list,
        ]);
        // return redirect('tasks/create');
        // return redirect()->back();
        return back();
    }
}
