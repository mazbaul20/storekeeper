<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;

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

Route::get('/', function () {
    return view('welcome');
});
//dashboard 
Route::get('/dashboard',[DashboardController::class,'DashboardInfo'])->middleware(['auth', 'verified'])->name('dashboard.page');

Route::middleware('auth')->group(function(){
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/logout', [DashboardController::class, 'Logout'])->name('dashboard.logout');
});

Route::middleware('auth')->group(function(){
    // products page
    Route::get('/products', [ProductController::class, 'products'])->name('product.page');
    Route::get('/create', [ProductController::class, 'create'])->name('product.create.page');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/edit/{id}', [ProductController::class, 'Edit'])->name('product.edit.page');
    Route::post('/update/{id}', [ProductController::class, 'Update'])->name('product.update');
    Route::get('/delete/{id}', [ProductController::class, 'Delete'])->name('product.delete');

    //Sale Page
    Route::get('/sale', [SaleController::class, 'SalePage'])->name('sale.page');
    Route::post('/store-sale', [SaleController::class, 'SaleStore'])->name('sale.store');

    //transaction page
    Route::get('/transactions', [TransactionController::class, 'TransactionsPage'])->name('transactions.page');
});

require __DIR__.'/auth.php';