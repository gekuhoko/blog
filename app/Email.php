<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Email extends Model
{
    public static function sendToAll($postId)
    {
        $emails = Email::all();
        $post = Post::find($postId);

        $content = 'Hi,

        There is a new blog post:

        <a href="https://gerhard-kuschnik.com/'.$post->slug.'">'.$post->title.'</a>

        Enjoy the read. Feel free to email back and let me know your thoughts!

        Best,

        Gerhard Kuschnik
        w <a href="https://gerhard-kuschnik.com">gerhard-kuschnik.com</a>
        m <a href="tel:+85269079611">+852 6907-9611</a>
        ';

        foreach($emails as $email){
            Mail::send('emails.plain', ['content' => $content], function ($m) use ($email, $post) {
                $m->from('kuschnik.gerhard@gmail.com', 'Gerhard Kuschnik');
                $m->to($email->address, $email->address)->subject($post->title);
            });
        }
    }
}
