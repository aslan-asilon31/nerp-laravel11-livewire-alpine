<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Master\Region\RegionIndex;


Route::prefix('master')->name('master.')->group(function () {

  Route::get('/region', RegionIndex::class)->name('region');
});
