<?php

use App\Http\Controllers\DashboardController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use PHPUnit\Framework\Attributes\PostCondition;

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

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "Adam",
        "email" => "Adam255@gmail.com",
        "image" => "adr.png",
        
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function()
{
    return view('category', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
        
    ]);
});

Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);
Route::get('/register',[LoginController::class, 'index'])->middleware('guest');
Route::post('/register',[LoginController::class, 'store']);

Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');


