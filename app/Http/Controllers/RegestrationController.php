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
            'username'=> ['required', 'unique:users,username', 'min:3', 'max:25', 'alpha_num'],
            'name'=> ['required', 'min:3', 'string'],
            'email'=> ['required', 'unique:users', 'email'],
            'password'=> ['required', 'min:8'],
        ]);

        // $user = User::where('email', $request->email)
        //     ->orwhere('username', $request->username)
        //     ->first();

        // if($user){
        //     dd("sudah ada");
        // }

        User::create([
            'name'=> $request->name,
            'username'=> $request->username,
            'email'=> $request->email,
            'password'=> Hash::make($request->name),
        ]);
        // session()->put('key','value');
        session()->flash('success','Thank you, you are now registered.');
        return redirect('/');
    }
}