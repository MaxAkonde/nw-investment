<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvisController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TopicController;

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

Route::get('/', [PageController::class, 'home']);

Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/single/{post}', [PageController::class, 'single'])->name('single');
Route::get('/mentions', [PageController::class, 'mention'])->name('mention');
Route::get('/conditions', [PageController::class, 'conditions'])->name('conditions');
Route::get('/investir', [PageController::class, 'investir'])->name('investir');
Route::post('/sendmail', [PageController::class, 'sendMail'])->name('sendMail');

Auth::routes();

Route::get('/register', function() {
    return 'Access denied !';
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/topics', TopicController::class);
Route::resource('/posts', PostController::class);
Route::resource('/avis', AvisController::class);