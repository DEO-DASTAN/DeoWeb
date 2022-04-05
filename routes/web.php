<?php

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

Route::get('/', function () {
    return view('index');
});


Route::get('/about', [App\Http\Controllers\DiDasControler::class, 'about'])->name('about');
Route::get('/blog', [App\Http\Controllers\DiDasControler::class, 'blog_entries'])->name('blog');
Route::get('/contact', [App\Http\Controllers\DiDasControler::class, 'contact'])->name('contact');
Route::get('/post_detail', [App\Http\Controllers\DiDasControler::class, 'post_detail'])->name('post_detail');
Route::get('/home', [App\Http\Controllers\DiDasControler::class, 'home'])->name('home');
Route::get('/login', [App\Http\Controllers\DiDasControler::class, 'login'])->name('login');
//blog_entries



