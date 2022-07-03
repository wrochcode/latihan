<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\RegestrationController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::get('/',fn()=> view('home'))// only view
// Route::get('/', [ HomeController::class, 'index']);
// -------------------------------------------------------------------------------------------------------------------------------
Route::get('/', HomeController::class);
// Route::get('profile/{identifier}', ProfileInformationController::class);
// -------------------------------------------------------------------------------------------------------------------------------
// Route::get('profile/{identifier}', [ProfileInformationController::class, '__invoke']);

// -------------------------------------------------------------------------------------------------------------------------------
Route::resource('tasks', TaskController::class);
// Route::get('tasks', [TaskController::class, 'index']);
// Route::get('tasks/create', [ TaskController::class, 'create']);
// Route::post('tasks', [TaskController::class, 'store']);
// Route::get('tasks/{id}/edit', [TaskController::class, 'edit']);
// Route::put('tasks/{id}', [TaskController::class, 'update']);
// Route::delete('tasks/{id}', [TaskController::class, 'destroy']);

// -------------------------------------------------------------------------------------------------------------------------------
// Route::get('contact', [ ContactController::class, 'create']);
// Route::post('contact', [ ContactController::class, 'store']);

// -------------------------------------------------------------------------------------------------------------------------------
// Route::get('/', function () {
//     // return view('welcome');
//     return "my name is excel";
// });

// Route::get('/', fn () => view('home'));
// // Route::get('/', fn () => dd(asset('css/app.css')));
// Route::view('store',  'store');
// Route::view('posts/first-post',  'posts.first-post');

// // Route::get('profile', function (Request $request) {
    // Route::get('profile/{username}/{post}', function ($username,$post) {
        //     // $name = $request-> name;
        
        //     // ======================================================================
        //     // $name = $request->get('name');
        //     // return "My name is excel";
//     // return view('profile', compact('name')); 
//     // ======================================================================
//     return view('profile', ['name'=> $username, 'post'=> $post]); 
// });
// -------------------------------------------------------------------------------------------------------------------------------

Route::get('users', [UserController::class, 'index'] );
// Route::get('users/{id}', [UserController::class, 'show'] );
Route::get('users/{user:username}', [UserController::class, 'show'] )->name('user.show');
// Route::get('users/{user}', [UserController::class, 'show'] )->name('user.show');

// -------------------------------------------------------------------------------------------------------------------------------

Route::get('register', [RegestrationController::class, 'create'])->name('register');
Route::post('register', [RegestrationController::class, 'store'])->name('register');

// Route::get('profile', function () {
    //     $name = "company profile";
    //     return view('profile', ['name' => $name]);
    //     // return view('profile', compact('name'));
    //     // return "my name is excel";
    // });
