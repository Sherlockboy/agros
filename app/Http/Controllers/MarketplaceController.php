<?php

namespace App\Http\Controllers;

class MarketplaceController extends Controller
{
    public function primary()
    {
        session()->put('active_menu', 'marketplace');

        return view('marketplace.primary');
    }

    public function secondary()
    {
        session()->put('active_menu', 'marketplace');

        return view('marketplace.secondary');
    }

    public function product()
    {
        session()->put('active_menu', 'marketplace');

        return view('marketplace.product');
    }
}
