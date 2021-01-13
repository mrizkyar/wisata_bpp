<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\AkomodasiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostUserController;
use App\Http\Controllers\KecamatanUserController;
use App\Http\Controllers\AkomodasiUserController;
use App\Http\Controllers\KomenController;
use App\Http\Controllers\KomentarAkomodasiController;

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
    return view('welcome');
});
Route::resource('/home/posts', PostController::class);
Route::resource('admin', AdminController::class);
Route::resource('/home/kecamatans', KecamatanController::class);
Route::resource('/home/akomodasis', AkomodasiController::class);
Route::resource('/home/users', UserController::class);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/changepassword', [App\Http\Controllers\ChangePasswordController::class, 'index']);
Route::post('/home/changepassword', [App\Http\Controllers\ChangePasswordController::class, 'store'])->name('change.password');
Route::resource('post', PostUserController::class);
Route::resource('kecamatan', KecamatanUserController::class);
Route::resource('akomodasi', AkomodasiUserController::class);
Route::post('/post/{post}/komen', [App\Http\Controllers\KomenController::class, 'store'])->name('post.komen.store');
Route::delete('/post/{post}/komen', [App\Http\Controllers\KomenController::class, 'destroy'])->name('post.komen.destroy');
Route::post('/akomodasi/{akomodasi}/comment', [App\Http\Controllers\CommentController::class, 'store'])->name('akomodasi.comment.store');
Route::delete('/akomodasi/{akomodasi}/comment', [App\Http\Controllers\CommentController::class, 'destroy'])->name('akomodasi.comment.destroy');