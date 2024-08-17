<?php

namespace App\Http\Controllers;

class ProductController extends Controller
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
    public function listProducts()
    {
        return view('user.products');
    }
}