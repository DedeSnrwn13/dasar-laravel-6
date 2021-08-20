<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        // $post = Post::where('is_published', false)->get();
        // $post = Post::orderBy('id', 'desc')->get();
        $post = Post::latest()->limit(2)->get();

        dd($post);
    }
}
