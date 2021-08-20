<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $post = Post::find($request->id);



        return view('post.show', [
            'post' => $post
        ]);
    }
}
