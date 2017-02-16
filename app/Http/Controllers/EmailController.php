<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\PushNotification;
use App\Email;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

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


}