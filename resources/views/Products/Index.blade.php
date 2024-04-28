@extends('layouts.master')
@section('title', 'Products')

@section('content')
    <section class="" style="background-color: #FEFAF6">
        <div class="container py-3">
            <h1 class="my-3">Our Products</h1>
            <div class="row d-flex justify-content-center">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 col-sm-12 my-2">
                        <div class="card m-auto" style="width: 18rem;">
                            {{-- <img src="images/uploads/{{ $product->Thumbnail   }}" class="card-img-top" alt="..."> --}}
                            <img src="{{ $product->Thumbnail   }}" class="card-img-top" alt="...">
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
                                class="btn btn-dark w-100  rounded-top-0" style="background-color: #102C57">View</a>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $products->onEachSide(0)->links() }}
        </div>
    </section>
@endsection
