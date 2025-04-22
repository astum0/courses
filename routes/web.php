<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SocialAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::prefix('/categories')->as('category.')->group(function()
{
    Route::get('/product/{id}', [ProductsController::class, 'details'])->name('details');
    Route::get('/{id}/all', [ProductsController::class, 'showOrCategory'])->name('showOrCategory');
});

Route::get('/contacts', [ContactsController::class, 'contacts'])->name('contacts');

Route::get('/cart', [CartController::class, 'cart'])->name('cart');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
