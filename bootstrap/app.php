<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
  ->withRouting(
    web: __DIR__ . '/../routes/web.php',
    api: __DIR__ . '/../routes/api.php',
    commands: __DIR__ . '/../routes/console.php',
    health: '/up',


    using: function () {

      Route::middleware('api')
        ->group(base_path('routes/api.php'));

      Route::middleware('web')
        ->group(base_path('routes/master/product/web.php'));

      Route::middleware('web')
        ->group(base_path('routes/master/bank/web.php'));

      Route::middleware('web')
        ->group(base_path('routes/master/brand/web.php'));

      Route::middleware('web')
        ->group(base_path('routes/master/company/web.php'));

      Route::middleware('web')
        ->group(base_path('routes/master/category/web.php'));

      Route::middleware('web')
        ->group(base_path('routes/master/department/web.php'));

      Route::middleware('web')
        ->group(base_path('routes/master/image/web.php'));

      Route::middleware('web')
        ->group(base_path('routes/master/price/web.php'));

      Route::middleware('web')
        ->group(base_path('routes/master/region/web.php'));

      Route::middleware('web')
        ->group(base_path('routes/master/warehouse/web.php'));
    },
  )
  ->withMiddleware(function (Middleware $middleware) {
    //
  })
  ->withExceptions(function (Exceptions $exceptions) {
    //
  })->create();
