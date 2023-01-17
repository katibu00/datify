<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function userHome()
    {
        return view('pages.home');
    }
    public function account()
    {
        return view('pages.account');
    }
    public function buyIndex()
    {
        return view('pages.buy_data');
    }
}
