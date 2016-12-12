<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function formattedCreatedAt()
    {
        $time = new Carbon($this->created_at);
        return $time->toFormattedDateString();
    }
}
