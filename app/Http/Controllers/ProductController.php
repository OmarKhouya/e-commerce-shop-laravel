<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Product::query();

        // Filtering
        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }
        if ($request->has('brand') && $request->brand != '') {
            $query->where('brand', $request->brand);
        }
        if ($request->has('min_price') && $request->min_price != '') {
            $query->where('price', '>=', $request->min_price);
        }
        if ($request->has('max_price') && $request->max_price != '') {
            $query->where('price', '<=', $request->max_price);
        }

        // Searching
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%');
        }

        $products = $query->paginate(38);
        return view('Products.Index', compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;
            if ($usertype == 'user') {
                return redirect()->route('home.index');
            }
        }
        return view("Products.Create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;
            if ($usertype == 'user') {
                return redirect()->route('home.index');
            }
        }
        $validator = Validator::make($request->all(), [
            'Name' => ['required', 'string', 'max:100'],
            'Description' => ['required', 'string'],
            'Price' => ['required', 'numeric'],
            'Quantity' => ['required', 'numeric'],
            'Category' => ['required', 'string'],
            'Thumbnail' => ['required', 'image'],
            'Image1' => ['required', 'image'],
            'Image2' => ['required', 'image'],
            'Image3' => ['required', 'image'],
            'Rating' => ['required', 'numeric', 'min:1', 'max:5'],
            'Review' => ['required', 'string'],
            'Brand' => ['required', 'string']
        ]);

        if ($validator->fails()) {
            return redirect("/products/create")
                ->withErrors($validator)
                ->withInput();
        }

        $product = new Product();

        $ThumbnailName = '';
        if ($image = $request->file('Thumbnail')) {
            $ThumbnailName = time() . '-' . $image->getClientOriginalName();
            $image->move('images/uploads', $ThumbnailName);
        }
        $Image1Name = '';
        if ($image = $request->file('Image1')) {
            $Image1Name = time() . '-' . $image->getClientOriginalName();
            $image->move('images/uploads', $Image1Name);
        }
        $Image2Name = '';
        if ($image = $request->file('Image2')) {
            $Image2Name = time() . '-' . $image->getClientOriginalName();
            $image->move('images/uploads', $Image2Name);
        }
        $Image3Name = '';
        if ($image = $request->file('Image3')) {
            $Image3Name = time() . '-' . $image->getClientOriginalName();
            $image->move('images/uploads', $Image3Name);
        }

        $product->name = $request->input('Name');
        $product->description = $request->input('Description');
        $product->price = $request->input('Price');
        $product->quantity = $request->input('Quantity');
        $product->category = $request->input('Category');
        $product->thumbnail = $ThumbnailName;
        $product->image1 = $Image1Name;
        $product->image2 = $Image2Name;
        $product->image3 = $Image3Name;
        $product->rating = $request->input('Rating');
        $product->review = $request->input('Review');
        $product->brand = $request->input('Brand');
        $product->save();

        return redirect("/products/create")->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product = Product::find($product->id);
        return view("Products.Show", compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;
            if ($usertype == 'user') {
                return redirect()->route('home.index');
            }
        }
        return view("Products.Edit", compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;
            if ($usertype == 'user') {
                return redirect()->route('home.index');
            }
        }

        $product->fill($request->all());

        if ($product->isDirty()) {
            $product->save();
        }

        return redirect("/admin");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect("/admin");
    }
}
