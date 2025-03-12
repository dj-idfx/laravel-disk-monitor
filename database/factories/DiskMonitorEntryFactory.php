<?php

namespace Idfx\DiskMonitor\Database\Factories;

use Idfx\DiskMonitor\Models\DiskMonitorEntry;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiskMonitorEntryFactory extends Factory
{
    protected $model = DiskMonitorEntry::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'disk_name' => fake()->word,
            'file_count' => rand(0, 99),
        ];
    }
}
