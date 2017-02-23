<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Picture;

class Post extends Model
{
    public function formattedCreatedAt()
    {
        $time = new Carbon($this->created_at);
        return $time->toFormattedDateString();
    }

    public static function latestItem()
    {
        return Post::where('title', '!=', '')->orderBy('created_at', 'desc')->first();
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

    public function pictures($master = false)
    {
        return Picture::where('fk_post', $this->id)->where('master', $master)->get();
    }
}
