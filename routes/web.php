<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\EmployeeController;
use App\Livewire\Pages\Sales\DashboardSales;
use App\Livewire\Pages\Marketing\DashboardMarketing;
use App\Livewire\Pages\Welcome\DashboardWelcome;
use App\Livewire\Pages\Manufacture\DashboardManufacture;
use App\Livewire\Pages\Warehouse\DashboardWarehouse;
use App\Livewire\Pages\Service\DashboardService;
use App\Livewire\Pages\Hr\DashboardHr;
use App\Livewire\Pages\Sales\SalesBestSeller;
use App\Livewire\Pages\Sales\SalesCustomer;
use App\Livewire\Pages\Sales\SalesExtraSales;
use App\Livewire\Pages\Sales\SalesProductSales\SalesProductSales;
use App\Livewire\Pages\Sales\SalesProductSales\SalesProductSalesCrud;
use App\Livewire\Pages\Sales\Product\Warehouse\WarehouseIndex;
use App\Livewire\Pages\Sales\Product\Region\RegionIndex;
use App\Livewire\Pages\Sales\Product\Price\PriceIndex;
use App\Livewire\Pages\Sales\Product\Image\ImageIndex;
use App\Livewire\Pages\Sales\Product\Department\DepartmentIndex;
use App\Livewire\Pages\Sales\Product\Company\CompanyIndex;
use App\Livewire\Pages\Sales\Product\Bank\BankIndex;
use App\Livewire\Pages\Master\Brand\BrandIndex;
use App\Livewire\Pages\Sales\Product\Category\CategoryIndex;

use App\Livewire\Pages\Sales\SalesCrud;
use App\Livewire\Pages\Sales\SalesReport;
use App\Livewire\Pages\Sales\SalesSubExtraSales;

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
  Route::get('/best-seller', SalesBestSeller::class)->name('best-seller');
  Route::get('/customer', SalesCustomer::class)->name('customer');
  Route::get('/extra-sales', SalesExtraSales::class)->name('extra-sales');

  Route::get('/category', CategoryIndex::class)->name('category');

  Route::get('/product', ProductIndex::class)->name('product');
  Route::get('/products/create', ProductCrud::class)->name('product-create');
  Route::get('/product/{id}/edit', ProductCrud::class)->name('product-create');
  Route::get('/product/{id}/destroy', ProductCrud::class, 'destroy')->name('product-create');

  Route::get('/report', SalesReport::class)->name('report');
  Route::get('/sub-extra-sales', SalesSubExtraSales::class)->name('sub-extra-sales');
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


Route::prefix('manufacture')->name('manufacture.')->group(function () {
  Route::get('/dashboard', DashboardManufacture::class)->name('dashboard');
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



// Route::get('/sales', DashboardSales::class)->name('sales.dashboard');
// Route::get('/warehouse', DashboardWarehouse::class)->name('warehouse.dashboard');
