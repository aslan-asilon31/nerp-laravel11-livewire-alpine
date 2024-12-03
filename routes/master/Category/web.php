<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Master\Category\CategoryIndex;


Route::prefix('master')->name('master.')->group(function () {

  Route::get('/category', CategoryIndex::class)->name('category');
});
