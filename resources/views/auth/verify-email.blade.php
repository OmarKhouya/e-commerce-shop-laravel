@extends('layouts.master')
@section('title', 'Email verification')
@section('content')
    <section class="py-5 text-dark" style="background-color: #FEFAF6">
        <div class="container">
            <h1 class="text-center">Verify email</h1>
            <p class="text-muted">
                Thanks for signing up! Before getting started, could you verify your email address by clicking on the link
                we just emailed to you? If you didn\'t receive the email, we will gladly send you another.
            </p>

            @if (session('status') == 'verification-link-sent')
                <div class="text-success">
                    <p>
                        A new verification link has been sent to the email address you provided during registration.
                    </p>
                </div>
            @endif

            <div class="mt-4 d-flex align-items-center justify-content-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <button type="submit" class="btn btn-primary">
                            Resend Verification Email
                        </button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button class="btn btn-primary">
                        Log Out
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
