<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\EmployeeController;
use App\Livewire\Pages\Sales\DashboardSales;
use App\Livewire\Pages\Warehouse\DashboardWarehouse;


Route::get('/', function () {
  return view('welcome');
});

Route::middleware([
  'auth:sanctum',
  config('jetstream.auth_session'),
  'verified',
])->group(function () {
  // Route::get('/dashboard', function () {
  //     return view('dashboard');
  // })->name('dashboard');
  // Route::get('/dashboard', [\App\Livewire\ShowDashboard::class, '__invoke'])->name('dashboard');
  Route::get('/admin-user-list', [UserController::class, 'index'])->name('admin-user.list')->middleware('guest');
  Route::get('/user-list', [\App\Livewire\User\ShowUser::class, '__invoke'])->name('user.list')->middleware('guest');
});




Route::prefix('sales')->name('sales.')->group(function () {
  Route::get('/dashboard', DashboardSales::class)->name('dashboard');
});

Route::prefix('warehouse')->name('warehouse.')->group(function () {
  Route::get('/dashboard', DashboardWarehouse::class)->name('dashboard');
});

Route::prefix('hr')->name('hr.')->group(function () {
  Route::get('/dashboard', DashboardHR::class)->name('dashboard');
});

Route::prefix('marketing')->name('marketing.')->group(function () {
  Route::get('/dashboard', DashboardMarketing::class)->name('dashboard');
});

Route::prefix('welcome')->name('welcome.')->group(function () {
  Route::get('/dashboard', DashboardWelcome::class)->name('dashboard');
});

Route::prefix('service')->name('service.')->group(function () {
  Route::get('/dashboard', DashboardService::class)->name('dashboard');
});



Route::get('/user-cek', function () {
  // return view('user');
  return view('livewire.user.show-user');
});

Route::get('/post-cek', function () {
  // return view('user');
  return view('livewire.posts');
});

Route::get('/post', function () {
  return view('mypost');
});

// Route::get('/dashboard', \App\Livewire\Pages\Dashboard::class)->name('dashboard');


Route::get('/employee', function () {
  return view('admin.employee.employee');
});


Route::prefix('api')->group(function () {
  Route::get('/employees', [EmployeeController::class, 'index'])->middleware('auth:sanctum');
});


Route::group(['middleware' => 'auth'], function () {});
