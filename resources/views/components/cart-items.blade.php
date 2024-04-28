@props(['item'])
{{-- <div class="px-3 border rounded border-dark my-2">
    <div class="card border-0" style="max-width: 540px;background-color: #FEFAF6">
        <div class="row row-cols-md-2 row-cols-1  g-0">
            <div class="col">
                <div class="card-body mt-3">
                    <h5 class="card-title">{{ $item->Name }}</h5>
                    <p>${{ $item->Price }}</p>
                    <p>
                        <small class="text-muted">Quantity: {{ $item->pivot->quantity }}</small>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div> --}}
<tr>
    <td>
        <a href="{{ route('products.show', $item->id) }}" class="text-dark"> {{ $item->Name }}</a>

    </td>
    <td>
        ${{ $item->Price }}
    </td>
    <td>
        {{ $item->pivot->quantity }}
    </td>
    <td>
        ${{ $item->pivot->quantity * $item->Price }}
        <form action="{{ route('cart.destroy', $item->id) }}" method="post" class="float-end mb-3">
            @csrf
            @method('DELETE')
            <button class="nav-link" type="submit"><i class="fa-solid fa-trash"></i></button>
        </form>
    </td>
</tr>
