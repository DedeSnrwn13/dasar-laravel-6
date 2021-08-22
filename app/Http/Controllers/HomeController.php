<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $user = User::where('username', 'dede')->first();

        return $user->getFirstNameOrUsername();
    }
}
