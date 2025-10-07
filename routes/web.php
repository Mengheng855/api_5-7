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

Route::get('/dashboard/admin', function () {
    return view('dashboard.admin');
});
Route::get('/dashboard/admin', function () {
    return view('dashboard.admin');
});
Route::get('/dashboard/product', function () {
    return view('dashboard.product');
});
Route::get('/dashboard/user', function () {
    return view('dashboard.user');
});
Route::get('/', function () {
    return view('user.user');
});
Route::get('/auth/login', function () {
    return view('auth.login');
});
Route::get('/auth/register', function () {
    return view('auth.register');
});
