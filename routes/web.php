<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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
    return view('interface.index');
});
Route::resource('/category', CategoryController::class);
Route::resource('/role', RoleController::class);
Route::resource('/user', UserController::class);
Route::get('foundation', [CategoryController::class,'show_all_foundations'])->name('foundations.show');


