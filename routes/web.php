<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/',[ProductController::class,'getPro']);
Route::middleware('auth')->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/admin', function () {
            return view('dashboard.admin');
        });
        Route::controller(UserController::class)->group(function(){
            Route::get('/user','getUser');
            Route::post('/addUsers','addUsers');
            Route::post('/deleteUser/{id}','deleteUser');
            Route::post('/editUser/{id}','editUser');
        });
        Route::controller(ProductController::class)->group(function(){
            Route::get('/product','product');
            Route::post('/addProduct','addProduct');
            Route::post('/delete/{id}','deleteProduct');
            Route::post('/editProduct/{id}','editProduct');
        });
        
    });
});
Route::controller(UserController::class)->group(function(){
    Route::prefix('auth')->group(function () {
        Route::get('/register','showRegister');
        Route::post('/addUser','addUser');
        Route::get('/showLogin','showLogin')->name('login');
        Route::post('/login','login');
        Route::post('/logout','logout');
    });
});

