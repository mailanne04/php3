<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function shop()
    {
        return view('client.shop');
    }

    public function product()
    {
        return view('client.product_detail');
    }

    public function contact()
    {
        return view('client.contact');
    }

    public function about()
    {
        return view('client.about');
    }

    public function cart()
    {
        return view('client.cart');
    }

    public function checkout()
    {
        return view('client.checkout');
    }

    public function dashboard()
    {
        return view('client.dashboard');
    }

    public function login()
    {
        return view('client.login');
    }
    public function profile()
    {
        return view('client.profile');
    }
    public function setting()
    {
        return view('client.setting');
    }
    public function order()
    {
        return view('client.order');
    }
}
