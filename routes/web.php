<?php

use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\HelloWorld;
use App\Livewire\ShowPosts;
use App\Livewire\Todos;
use App\Livewire\UpdatePost;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Todos::class);
Route::get('/counter', Counter::class);
Route::get('/helloworld', HelloWorld::class);
Route::get('/show-posts', ShowPosts::class);
Route::get('/create-post', CreatePost::class);
Route::get('/update-post/{post}', UpdatePost::class);
Route::get('/update-posts', UpdatePost::class)->name('update-post.edit');

// Route::get('/update-post', UpdatePost::class);