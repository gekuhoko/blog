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
        return view('index', compact('posts'));
    }

    public function getAuthor()
    {
        return view('author');
    }

    public function fallback($value)
    {
        $selectedPost = Post::where('slug', $value)->first();
        if ($selectedPost){
            $posts = Post::where('type', 'article')
                ->orderBy('created_at', 'DESC')
                ->where('id', '!=', $selectedPost->id)
                ->get();

            return view('index', compact('posts', 'selectedPost'));
        }

        return redirect('/');
    }
}