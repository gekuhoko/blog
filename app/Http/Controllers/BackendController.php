<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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

        if ($post->save()){
            $result = ['result' => true];
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

    public function postDelete($id)
    {
        $post = Post::find($id);
        if ($post){
            $post->delete();
        }

        return redirect('/backend');
    }

    public function postNotify($postId)
    {
        $post = Post::find($postId);
        $post->notified_at = Carbon::now();
        $post->save();

        $link = url('/');
        $icon = url('/icon-192.png');
        $devices = MobileDevice::all();
        foreach ($devices as $device) {
            PushNotification::send($device, config('owner.name'), $post->title, $icon, $link);
        }

        Email::sendToAll($postId);

        return ['result' => true];
    }
}
