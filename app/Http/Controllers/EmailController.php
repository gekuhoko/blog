<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\PushNotification;
use App\Email;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

// For APIs:
// in controller:   define the process flow
// in model:        define the general things the api can do

class EmailController extends Controller
{
    protected $pushNotification;

    public function __construct()
    {
        $this->pushNotification = New PushNotification;
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::get('data'), [
            'address' => 'required|email|unique:emails',
        ]);

        if ($validator->fails()){
            return [
                'result' => false,
                'message' => 'Please enter a valid email address.'
            ];
        }

        $email = Input::get('data')['address'];
        $emailEntry = new Email;
        $emailEntry->address = $email;
        $emailEntry->delete_token = str_random(16);
        if ($emailEntry->save()){
            \Session::set('email', $email);
            return ['result' => true];
        }
    }

    public function postContact()
    {
        $validator = Validator::make(Input::get('data'), [
            'email' => 'required|email',
            'message' => 'required',
        ]);

        if ($validator->fails()){
            return [
                'result' => false,
                'message' => 'Please enter a valid email address.'
            ];
        }

        $email = Input::get('data')['email'];
        $message = Input::get('data')['message'];
        $content = 'A message has been submitted on the blog. <BR><BR> Email: '.$email.'<BR><BR>'.$message;

        Mail::send('emails.plain', ['content' => $content], function ($m) {
            $m->from(config('owner.email'), 'Blog Contact Form');
            $m->to(config('owner.email'), 'Blog Contact Form')->subject('Blog Contact Form');
        });

        return ['result' => true];
    }
}