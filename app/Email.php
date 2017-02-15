<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    public static function sendToAll()
    {
        $email = Email::all();

        foreach($email as $email){
            // todo: send email

        }
    }
}
