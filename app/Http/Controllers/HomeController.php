<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($username)
    {
        return view('user.index', [
            'username' => $username,
            'fullName' => 'Dede Sunarwan'
        ]);
    }

    public function store(Request $request)
    {

    }
}
