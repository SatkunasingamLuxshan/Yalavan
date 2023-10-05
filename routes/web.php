<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/404', function () {
    return view('frontend.404');
});
Route::get('/aboutus', function () {
    return view('frontend.aboutus');
});
Route::get('/index', function () {
    return view('frontend.index');
});
Route::get('/blog', function () {
    return view('frontend.blog');
});
Route::get('/blogdeatils', function () {
    return view('frontend.blogdeatils');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
