<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MobileDevice;
use App\Components\CustomBuilder;

class PushNotification extends Model
{
    /**
     * todo: log the messages with result
     *
     * send a web push notification to every device of a user
     *
     * @param $userId
     */

    public static function send ($device, $title, $body, $icon, $link)
    {
        // persist push notification
        $pushNotification = new PushNotification;
        $pushNotification->user = 1;
        $pushNotification->title = $title;
        $pushNotification->body = $body;
        $pushNotification->icon = $icon;
        $pushNotification->link = $link;
        $pushNotification->save();

        $data = json_encode([
            "registration_ids" => [$device->token],
        ]);

        $ch = curl_init('https://android.googleapis.com/gcm/send');
        $headers = [
            'Authorization: key='.env('GOOGLE_CLOUD_MESSAGING_KEY'),
            'Content-Type: application/json',
        ];

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

        $result[] = curl_exec($ch);
        curl_close($ch);

        var_dump($result);

        return $result;
    }

    public function receiver(){
        return User::find($this->user);
    }

    public function devices(){
        return MobileDevice::where('user', $this->receiver()->id)->get();
    }

}
