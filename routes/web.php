<?php

use Idfx\DiskMonitor\Http\Controllers\DiskMetricsController;
use Illuminate\Support\Facades\Route;

Route::macro('diskMonitor', function (string $prefix) {
    Route::prefix($prefix)->group(function () {
        Route::get('/', DiskMetricsController::class);
    });
});
