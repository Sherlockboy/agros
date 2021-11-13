<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function home()
    {
        session()->put('active_menu', 'home');

        return view('pages.home');
    }

    public function fms()
    {
        session()->put('active_menu', 'fms');

        return view('pages.fms');
    }
}
