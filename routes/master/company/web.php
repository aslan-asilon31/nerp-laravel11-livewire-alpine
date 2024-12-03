<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Master\Brand\BrandIndex;


Route::prefix('master')->name('master.')->group(function () {

  Route::get('/company', BrandIndex::class)->name('company');
});
