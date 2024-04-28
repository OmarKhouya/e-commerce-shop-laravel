@props(['product'])
<div class="col-md-6">
    <a href="{{ route('products.show', $product->id) }}" class="text-decoration-none">
        <div class="card mb-3 border-0" style="max-width: 540px;background-color: #FEFAF6">
            <div class="row g-0">
                <div class="col-md-5">
                    {{-- <img src="{{ asset('images/uploads/' . $product->Thumbnail) }}" class="img-fluid rounded-start" alt="..."> --}}
                    <img src="{{$product->Thumbnail}}" class="img-fluid m-lg-3 rounded-md-bottom-0 rounded" alt="...">
                </div>
                <div class="col-md-6 ms-3">
                    <div class="card-body float-end">
                        <h5 class="card-title">{{ $product->Name }}</h5>
                        <p class="card-text"> {{ \Illuminate\Support\Str::limit($product->Description, $limit = 50, $end = '...') }}</p>
                        <p>${{ $product->Price }}</p>
                        <p>
                            <x-rating-stars :rating="$product->Rating" />
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
