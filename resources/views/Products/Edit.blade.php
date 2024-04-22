@extends('layouts.admin-master')
@section('title', 'Admin Dashboard')
@section('content')
<section class="py-5 text-dark" style="background-color: #FEFAF6">
    <div class="container">
        <h1 class="text-center mb-3"> Edit Product {{$product->Name}}</h1>
            <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data" class="row g-3 w-75 m-auto " >
                @csrf
                @method('PUT')
                @include('Products.Form',['type' => 'Edit', 'product' => $product])
        </div>
    </section>
@endsection
