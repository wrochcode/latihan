<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileInformationController extends Controller
{
    public function __invoke(Request $request, $identifier)
    {
        // return view('profile', ['username' => $request->username]);
        return view('profile', ['username' => $identifier]);
        // dd('username' => $request->username);
        // $username = $request->username;
        // dd($request);
        // return view('profile', compact('username'));
        
    }
}
