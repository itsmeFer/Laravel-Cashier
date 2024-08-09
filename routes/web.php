<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::post('/products/{product}/add', [ProductController::class, 'addToCart'])->name('products.addToCart');
Route::get('/cart', [ProductController::class, 'cart'])->name('products.cart');
Route::post('/checkout', [ProductController::class, 'checkout'])->name('products.checkout');
use App\Http\Controllers\Auth\LoginController;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
use App\Http\Controllers\CartController;

Route::get('cart', [CartController::class, 'index'])->name('cart.index');
Route::get('cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

// Rute untuk Cart
Route::get('cart', [CartController::class, 'index'])->name('cart.index');
Route::get('cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

// Rute untuk Profil Pengguna
Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');

Route::get('products', [ProductController::class, 'index'])->name('products.index');
