<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriptionFormRequest;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'posts' => [
               ['id' => 1, 'title' => 'Ini 1'],
               ['id' => 2, 'title' => 'Ini 2'],
               ['id' => 3, 'title' => 'Ini 3']
            ]
        ];

        return response()->json($data);
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
