<?php

use App\Http\Controllers\AmountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FundController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ItemTypeController;
use App\Http\Controllers\ItemUnitController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionHistoryController;

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
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::resource('/items', ItemController::class)->except(['show'])->middleware('auth');
Route::resource('/item-types', ItemTypeController::class)->except(['show'])->middleware('auth');
Route::resource('/item-units', ItemUnitController::class)->except(['show'])->middleware('auth');
Route::resource('/suppliers', SupplierController::class)->except(['show'])->middleware('auth');
Route::resource('/customers', CustomerController::class)->except(['show'])->middleware('auth');
Route::resource('/transactions', TransactionController::class)->except(['show', 'destroy'])->middleware('auth');
Route::resource('/funds', FundController::class)->middleware('auth');
Route::resource('/histories', TransactionHistoryController::class)->middleware('auth');

Route::get('/amount', [AmountController::class, 'index'])->middleware('auth');
