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
            ->orderBy('scheduled_at', 'DESC')
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
        $post->scheduled_at = $this->getNextSchedulingDay();

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
        $post->slug = Post::slug($data['title']);
        $post->body = $data['body'];
        $post->scheduled_at = $data['scheduled_at'];

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
        $post->notifyFollowers();

        return ['result' => true];
    }

    private function getNextSchedulingDay()
    {
        $latestScheduledAt = new Carbon(
            Post::where('title', '!=', '')
                ->orderBy('scheduled_at', 'desc')
                ->first()
                ->scheduled_at
        );
        $now = Carbon::now();
        $nextSchedulingDay = Post::nextSchedulingDayAfterThisTime($latestScheduledAt);
        if ($nextSchedulingDay->lessThan($now)) {
            $nextSchedulingDay = Post::nextSchedulingDayAfterThisTime($now);
        }

        return $nextSchedulingDay->format('Y-m-d H:i:s');
    }
}
