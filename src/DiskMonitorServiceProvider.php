<?php

namespace Idfx\DiskMonitor;

use Idfx\DiskMonitor\Commands\RecordDiskMetricsCommand;
use Idfx\DiskMonitor\Http\Controllers\DiskMetricsController;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

/*
 * TODO: vanaf 1h00m00s
 */

class DiskMonitorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('disk-monitor')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_disk_monitor_table')
//            ->hasRoute('web')
            ->hasCommand(RecordDiskMetricsCommand::class);
    }

    public function packageRegistered(): void
    {
        $this->registerRoutes();
    }

    protected function registerRoutes(): void
    {
        Route::macro('diskMonitor', function (string $prefix) {
            Route::prefix($prefix)->group(function () {
                Route::get('/', DiskMetricsController::class);
            });
        });
    }
}
