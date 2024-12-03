<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Master\Price\PriceIndex;


Route::prefix('master')->name('master.')->group(function () {

  Route::get('/price', PriceIndex::class)->name('price');
});
