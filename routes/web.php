<?php

use App\Http\Controllers\UserController;
use App\Models\User;
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
Route::middleware(['auth'])->group(function(){
    Route::get('/user',[UserController::class,'user'])->name('user');
});
Route::controller(UserController::class)->group(function(){
    Route::get('/','login')->name('login');
    Route::get('/register','register')->name('register');
    Route::post('/add','add')->name('add');
});