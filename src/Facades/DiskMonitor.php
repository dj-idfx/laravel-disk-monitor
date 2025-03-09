<?php

namespace Idfx\DiskMonitor\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Idfx\DiskMonitor\DiskMonitor
 */
class DiskMonitor extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Idfx\DiskMonitor\DiskMonitor::class;
    }
}
