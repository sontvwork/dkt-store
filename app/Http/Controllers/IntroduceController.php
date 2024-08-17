<?php

namespace App\Http\Controllers;

class IntroduceController extends Controller
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
    public function introduce()
    {
        return view('introduce');
    }
}