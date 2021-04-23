<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;

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
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);

//hak akses untuk admin
Route::group(['middleware' => 'admin'], function () {
    //admin
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/user/detail/{id}', [UserController::class, 'detail']);
    Route::get('/user/add', [UserController::class, 'add']);
    Route::get('/user/edit/{id}', [UserController::class, 'edit']);
    Route::get('/user/delete/{id}', [UserController::class, 'delete']);
    Route::post('/user/insert', [UserController::class, 'insert']);
    Route::post('/user/update/{id}', [UserController::class, 'update']);
});

//hak akses untuk users
Route::group(['middleware' => 'user'], function () {
    //users
    Route::get('/users', [UsersController::class, 'index']);
});

// Route::view('/user', 'v_user');
// Route::view('/about', 'v_about');

// Route::get('/', function () {
//     return view('home');
// });

// Route::view('/user', 'user');
// Route::view('/about', 'about');

// Route::view('/admin', 'admin.index');
// Route::view('/admin/add', 'admin.add');
// Route::view('/admin/edit', 'admin.edit');