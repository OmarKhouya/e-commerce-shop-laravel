@extends('layouts.master')
@section('title', 'Products')

@section('content')
    <div class="container">
        <h1 class="pt-3">Products</h1>
        <div class="row">
            <div class="col-md-3 col-12" style="">
                <form action="{{ route('products.index') }}" method="GET">
                    <div class="form-group">
                        <label for="search">Search</label>
                        <input type="text" name="search" id="search" class="form-control"
                            value="{{ request('search') }}">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" name="category" id="category" class="form-control"
                            value="{{ request('category') }}">
                    </div>
                    <div class="form-group">
                        <label for="brand">Brand</label>
                        <input type="text" name="brand" id="brand" class="form-control"
                            value="{{ request('brand') }}">
                    </div>
                    <div class="form-group">
                        <label for="min_price">Min Price</label>
                        <input type="number" name="min_price" id="min_price" class="form-control"
                            value="{{ request('min_price') }}">
                    </div>
                    <div class="form-group">
                        <label for="max_price">Max Price</label>
                        <input type="number" name="max_price" id="max_price" class="form-control"
                            value="{{ request('max_price') }}">
                    </div>
                    <div class="form-group my-2">
                        <input type="submit" class="btn btn-primary" value="Filter">
                        <a type="reset" class="btn btn-secondary" href="{{ route('products.index') }}">Reset</a>
                    </div>
                </form>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-12 products-list" style="max-height: 100vh; overflow-y: scroll; overflow-x: hidden;">
                <div class="row d-flex justify-content-center">
                    @foreach ($products as $product)
                        <div class="m-auto col-lg-4 col-md-6 col-sm-12 my-2" style="width: 15rem;">
                            <div class="card">
                                {{-- <img src="images/uploads/{{ $product->Thumbnail }}" class="card-img-top" alt="..."> --}}
                                <img src="{{ $product->Thumbnail }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{ $product->Name }}</h5>
                                    <p class="card-text text-center">
                                        {{ \Illuminate\Support\Str::limit($product->Description, $limit = 50, $end = '...') }}
                                    </p>
                                    <hr class="w-100 mb-2 m-auto">
                                    <h5 class="card-text text-center my-3">{{ $product->Price }}$</h5>
                                    <div class="text-center">
                                        <x-rating-stars :rating="$product->Rating" />
                                    </div>
                                </div>
                                <a href="{{ route('products.show', $product->id) }}"
                                    class="btn btn-dark w-100 rounded-top-0" style="background-color: #102C57">View</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{ $products->onEachSide(0)->links() }}
    </div>
@endsection
