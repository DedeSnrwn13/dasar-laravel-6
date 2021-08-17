<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('todo');
    }

    public function store(Request $request)
    {
        return dd($request->todo);
    }
}
