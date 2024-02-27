<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Console\Commands\SendBirthdayGreetings;
use App\Console\Commands\MakeRepository;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        SendBirthdayGreetings::class,
        Commands\MakeRepository::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('send:birthday-greetings')->everyMinute();
    }
}
