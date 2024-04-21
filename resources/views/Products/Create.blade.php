@extends('layouts.admin-master')
@section('title', 'Create Product')

@section('content')
    <section class="py-5 text-dark" style="background-color: #FEFAF6">
        <div class="container">
            <h1 class="text-center mb-3"> Add new Product</h1>
            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data"
                class="row g-3 w-75 m-auto">
                @csrf
                <div class="col-md-6">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control  @error('Name') is-invalid @enderror" name="Name">
                </div>
                <div class="col-md-6">
                    <label for="Description" class="form-label">Description</label>
                    <input type="text" class="form-control @error('Description') is-invalid @enderror"
                        name="Description">
                </div>
                <div class="col-md-4">
                    <label for="Brand" class="form-label">Brand</label>
                    <input type="text" class="form-control  @error('Brand') is-invalid @enderror" name="Brand">
                </div>
                <div class="col-md-2">
                    <label for="Quantity" class="form-label">Quantity</label>
                    <input type="text" class="form-control  @error('Quantity') is-invalid @enderror" name="Quantity" />
                </div>
                <div class="col-md-2">
                    <label for="Price" class="form-label">Price</label>
                    <input type="text" class="form-control @if ($errors->has('Price')) is-invalid @endif"
                        name="Price">
                </div>

                <div class="col-md-4">
                    <label for="Category" class="form-label">Category</label>
                    <input type="text" class="form-control  @error('Category') is-invalid @enderror" name="Category">
                </div>



                <div class="col-md-2 d-flex justify-content-center align-items-center">
                    <div class="">
                        <label for="Available" class="form-check-label">Available</label>
                        <input type="checkbox" class="form-check-input " name="Available"
                            {{ old('Available') ? 'checked' : '' }}>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="relatedProducts" class="form-label">Related Products</label>
                    <input type="text" class="form-control  @error('relatedProducts') is-invalid @enderror"
                        name="relatedProducts">
                </div>
                <div class="col-md-3">
                    <label for="Thumbnail" class="form-label">Thumbnail</label>
                    <input type="file" accept="image/*" class="form-control  @error('Thumbnail') is-invalid @enderror"
                        name="Thumbnail">
                </div>
                <div class="col-md-3">
                    <label for="Image1" class="form-label">Image 1</label>
                    <input type="file" accept="image/*" class="form-control" name="Image1">

                </div>
                <div class="col-md-3">
                    <label for="Image2" class="form-label">Image 2</label>
                    <input type="file" accept="image/*" class="form-control" name="Image2">
                </div>
                <div class="col-md-3">
                    <label for="Image3" class="form-label">Image 3</label>
                    <input type="file" accept="image/*" class="form-control" name="Image3">
                </div>
                <div class="col-md-4">
                    <label for="Review" class="form-label">Review</label>
                    <input type="text" class="form-control  @error('Review') is-invalid @enderror" name="Review">
                </div>
                <div class="col-md-2">
                    <label for="validationServer03" class="form-label">Rating</label>
                    <input type="text" class="form-control  @error('Rating') is-invalid @enderror" name="Rating">
                </div>


                <div class="col-12 ">
                    <button class="btn btn-dark float-end text-dark" type="submit" style="background-color: #FFECD6" >Add Product</button>
                </div>
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
