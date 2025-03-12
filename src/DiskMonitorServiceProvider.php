<?php

namespace Idfx\DiskMonitor;

use Idfx\DiskMonitor\Commands\RecordDiskMetricsCommand;
use Idfx\DiskMonitor\Http\Controllers\DiskMetricsController;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DiskMonitorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-disk-monitor')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_disk_monitor_table')
            ->hasCommand(RecordDiskMetricsCommand::class);
    }

    public function packageRegistered(): void
    {
        Route::macro('diskMonitor', function (string $prefix) {
            Route::prefix($prefix)->group(function () {
                Route::get('/', '\\'.DiskMetricsController::class);
            });
        });
    }
}
