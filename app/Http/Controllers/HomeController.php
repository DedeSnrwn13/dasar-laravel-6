<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $users = User::paginate($request->get('per-page', 1));

        return view('user.index', [
            'users' => $users
        ]);
    }

    public function show(User $user)
    {
        dd($user);
    }
}
