<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Illuminate\Support\Facades\Input;
use App\PushNotification;
use App\MobileDevice;
use App\Email;

class BackendController extends Controller
{
    public function getIndex()
    {
        $posts = Post::where('type', 'article')
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('backend.index', compact('posts'));
    }

    public function getCreate()
    {
        return view('backend.create');
    }

    public function postCreate()
    {
        $result = ['result' => false, 'message' => 'Generic Error'];

        $data = Input::get('data');
        $post = new Post;
        $post->title = $data['title'];
        $post->body = $data['body'];
        $post->type = 'article';
        $post->slug = Post::slug($data['title']);

        $link = url('/');
        $icon = url('/icon-192.png');

        if ($post->save()){
            $result = ['result' => true];
            $this->sendPushNotifications($data, $icon, $link);
            Email::sendToAll();
        }

        return $result;
    }


    public function getEdit($id)
    {
        $post = Post::find($id);
        return view('backend.edit', compact('post'));
    }

    public function postEdit($id)
    {
        $result = ['result' => false, 'message' => 'Generic Error'];

        $data = Input::get('data');
        $post = Post::find($id);
        $post->title = $data['title'];
        $post->body = $data['body'];
        $post->created_at = $data['created_at'];

        if ($post->save()){
            $result = ['result' => true];
        }

        return $result;
    }

    public function getDelete($id)
    {
        $post = Post::find($id);
        if ($post){
            $post->delete();
        }

        return redirect('/backend');
    }

    /**
     * @param $data
     * @param $icon
     * @param $link
     */
    private function sendPushNotifications($data, $icon, $link)
    {
        $devices = MobileDevice::all();
        foreach ($devices as $device) {
            PushNotification::send($device, config('owner.name'), $data['title'], $icon, $link);
        }
    }
}
