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
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="disk-monitor-views"
```

## Usage

```php
$diskMonitor = new Idfx\DiskMonitor();
echo $diskMonitor->echoPhrase('Hello, Idfx!');
```

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
