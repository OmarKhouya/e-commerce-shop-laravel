@extends('layouts.master')
@section('title', 'Cart')

@section('content')
    <section class="py-5 text-dark" style="background-color: #FEFAF6">
        <div class="container">
            <h1 class="mb-3">Cart</h1>
            @auth
                <div class="table-responsive">
                    <table class="table table-striped  table-hover">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $item)
                                <x-cart-items :item="$item" />
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="table-active">
                                <td colspan="3">Total</td>
                                @php
                                    $total = 0;
                                    foreach ($cartItems as $item) {
                                        $total += $item->Price * $item->pivot->quantity;
                                    }
                                @endphp
                                <td>${{ $total }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endauth
        </div>
    </section>
@endSection
