<?php

use App\Http\Controllers\FrontendController;
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

Route::get('/', [FrontendController::class, 'index'])->name('homepage');

Route::get('about-us', [FrontendController::class, 'about'])->name('about');

Route::get('contact-us', [FrontendController::class, 'contact'])->name('contact');

Route::get('news/{category}/{id}/{title}/{description}', [FrontendController::class, 'news'])->name('news');
