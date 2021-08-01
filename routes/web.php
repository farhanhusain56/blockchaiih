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
    return view('welcome');
});

Auth::routes();

Route::GET('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::GET('/logins', [App\Http\Controllers\BlockChaiihController::class, 'login'])->name('logins');

Route::GET('/password', [App\Http\Controllers\BlockChaiihController::class, 'password'])->name('password');

Route::GET('/number', [App\Http\Controllers\BlockChaiihController::class, 'number'])->name('number');

Route::GET('/signup', [App\Http\Controllers\BlockChaiihController::class, 'register'])->name('signup');

Route::POST('/signups', [App\Http\Controllers\BlockChaiihController::class, 'postRegister'])->name('signups');

Route::POST('/logins', [App\Http\Controllers\BlockChaiihController::class, 'postLogin'])->name('logins');

Route::POST('/number', [App\Http\Controllers\BlockChaiihController::class, 'postNumber'])->name('number');

Route::POST('/password', [App\Http\Controllers\BlockChaiihController::class, 'postPassword'])->name('password');




