<?php

namespace App\Http\Controllers;

class CartDetailController extends Controller
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
    public function cartDetail()
    {
        return view('user.cartDetail');
    }
}