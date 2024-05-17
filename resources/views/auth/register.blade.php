@extends('layouts.master')
@section('title', 'Register')
@section('content')
    <section class="py-5 text-dark" style="background-color: #FEFAF6">
        <div class="container">
            <h1 class="text-center">Register</h1>
            @if ($errors)
                @foreach ($errors->all() as $err)
                    <div class="alert alert-danger alert-dismissible fade show mt-2 col-lg-6 m-auto" role="alert">
                        <i class="fa-solid fa-triangle-exclamation me-3"></i>
                        <strong>Error!</strong> {{ $err }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            @endif
            <form method="POST" action="{{ route('register') }}" class="col-lg-6 m-auto">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="input-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus
                        autocomplete="name">
                </div>
                <!-- Email Address -->
                <div>
                    <label for="Email" class="input-label">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                </div>

                <!-- Password -->
                <div>
                    <label for="Password" class="input-label">Password</label>
                    <input type="password" class="form-control" name="password" required autocomplete="password">
                </div>
                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="input-label">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" required
                        autocomplete="new-password">
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <a href="{{ route('login') }}" class="ms-3">Already registered?</a>
                    <button class="btn btn-primary ms-3">Register</button>
                </div>
            </form>
        </div>
    </section>

@endsection
