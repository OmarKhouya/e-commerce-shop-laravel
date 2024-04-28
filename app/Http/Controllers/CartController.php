<?php

namespace App\Http\Controllers;


use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;
            if ($usertype == 'user') {
                $user = Auth::user();
                $cartItems = $user->products()->withPivot('quantity')->get();
                return view('cart.index', compact('cartItems'));
            } else {
                return redirect()->route('home.index');
            }
        }
    }

    public function store(Request $request)
    {
        $product = Product::find($request->product_id);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $request->validate([
            'quantity' => 'required|integer|max:' . $product->Quantity,
        ]);

        $existingCartItem = Auth::user()->products()->where('product_id', $request->product_id)->first();

        if ($existingCartItem) {
            $existingCartItem->quantity = $request->quantity;
            $existingCartItem->save();
        } else {
            Auth::user()->Products()->attach($request->product_id, ['quantity' => $request->quantity]);
        }

        return redirect()->route('products.show', $request->product_id)->with('success', 'Product added to cart successfully.');
    }


    public function destroy(Request $request)
    {
        $user = Auth::user();
        $user->products()->detach($request->product_id);

        return redirect()->route('cart.index');
    }
}
