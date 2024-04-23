@extends('layouts.master')
@section('title', 'Profile')
@section('content')
    <section class="py-5 text-dark" style="background-color: #FEFAF6">
        <div class="container">
            <h1 class="text-center">Profile</h1>
            <div class="my-3">
                <div class="container-fluid ">
                    <div>
                        @include('profile.partials.update-profile-information-form')
                    </div>
                    <hr>
                    <div>
                        @include('profile.partials.update-password-form')
                    </div>
                    <hr>
                    <div>
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
