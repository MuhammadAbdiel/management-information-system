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
    return view('contents.home');
});

Route::get('/login', function () {
    return view('contents.login');
});

Route::get('/register', function () {
    return view('contents.register');
});

Route::get('/items', function () {
    return view('contents.items.index');
});

Route::get('/funds', function () {
    return view('contents.funds.index');
});

Route::get('/transactions', function () {
    return view('contents.transactions.index');
});

Route::get('/suppliers', function () {
    return view('contents.suppliers.index');
});

Route::get('/customers', function () {
    return view('contents.customers.index');
});
