<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id()){
            $usertype = Auth::user()->usertype;
            if($usertype == 'admin'){
                return redirect()->route('admin.index');
            }
        }
        $latestLisings = Product::latest()->take(4)->get();
        $bestSellings = Product::where('Rating', '>=', 3)->take(4)->get();
        // return $latestLisings;
        return view('home', compact('latestLisings','bestSellings'));
    }
}
