<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::paginate(6);
        return view('Admin.Home-admin',compact('products'));
    }
}
