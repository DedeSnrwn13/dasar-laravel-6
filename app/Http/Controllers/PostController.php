<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::take(10)->get();

        return view('post.index', [
            'posts' => $posts
        ]);
    }
}
