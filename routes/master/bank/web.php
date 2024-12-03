<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Master\Bank\BankIndex;
use App\Livewire\Pages\Master\Bank\BankCrud;


Route::prefix('master')->name('master.bank.')->group(function () {
  Route::get('/bank', BankIndex::class)->name('index');
  Route::get('/bank/create', BankCrud::class)->name('create');
});
