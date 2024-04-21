@extends('layouts.master')
@section('title', 'Product')
@section('content')
    <section class="py-5" style="background-color: #FEFAF6">
        <div class="container">
          <div class="row gx-5">
            <aside class="col-lg-6">
                <div id="bigImageContainer" class="border rounded-4 mb-3 d-flex justify-content-center">
                    <img id="bigImage" style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="{{$product->Thumbnail}}" />
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <div data-fslightbox="mygallery" class="border mx-1 rounded-2" data-type="image">
                        <img width="60" height="60" class="rounded-2" src="{{ $product->Image1 }}"onclick="updateBigImage(this)" />
                    </div>
                    <div data-fslightbox="mygallery" class="border mx-1 rounded-2" data-type="image">
                        <img width="60" height="60" class="rounded-2" src="{{ $product->Image2 }}" onclick="updateBigImage(this)"/>
                    </div>
                    <div data-fslightbox="mygallery" class="border mx-1 rounded-2" data-type="image">
                        <img width="60" height="60" class="rounded-2" src="{{ $product->Image3 }}" onclick="updateBigImage(this)"/>
                    </div>
                </div>
            </aside>

            <script>
                function updateBigImage(element) {
                    var bigImage = document.getElementById('bigImage');
                    bigImage.src = element.src;
                    return false;
                }
            </script>

            <main class="col-lg-6">
              <div class="ps-lg-3">
                <h4 class="title text-dark">
                    {{$product->Name}}<br />
                  {{$product->Category}}
                </h4>
                <div class="d-flex flex-row my-3">
                  <div class="text-warning mb-1 me-2">
                    <x-rating-stars :rating="$product->Rating" />
                    <span class="ms-1">
                      {{$product->Rating}}
                    </span>
                  </div>
                  <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>{{$product->Quantity}}</span>
                  <span class="text-success ms-2">In stock</span>
                </div>

                <div class="mb-3">
                  <span class="h5">${{$product->Price}}</span>
                  <span class="text-muted">/per item</span>
                </div>

                <p>
                  {{$product->Description}}
                </p>

                <div class="row">
                  <dt class="col-3">Type:</dt>
                  <dd class="col-9">{{$product->Category}}</dd>

                  <dt class="col-3">Brand</dt>
                  <dd class="col-9">{{$product->Brand}}</dd>
                </div>

                <hr />
                {{-- <a href="#" class="btn btn-warning shadow-0"> Buy now </a> --}}
                <a href="#" class="btn btn-dark shadow-0" style="background-color: #102C57"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart </a>
                {{-- <a href="#" class="btn btn-light border border-secondary py-2 icon-hover px-3"> <i class="me-1 fa fa-heart fa-lg"></i> Save </a> --}}
              </div>
            </main>
          </div>
        </div>
      </section>
@endsection
