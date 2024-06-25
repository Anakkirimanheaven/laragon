<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
    public function detail()
    {
        return view('detail');
    }
    public function privacy()
    {
        return view('privacy');
    }
    public function cart()
    {
        return view('cart');
    }
    public function wishlist()
    {
        return view('wishlist');
    }
    public function produk()
    {
        return view('produk');
    }
    public function blog()
    {
        return view('blog');
    }
    public function user()
    {
        return view('user');
    }
    public function dblog()
    {
        return view('dblog');
    }
    public function faq()
    {
        return view('faq');
    }
    public function compaire()
    {
        return view('compaire');
    }
    public function vendor()
    {
        return view('vendor');
    }
    public function cempty()
    {
        return view('cempty');
    }
    public function wempty()
    {
        return view('wempty');
    }
    public function sideseller()
    {
        return view('sideseller');
    }
    public function seller()
    {
        return view('seller');
    }
    public function order()
    {
        return view('order');
    }
    public function terms()
    {
        return view('terms');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function flashsale()
    {
        return view('flashsale');
    }

    //method selanjutnya untuk bagian front
}
