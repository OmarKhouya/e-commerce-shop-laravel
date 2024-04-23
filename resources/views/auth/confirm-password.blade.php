@extends('layouts.master')
@section('title', 'Confirm password')
@section('content')
    <section class="py-5 text-dark" style="background-color: #FEFAF6">
        <div class="container">
            <h1 class="text-center">Confirm password</h1>
            <p class="mb-4 text-muted">
                This is a secure area of the application. Please confirm your password before continuing.
            </p>
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf
                <!-- Password -->
                <div>
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" name="password" required autofocus
                        autocomplete="current-password">
                    @if ($errors->has('email'))
                        <ul class="bg-danger">
                            @foreach ($errors->get('email') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div>
                    <button type="submit" class="btn btn-primary float-end mt-4">Confirm</button>
                </div>
            </form>
        </div>
    </section>
@endsection
