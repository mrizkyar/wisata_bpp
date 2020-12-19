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