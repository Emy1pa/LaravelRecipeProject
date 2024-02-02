<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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
    
    return view('home');
});

Route::get('/signin', function () {
    return view('login');
});
Route::get('/posts', function () {
    return view('posts');
});
Route::get('/showPosts', function () {
    $posts = [];
    $posts = Post::where('user_id', auth()->id())->get();
    return view('showPosts', ['posts' => $posts]);
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/create_post', [PostController::class, 'createPost']);

Route::get('/edit-post/{post}', [PostController::class, 'showEditScreen']);
Route::get('/search', [PostController::class, 'search']);

Route::put('/edit-post/{post}', [PostController::class, 'Edit']);
Route::delete('/delete-post/{post}', [PostController::class, 'delete']);
