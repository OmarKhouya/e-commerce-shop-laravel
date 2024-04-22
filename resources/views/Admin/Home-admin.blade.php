@extends('layouts.admin-master')
@section('title', 'Admin Dashboard')
@section('content')
    <section class="py-3 text-dark" style="background-color: #FEFAF6"> >
        <div class="container">
            <h1 class="mb-2">Products Dashboard</h1>
            <div class=" table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Thumbnail</th>
                        <th>Rating</th>
                        <th>Brand</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->Name }}</td>
                                <td>{{ $product->Description }}</td>
                                <td>{{ $product->Price }}</td>
                                <td>{{ $product->Quantity }}</td>
                                <td>{{ $product->Category }}</td>
                                <td><img src="{{ asset('images/uploads/' . $product->Thumbnail) }}" alt=""
                                        srcset="" width="100" height="100"></td>
                                <td>{{ $product->Rating }}</td>
                                <td>{{ $product->Brand }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('products.edit', $product->id) }}"
                                            class="btn btn-primary me-2"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $products->links() }}
        </div>
    </section>
@endsection
