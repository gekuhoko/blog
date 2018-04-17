<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Picture;

class Post extends Model
{
    public static $DAY_OF_PUBLISHING = 3; // 0 is Monday
    public static $HOUR_OF_PUBLISHING = 15;
    public static $MINUTE_OF_PUBLISHING = 0;

    public function isScheduled()
    {
        $now = Carbon::now();
        $scheduledAt = new Carbon($this->scheduled_at);

        if ($scheduledAt->greaterThan($now)) {
            return true;
        }

        return false;
    }

    public function formattedScheduledAt()
    {
        $time = new Carbon($this->scheduled_at);
        return $time->toFormattedDateString();
    }

    public static function nextSchedulingDayAfterThisTime($carbon)
    {
        return $carbon->endOfWeek()->addSecond()
        ->addDays(Post::$DAY_OF_PUBLISHING)
        ->addHours(Post::$HOUR_OF_PUBLISHING)
        ->addMinutes(Post::$MINUTE_OF_PUBLISHING);
    }

    public static function latestItem()
    {
        return Post::where('title', '!=', '')->orderBy('created_at', 'desc')->first();
    }

    public static function slug($title)
    {
        $slug = $title;
        $slug = str_replace(' ', '-', strtolower($slug));
        $slug = str_replace(['%',',','?', '.', '\'', '!'], '', strtolower($slug));

        return $slug;
    }

    public function shortBody()
    {
        $body = $this->body;
        $body = nl2br($body);
        $body = strip_tags($body);
        $body = str_limit($body, 200);

        return $body;
    }

    public static function nextId()
    {
        $newestId = self::latestItem()->id;
        $nextId = $newestId + 1;

        return $nextId;
    }

    public function masterPictureUrl()
    {
        $result = null;
        $picture = Picture::where('fk_post', $this->id)->where('master', true)->first();
        if ($picture){
            $result = url('/'.$picture->url);
        }

        return $result;
    }

    public function pictures($master = null)
    {
        $query = Picture::where('fk_post', $this->id);
        if (null != $master){
            $query = $query->where('master', $master);
        }
    }

    public function notifyFollowers()
    {
        $this->notified_at = Carbon::now();
        $this->save();

        $link = url('/');
        $icon = url('/icon-192.png');
        $devices = MobileDevice::all();
        foreach ($devices as $device) {
            PushNotification::send($device, config('owner.name'), $this->title, $icon, $link);
        }

        Email::sendToAll($this->id);
    }
}
