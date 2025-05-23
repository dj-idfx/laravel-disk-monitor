<?php

namespace Idfx\DiskMonitor\Commands;

use Idfx\DiskMonitor\Models\DiskMonitorEntry;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class RecordDiskMetricsCommand extends Command
{
    public $signature = 'disk-monitor:record-metrics';

    public $description = 'Record the metrics of a disk';

    public function handle()
    {
        collect(config('disk-monitor.disk_names'))
            ->each(fn (string $diskName) => $this->recordMetrics($diskName));

        $this->comment('All done!');
    }

    protected function recordMetrics(string $diskName): void
    {
        $this->info("Recording metrics for disk `{$diskName}`...");

        $disk = Storage::disk($diskName);

        $fileCount = count($disk->allFiles());

        DiskMonitorEntry::create([
            'disk_name' => $diskName,
            'file_count' => $fileCount,
        ]);
    }
}
