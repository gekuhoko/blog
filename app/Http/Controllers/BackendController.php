<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Illuminate\Support\Facades\Input;

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
}
