<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [FrontendController::class, 'index'])->name('homepage');

Route::get('about-us', [FrontendController::class, 'about'])->name('about');

Route::get('contact-us', [FrontendController::class, 'contact'])->name('contact');

Route::get('news/{category}/{id}/{title}/{description}', [FrontendController::class, 'news'])->name('news');

//POST CRUD
// index
// create
// store
// show
// edit
// update
// delete

//BASIC CRUD ROUTE
// Route::get('post', [PostController::class, 'index'])->name('post.index');
// Route::get('post/create', [PostController::class, 'create'])->name('post.create');
// Route::post('post', [PostController::class, 'store'])->name('post.store');
// Route::get('post/{id}', [PostController::class, 'show'])->name('post.show');
// Route::get('post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
// Route::put('post/{id}', [PostController::class, 'update'])->name('post.update');
// Route::delete('post/{id}', [PostController::class, 'destroy'])->name('post.destroy');

//RESOURCE ROUTE
Route::resource('post', PostController::class)->middleware('auth');
