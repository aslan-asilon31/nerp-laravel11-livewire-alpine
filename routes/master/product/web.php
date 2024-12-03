<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Master\Product\ProductIndex;
use App\Livewire\Pages\Master\Product\ProductCrud;

Route::prefix('master')->name('master.product.')->group(function () {

  Route::get('/product', ProductIndex::class)->name('index');
  Route::get('/products/create', ProductCrud::class)->name('create');

  // Route::get('/product', ProductIndex::class)->name('product');
  // Route::get('/product/{id}/edit', ProductCrud::class)->name('product-create');
  // Route::get('/product/{id}/destroy', ProductCrud::class, 'destroy')->name('product-create');
});
