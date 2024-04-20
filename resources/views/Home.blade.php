@extends('layouts.master')
@section('title', 'Home')
@section('content')
    @php
        $products = [
            [
                'id' => 1,
                'title' => 'Samsung 32 5300 TV SMART',
                'description' => 'Samsung smart tv',
                'price' => "$3000",
                'image' => '20230718_211337.jpg',
                'rating' => 5,
                'category' => 'Smart TV',
                'stock' => 'In Stock',
                'brand' => 'Samsung',
            ],
            [
                'id' => 1,
                'title' => 'Samsung 32 5300 TV SMART',
                'description' => 'Samsung smart tv',
                'price' => "$3000",
                'image' => '20230718_211337.jpg',
                'rating' => 5,
                'category' => 'Smart TV',
                'stock' => 'In Stock',
                'brand' => 'Samsung',
            ],
            [
                'id' => 1,
                'title' => 'Samsung 32 5300 TV SMART',
                'description' => 'Samsung smart tv',
                'price' => "$3000",
                'image' => '20230718_211337.jpg',
                'rating' => 5,
                'category' => 'Smart TV',
                'stock' => 'In Stock',
                'brand' => 'Samsung',
            ],
            [
                'id' => 2,
                'title' => 'Iphone 13 ',
                'description' => 'Iphone smart phone',
                'price' => "$1500",
                'image' => '20230818_094649.jpg',
                'rating' => 4.5,
                'category' => 'Smart phone',
                'stock' => 'In Stock',
                'brand' => 'Apple',
            ],
        ];
        $comments = [
            [
                'author' => 'El garh',
                'comment' => 'Good Service and the products are very good,',
                'profile' => 'profile1.png',
            ],
            [
                'author' => 'Omar ka',
                'comment' => '',
                'profile' => 'profile2.png',
            ],
            [
                'author' => 'El garh',
                'comment' => 'Good product',
                'profile' => 'profile1.png',
            ],
        ];
    @endphp
    <section style="background-color: #FEFAF6" class="py-3">
        <div class="container">
            <div class="row p-4">
                <div id="carouselExampleSlidesOnly" class="carousel slide col-md" data-bs-ride="carousel">
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/black_friday_web_banner_18.png') }}" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/Black-Friday-Web-Banner-11.png') }}" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/SAM 32 5300 TV SMART.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-md m-auto">
                    <h1 class="p-3 text-center">
                        "Discover our latest promotions!"
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #3559E0" class="py-3 text-white">
        <div class="container">
            <h1>Find out our latest Listings!</h1>
            <div class="row pt-3">
                @foreach ($products as $product)
                    {{-- @dump($product) --}}
                    <x-products-card :product="$product" />
                @endforeach
            </div>
        </div>
    </section>
    <section style="background-color: #FEFAF6" class="py-3">
        <div class="container">
            <div class="row p-4">
                <div class="col-md m-auto">
                    <h1 class="p-3 text-center">
                        "Locate us!"
                    </h1>
                </div>
                <div class="col-md">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d791.0649519420975!2d-9.678502485055795!3d31.00187802747424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb26f4ee5d68d97%3A0xe36aa83fca760a89!2s%C3%89lectrom%C3%A9nager%20Khouya!5e0!3m2!1sen!2sma!4v1713626382856!5m2!1sen!2sma"
                        {{--  width="800" --}} height="350" class="col-md w-100" style="border:0;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #102C57" class="py-3 text-white">
        <div class="container">
            <h1>Our best selling products for the month!</h1>
            <div class="row pt-3">
                @foreach ($products as $product)
                    {{-- @dump($product) --}}
                    <x-products-card :product="$product" />
                @endforeach
            </div>
        </div>
    </section>
    <section style="background-color: #FEFAF6" class="py-3 text-dark">
        <div class="container">
            <h1>Our Customers said some truths!</h1>
            <div class="row d-flex justify-content-around mt-3 py-3">
                <div class="col-md-6 col-lg-4">
                    <x-customer-comments-card />
                </div>
                <div class="col-md-6 col-lg-4">
                    <x-customer-comments-card />
                </div>
                <div class="col-md-6 col-lg-4">
                    <x-customer-comments-card />
                </div>
            </div>
        </div>
        </div>

        </div>
    </section>
@endsection
