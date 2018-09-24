<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::simplePaginate(3);

        return view('index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }
}
