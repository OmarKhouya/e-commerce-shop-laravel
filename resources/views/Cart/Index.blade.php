@extends('layouts.master')
@section('title', 'Cart')

@section('content')
    <section class="py-5 text-dark" style="background-color: #FEFAF6">
        <div class="container">
            <h1 class="mb-3">Cart</h1>
            <div class="row">
                <div class="col-lg-5">
                    @auth
                        @foreach ($cartItems as $item)
                            <x-cart-items :item="$item" />
                        @endforeach
                    @endauth
                </div>
                <div>
                    
                </div>
            </div>
        </div>
    </section>
@endSection
