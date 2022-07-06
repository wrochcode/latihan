<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegestrationController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     // $this->middleware('auth')->except('index', 'show');
    // }

    public function create()
    {
        return view('auth.register');
    }
    public function store(RegistrationRequest $request)
    {
        // $attributes = $request->all();

        // ==================================================================================================
        // $attributes = request()->validate([
            //     'username'=> ['required', 'unique:users,username', 'min:3', 'max:25', 'alpha_num'],
            //     'name'=> ['required', 'min:3', 'string'],
            //     'email'=> ['required', 'unique:users', 'email'],
            //     'password'=> ['required', 'min:8'],
            // ]);
        // ==================================================================================================
            
        // $attributes['password'] = Hash::make($request->password);
        User::create($request->all());
        
        // User::create([
        //     'name'=> $request->name,
        //     'username'=> $request->username,
        //     'email'=> $request->email,
        //     'password'=> Hash::make($request->password),
        // ]);


        // $user = User::where('email', $request->email)
        //     ->orwhere('username', $request->username)
        //     ->first();

        // if($user){
        //     dd("sudah ada");
        // }

        // session()->put('key','value');
        // ========================================================================================
        // session()->flash('success','Thank you, you are now registered.');
        // return redirect('/');
        // ========================================================================================
        // session()->flash('success','Thank you, you are now registered.');
        return redirect('/')->with('success', 'Thank you, you are now registered.');
    }
}