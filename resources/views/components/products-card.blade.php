@props(['product'])
<div class="col-md-6">
    <div class="card mb-3 border-0" style="max-width: 540px;background-color: #FEFAF6">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('images/uploads' . $product->Thumbnail) }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->Name}}</h5>
                    <p class="card-text">{{ $product->Description }}</p>
                    <p>${{$product->Price}}</p>
                </div>
            </div>
        </div>
    </div>

</div>
