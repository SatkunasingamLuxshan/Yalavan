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
    return view('auth.login');
});
// Route::get('/404', function () {
//     return view('frontend.404');
// });
// Route::get('/aboutus', function () {
//     return view('frontend.aboutus');
// });
// Route::get('/index', function () {
//     return view('frontend.index');
// });
// Route::get('/blog', function () {
//     return view('frontend.blog');
// });
// Route::get('/blogdeatils', function () {
//     return view('frontend.blogdeatils');
// });
// Route::get('/contact', function () {
//     return view('frontend.contact');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index1'])->name('index');
Route::get('/error', [App\Http\Controllers\HomeController::class, 'error'])->name('error');
Route::get('/aboutus', [App\Http\Controllers\HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/blogdeatils', [App\Http\Controllers\HomeController::class, 'blogdeatils'])->name('blogdeatils');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
