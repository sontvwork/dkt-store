<?php

namespace App\Http\Controllers;

class ProductDetailController extends Controller
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
    public function productDetail()
    {
        return view('user.productDetail');
    }
}