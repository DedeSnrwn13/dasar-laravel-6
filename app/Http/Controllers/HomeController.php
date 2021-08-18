<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriptionFormRequest;
use App\Mail\UserActivationMail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        // Mail::to('sunarwan@belajar.test')->send(new UserActivationMail());

        return new UserActivationMail();
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
