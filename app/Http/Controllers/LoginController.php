<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(Request $request){
        $attributes = $request->validate([
            'email'=>['required', 'email'],
            'password'=>['required'],
        ]);

        // $credentials = ['email'=>$request->email,'password'=>$request->password];
        // $credentials = $request->only('email', 'password');
        // if(Auth::attempt($credentials)){
        if(Auth::attempt($attributes)){
            return redirect('/')->with('success', 'You are now logded in');
        }

        // $user = User::whereEmail($request->email)->first();
        // if($user){
        //     if(Hash::check($request->password ,$user->password)){
        //         Auth::login($user);
        //         return redirect('/')->with('success', 'You are now logded in');
        //         // dd($user);
        //     }
        // }

        throw ValidationException::withMessages([
            'email' => 'Your provide credential is not match our records.',
        ]);
    }
}
