<?php

namespace App\Console;

use App\Console\Commands\CleanOrphanedImages;
use App\Console\Commands\ProcessProductImages;
use App\Console\Commands\UpdateImagePaths;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        CleanOrphanedImages::class,
        ProcessProductImages::class,
        UpdateImagePaths::class,
    ];
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
