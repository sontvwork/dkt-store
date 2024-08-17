<?php

namespace App\Http\Controllers\Auth;

class RegisterController extends \App\Http\Controllers\Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function register()
    {
        return view('auth.register');
    }
}