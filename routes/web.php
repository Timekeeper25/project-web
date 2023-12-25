<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IncomesController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\transactionDetailController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Authenticate;
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
Route::post('add_cart/{id}', [HomeController::class, 'add_cart']);
Route::get('show_cart', [HomeController::class, 'show_cart']);
Route::get('remove_cart/{id}', [HomeController::class, 'remove_cart']);

Auth::routes();

Route::middleware(Authenticate::class)->group(function () {
    Route::resource('transactionDetail', transactionDetailController::class)->middleware(Admin::class);
    Route::get('transactionDetail/{transactions_id}', 'transactionDetailController@show')->name('transactionDetail.show');
    Route::resource('stock', StockController::class)->middleware(Admin::class);
    Route::resource('cashier', CashierController::class)->middleware(Admin::class);
    Route::resource('customer', CustomerController::class)->middleware(Admin::class);
    Route::resource('incomes', IncomesController::class)->middleware(Admin::class);
    Route::resource('transaction', TransactionController::class)->middleware(Admin::class);
});



Route::prefix('admin')->group(function () {
});
// Tambahkan prefix pada route resource

// Route::get('/transactionDetail/{transactions_id}', [TransactionController::class, 'transactionDetail']);
// Route::resource('transactionDetail', transactionDetailController::class);
Route::post('/upload', 'UploadController@upload');


Route::get('/custom-logout', [AuthController::class, 'customLogout'])->name('custom-logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
