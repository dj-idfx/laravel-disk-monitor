# Laravel Disk Monitor

[![Latest Version on Packagist](https://img.shields.io/packagist/v/idfx/laravel-disk-monitor.svg?style=flat-square)](https://packagist.org/packages/idfx/laravel-disk-monitor)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/dj-idfx/laravel-disk-monitor/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/dj-idfx/laravel-disk-monitor/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/dj-idfx/laravel-disk-monitor/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/dj-idfx/laravel-disk-monitor/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/idfx/laravel-disk-monitor.svg?style=flat-square)](https://packagist.org/packages/idfx/laravel-disk-monitor)

Monitors the metrics of disks used by Laravel - Spatie package training.

## Installation

You can install the package via composer:

```bash
composer require idfx/laravel-disk-monitor
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="disk-monitor-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="disk-monitor-config"
```

This is the contents of the published config file:

```php
return [
    /**
     * Name of the disk you want to monitor.
     */
    'disk_names' => [
        'local',
    ],
];
```

Finally, you should schedule the Spatie\DiskMonitor\Commands\RecordsDiskMetricsCommand to run daily.

```php
// in app/Console/Kernel.php

use \Spatie\DiskMonitor\Commands\RecordsDiskMetricsCommand;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule)
    {
       // ...
        $schedule->command(RecordsDiskMetricsCommand::class)->daily();
    }
}
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="disk-monitor-views"
```

## Usage

You can view the amount of files each monitored disk has, in the disk_monitor_entries table.

If you want to view the statistics in the browser add this macro to your routes file.

```php
// in a routes files

Route::diskMonitor('my-disk-monitor-url');
```

Now, you can see all statics when browsing /my-disk-monitor-url. Of course, you can use any url you want when using the diskMonitor route macro. We highly recommand using the auth middleware for this route, so guests can't see any data regarding your disks.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](.github/SECURITY.md) on how to report security vulnerabilities.

## Credits

- [David Carton](https://github.com/dj-idfx)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
