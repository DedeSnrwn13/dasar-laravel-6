<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::active()->ageGreaterThan(17)->get();

        dd($user);
    }

    public function show(User $user)
    {
        dd($user);
    }
}
