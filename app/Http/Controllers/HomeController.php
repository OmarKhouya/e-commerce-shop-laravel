<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestLisings = Product::latest()->take(4)->get();
        $bestSellings = Product::where('Rating', '>=', 3)->take(4)->get();
        // return $latestLisings;
        return view('home', compact('latestLisings','bestSellings'));
    }
}
