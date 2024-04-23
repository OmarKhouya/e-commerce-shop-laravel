@extends('layouts.master')
@section('title', 'Register')
@section('content')
    <section class="py-5 text-dark" style="background-color: #FEFAF6">
        <div class="container">
            <h1 class="text-center">Register</h1>
            <form method="POST" action="{{ route('register') }}" class="col-lg-6 m-auto">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="input-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus
                        autocomplete="name">
                    @if ($errors->has('name'))
                        <ul class="">
                            @foreach ($errors->get('name') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <!-- Email Address -->
                <div>
                    <label for="Email" class="input-label">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                    @if ($errors->has('email'))
                        <ul class="bg-danger">
                            @foreach ($errors->get('email') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                <!-- Password -->
                <div>
                    <label for="Password" class="input-label">Password</label>
                    <input type="password" class="form-control" name="password" required autocomplete="password">
                    @if ($errors->has('password'))
                        <ul class="bg-danger mt-3">
                            @foreach ($errors->get('password') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="input-label">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" required
                        autocomplete="new-password">
                    @if ($errors->has('password'))
                        <ul class="bg-danger">
                            @foreach ($errors->get('password') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <a href="{{ route('login') }}" class="ms-3">Already registered?</a>
                    <button class="btn btn-primary ms-3">Register</button>
                </div>
            </form>
        </div>
    </section>

@endsection
