<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // php artisan make:controller PostController -m Post
    // ===========================================================================================
    // public function index()
    // {
    //     return view('home');
    // }
    public function __invoke()// berguna untuk 1 class aja
    {
        return view('home');
    }
}
