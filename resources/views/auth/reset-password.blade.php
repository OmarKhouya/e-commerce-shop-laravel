@extends('layouts.master')
@section('title', 'Reset Password')
@section('content')
    <section class="py-5 text-dark" style="background-color: #FEFAF6">
        <div class="container">
            <h1 class="text-center">Login</h1>
            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <div class="my-3">
                    <label for="email" class="input-label">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ old('email', $request->email) }}" required autofocus
                        autocomplete="username">
                    @if ($errors->has('email'))
                        <ul class="bg-danger">
                            @foreach ($errors->get('email') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <!-- Password -->
                <div class="my-3">
                    <label for="Password" class="input-label">Password</label>
                    <input type="password" class="form-control" value="{{ old('password') }}" name="password" required
                        autocomplete="new-password">
                    @if ($errors->has('password'))
                        <ul class="bg-danger">
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
                    @if ($errors->has('password_confirmation'))
                        <ul class="bg-danger">
                            @foreach ($errors->get('password_confirmation') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Reset Password</button>
                </div>
            </form>
        </div>
    </section>
@endsection
