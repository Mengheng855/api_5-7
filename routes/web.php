<?php

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

Route::get('/', function () {
    return view('user.user');
});
// Route::middleware('auth')->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/admin', function () {
            return view('dashboard.admin');
        });

        Route::get('/product', function () {
            return view('dashboard.product');
        });

        Route::get('/user', function () {
            return view('dashboard.user');
        });
    });
// });

Route::prefix('auth')->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::get('/register', function () {
        return view('auth.register');
    });
});
