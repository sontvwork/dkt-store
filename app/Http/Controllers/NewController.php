<?php

namespace App\Http\Controllers;

class NewController extends Controller
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
    public function listNews()
    {
        return view('user.news');
    }
}