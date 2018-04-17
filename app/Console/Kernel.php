<?php

namespace App\Console;

use App\Post;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        Commands\NotifyFollowersOnPublish::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        $hourOfPublishing = Post::$HOUR_OF_PUBLISHING;
        $minuteOfPublishing = Post::$MINUTE_OF_PUBLISHING + 1;
        if(60 == $minuteOfPublishing){
            $minuteOfPublishing = '00';
            $hourOfPublishing ++;
        }
        $timeOfPublishing = $hourOfPublishing . ':' . $minuteOfPublishing;

        $schedule->command('notify')->dailyAt($timeOfPublishing);
    }
}
