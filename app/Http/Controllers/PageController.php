<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Post;

class PageController extends Controller
{
    public function getIndex()
    {
        $posts = Post::where('type', 'article')
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('blog', compact('posts'));
    }

    public function getProfile()
    {
        return view('profile');
    }

    public function article($slug)
    {
        $post = Post::where('slug', $slug)->first();
        if ($post){
            return view('article', compact('post'));
        }

        return redirect('/');
    }
}