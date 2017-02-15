<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\PushNotification;
use App\Email;
use Illuminate\Support\Facades\Input;

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
        $email = Input::get('data')['email'];
        $emailEntry = new Email;
        $emailEntry->address = $email;
        if ($emailEntry->save()){
            \Session::set('email', $email);
            return ['result' => true];
        }
    }


}