<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriptionFormRequest;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(SubscriptionFormRequest $request)
    {
        return redirect()->route('other');
        // return back();
    }

    public function other()
    {
        return 'Other Route';
    }
}
