<?php

namespace App\Http\Controllers;

class PagesController extends Controller
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

    public function techRenting()
    {
        session()->put('active_menu', 'renting');

        return view('pages.tech-renting');
    }
}
