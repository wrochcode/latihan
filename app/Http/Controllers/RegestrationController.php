<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegestrationController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        request()->validate([
            'username'=> ['required', 'min:3', 'max:25', 'alpha_num'],
            'name'=> ['required', 'min:3', 'string'],
            'email'=> ['required', 'email'],
            'password'=> ['required', 'min:8'],
        ]);

        User::create([
            'name'=> $request->name,
            'username'=> $request->username,
            'email'=> $request->email,
            'password'=> Hash::make($request->name),
        ]);
        return redirect('/');
    }
}
