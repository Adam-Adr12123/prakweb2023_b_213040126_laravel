<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
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
        'categories' => Category::all()
        
    ]);
});

Route::get('/categories/{Category:slug}', function(Category $category)
{
    return view('category', [
        'title' =>"Post by category : $category->name",
        'posts' => $category->posts->load('category','author')

    ]);
});


Route::get('/authors/{author:username}',function(User $author){
    return view('posts', [
        'title' =>"Post By author $author->name",
        'posts' => $author->posts->load('category','author')
        
    ]);

});