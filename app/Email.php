<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Email extends Model
{
    public static function sendToAll()
    {
        $emails = Email::all();

        $post = Post::latestItem();

        $content = 'Hi,
        I have written a new blog post:

        <a href="https://gerhard-kuschnik.com">'.$post->title.'</a>

        Let me know your thoughts!

        Best,
        Gerhard Kuschnik';

        foreach($emails as $email){
            Mail::send('emails.plain', ['content' => $content], function ($m) use ($email, $post) {
                $m->from('kuschnik.gerhard@gmail.com', 'Gerhard Kuschnik');
                $m->to($email->address, $email->address)->subject($post->title);
            });
        }
    }
}
