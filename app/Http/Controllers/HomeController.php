<?php

namespace App\Http\Controllers;

use App\TravelPackage;
use App\Transaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $travel_packages = TravelPackage::with(['galleries'])->get();
        return view('pages.home', [
            'travel_packages' => $travel_packages
        ]);
    }
}
