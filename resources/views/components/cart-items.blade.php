@props(['item'])
<div class="px-3 border rounded border-dark my-2">
    {{-- <a href="{{ route('products.show', $item->id) }}" class="text-decoration-none"> --}}
    <div class="card border-0" style="max-width: 540px;background-color: #FEFAF6">
        <div class="row row-cols-md-2 row-cols-1  g-0">
            <div class="col">
                {{-- <img src="{{ asset('images/uploads/' . $item->Thumbnail) }}" class="img-fluid rounded-start"
                            alt="..."> --}}
                <img src="{{ $item->Thumbnail }}" class="img-fluid rounded my-3" alt="...">
            </div>
            <div class="col">
                <div class="card-body mt-3">
                    <h5 class="card-title">{{ $item->Name }}</h5>
                    <p>${{ $item->Price }}</p>
                    <p>
                        <small class="text-muted">Quantity: {{ $item->pivot->quantity }}</small>
                    </p>
                    <form action="{{ route('cart.destroy', $item->id) }}" method="post" class="float-end mb-3">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit"><i
                                class="fa-solid fa-trash"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- </a>    --}}
</div>
