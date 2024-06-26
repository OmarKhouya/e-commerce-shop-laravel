<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;
            if ($usertype == 'user') {
                return redirect()->route('home.index');
            }
        }
        $products = Product::paginate(36);
        return view('Admin.Home-admin', compact('products'));
    }
}
