<?php

namespace App\Http\Controllers;

class InvestmentController extends Controller
{
    public function index()
    {
        session()->put('active_menu', 'investment');

        return view('investment.index');
    }

    public function show()
    {
        session()->put('active_menu', 'investment');

        return view('investment.show-room');
    }
}
