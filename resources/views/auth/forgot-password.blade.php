@extends('layouts.master')
@section('title', 'Reset Password')
@section('content')
    <section class="py-5 text-dark" style="background-color: #FEFAF6">
        <div class="container">
            <h1 class="text-center">Reset Password</h1>
            <div class="col-lg-6 m-auto pt-3">
                <p class="text-muted">
                    Forgot your password? No problem. Just let us know your email address and we will email you a password
                    reset
                    link that will allow you to choose a new one.
                </p>

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}" required
                            autofocus>
                        @if ($errors->has('email'))
                            <ul class="bg-danger">
                                @foreach ($errors->get('email') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <button class="btn btn-primary">
                            Email Password Reset Link
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
