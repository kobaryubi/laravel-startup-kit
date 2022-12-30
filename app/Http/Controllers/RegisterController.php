<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('register.index');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        //
    }
}
