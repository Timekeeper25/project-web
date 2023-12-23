<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IncomesController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\transactionDetailController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

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

route::get('/redirect', [HomeController::class, 'redirect']);
route::get('/',[HomeController::class, 'index']);

Auth::routes();


Route::get('/transactionDetail/{transactions_id}', [transactionDetailController::class, 'transactionDetail']);
Route::resource('transactionDetail', transactionDetailController::class);
Route::resource('stock', StockController::class);
Route::resource('cashier', CashierController::class);
Route::resource('customer', CustomerController::class);
Route::resource('incomes', IncomesController::class);
Route::resource('transaction', TransactionController::class);

Route::prefix('admin')->group(function () {
});
// Tambahkan prefix pada route resource

// Route::get('/transactionDetail/{transactions_id}', [TransactionController::class, 'transactionDetail']);
// Route::resource('transactionDetail', transactionDetailController::class);
Route::post('/upload', 'UploadController@upload');


Route::get('/custom-logout', [AuthController::class, 'customLogout'])->name('custom-logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
