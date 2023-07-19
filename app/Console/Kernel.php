<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        \App\Console\Commands\FetchCovidData::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        // Run the FetchCovidData command every hour
        $schedule->command('coviddata:fetch')->hourly();
    }

    // ...
}
