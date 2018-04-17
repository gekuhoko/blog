<?php

namespace App\Console\Commands;

use App\Post;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;

class NotifyFollowersOnPublish extends Command
{
    protected $signature = 'notify';
    protected $description = 'Notify Followers On Publish';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $windowStart = Carbon::now()->subHours(23);
        $windowEnd = Carbon::now();

        $duePost = Post::where('scheduled_at', '>', $windowStart)
            ->where('scheduled_at', '<', $windowEnd)
            ->first();

        $duePost->notifyFollowers();
    }
}
