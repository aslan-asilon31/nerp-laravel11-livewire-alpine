<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Master\Image\ImageIndex;


Route::prefix('master')->name('master.')->group(function () {

  Route::get('/image', ImageIndex::class)->name('image');
});
