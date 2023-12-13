<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DataUserController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Home
Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('post', [HomeController::class, 'dashboard'])->middleware(['auth', 'admin']);

// Rental
Route::get('rental', [ProductController::class, 'rental'])->middleware('auth')->name('rental');
Route::get('cart', [ProductController::class, 'cart'])->middleware('auth')->name('cart');

// Cart Operations
Route::post('/item/{id}', [ProductController::class, 'addToCart'])->name('additem.to.cart');

// Update and delete cart item routes
Route::patch('/update-cart-item/{id}', [ProductController::class, 'updateCartItem'])->name('update.cart.item');
Route::delete('/delete-cart-item/{id}', [ProductController::class, 'deleteCartItem'])->name('delete.cart.item');

// Checkout
Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');

// Your Orders
Route::get('/orders', [OrderController::class, 'orders'])->middleware('auth')->name('orders');


// Return Order
Route::post('/return-order/{orderId}', [OrderController::class, 'returnOrder'])->name('return.order');

// Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Admin

//Dashboard

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'admin']);
// Route::get('/data-users', [DataUserController::class, 'index'])->middleware(['auth', 'admin']);
Route::resource('/data-user', \App\Http\Controllers\Admin\DataUserController::class);
Route::resource('/data-produk', \App\Http\Controllers\Admin\DataProdukController::class);
Route::resource('/data-transaksi', \App\Http\Controllers\Admin\DataTransaksiController::class);
Route::resource('/data-pengembalian', \App\Http\Controllers\Admin\DataPengembalianController::class);
Route::get('/admin/returns', [AdminDashboardController::class, 'returns'])->name('admin.returns');

// Authentication Routes...
require __DIR__.'/auth.php';
