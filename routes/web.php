<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SneatPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

Route::get('/data', [DataController::class, 'index'])->name('data');

Route::prefix('ecommerce')->name('ecommerce.')->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/{page}.html', [SneatPageController::class, 'show'])->name('products.html_alias');
});

// Dynamic routes for all Sneat PRO template pages (.html across any subpath or root)
Route::get('/{path}', [SneatPageController::class, 'show'])
    ->where('path', '.*\.html$')
    ->name('sneat.html');

Route::get('/{page}', [SneatPageController::class, 'show'])
    ->where('page', '[a-zA-Z0-9_\-]+')
    ->name('sneat.page');
