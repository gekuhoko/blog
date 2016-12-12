<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;

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
        // todo

        return ['result' => true];
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
