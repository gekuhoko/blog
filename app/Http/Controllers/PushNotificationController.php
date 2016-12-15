<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PushNotification;
use App\MobileDevice;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

// For APIs:
// in controller:   define the process flow
// in model:        define the general things the api can do

class PushNotificationController extends Controller
{
    protected $pushNotification;

    public function __construct()
    {
        $this->pushNotification = New PushNotification;
        $this->middleware('localization');
    }

    public function postRegister()
    {
        $token = str_replace('https://android.googleapis.com/gcm/send/','', Input::get('device'));

        // check if device exists
        $device = MobileDevice::where('token', $token)->first();
        if (!$device){
            $device = new MobileDevice;
        }
        $device->token = $token;
        $device->save();

        return ['result' => true];
    }

    public function getContent($type)
    {
        // type is news
        $pushNotification = PushNotification::where('type', $type)->orderBy('created_at', 'DESC')->first();

        if ($pushNotification){
            $result = [
                'title' => $pushNotification->title,
                'body' => $pushNotification->body,
                'icon' => $pushNotification->icon,
            ];

            return $result;
        }
    }

    public function getLink($type)
    {
        $pushNotification = PushNotification::where('user', $type)->orderBy('created_at', 'DESC')->first();

        return redirect($pushNotification->link);
    }

    public function getWorkerScript()
    {
        $workerCode = '
            self.addEventListener(\'push\', function(event) {
                event.waitUntil(
                    fetch(\'/api/push-notification/content/news\').then(function(response){
                        return response.json();
                    }).then(function(data) {
                        return self.registration.showNotification(
                            data.title, {
                                body: data.body,
                                icon: data.icon
                            }
                        );
                    })
                );
            });

            self.addEventListener(\'notificationclick\', function(event) {
                event.notification.close();
                event.waitUntil(

                    clients.matchAll({
                        type: \'window\'
                    }).then(function(windowClients) {

                        var url = \''. url('/api/push-notification/link/news'). '\';

                        for (var i = 0; i < windowClients.length; i++) {
                            var client = windowClients[i];
                            if (client.url === url && \'focus\' in client) {
                                return client.focus();
                            }
                        }
                        if (clients.openWindow) {
                            return clients.openWindow(url);
                        }
                    })
                );
            });
        ';

        return response ($workerCode, 200)->header('Content-Type', 'application/javascript');

    }

}