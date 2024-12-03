<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\StatusController;

Route::get('/user', function (Request $request) {
  return $request->user();
})->middleware('auth:sanctum');

Route::get('/employees', function (Request $request) {
  return $request->user();
})->middleware('auth:sanctum');




Route::get('/status', [StatusController::class, 'index']);


Route::group(['middleware' => 'auth'], function () {
  Route::prefix('v1')->group(function () {
    Route::get('/tes', [EmployeeController::class, 'tes']);
  });
});
