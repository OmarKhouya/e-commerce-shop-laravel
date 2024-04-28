@extends('layouts.master')
@section('title', 'Create Product')

@section('content')
    <section class="py-5 text-dark" style="background-color: #FEFAF6">
        <div class="container">
            <h1 class="text-center mb-3"> Add new Product</h1>
            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data"
                class="row g-3 w-75 m-auto">
                @csrf
                @include('Products.Form',['type' => 'Add'])
            </form>
            @isset($success)
                <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            Product Added successfully
                        </div>
                        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                </div>
            @endisset
            @isset($errors)
                <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            Product isn't Added yet
                        </div>
                        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                </div>
            @endisset
        </div>
    </section>
@endsection
