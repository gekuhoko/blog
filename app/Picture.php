<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\SoftDeletes;

class Picture extends Model
{
    use SoftDeletes;
}
