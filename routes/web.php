<?php

use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\HelloWorld;
use App\Livewire\ShowPosts;
use App\Livewire\Todos;
use App\Livewire\UpdatePost;
use App\Livewire\ViewPost;
use App\Livewire\StudentCrud;
use App\Livewire\Index;
use App\Livewire\CounterOne;
use App\Livewire\Cart;
use App\Livewire\Register;
use App\Livewire\Login;
use App\Livewire\Dashboard;
use App\Livewire\Logout;
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
Route::get('/update-posts', UpdatePost::class);
Route::get('/view-post/{post}', ViewPost::class);
Route::get('/students', StudentCrud::class);
Route::get('/index', Index::class);
Route::get('/counter-ones', CounterOne::class);
Route::get('/cart', Cart::class);

Route::group(['middleware'=>'guest'], function(){
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');
});

Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/logout', Logout::class)->name('logout');
});

// Route::get('/update-post', UpdatePost::class);