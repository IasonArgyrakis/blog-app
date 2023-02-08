<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserPostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/',[PostController::class,'index'])->name('index');

Route::get('user/{user}/posts',[UserPostController::class,'index'])->name('user.posts');

Route::get('post/{slug}',[PostController::class,'view'])->name('post.view');



Route::get('/home', [HomeController::class, 'index'])->name('home');
