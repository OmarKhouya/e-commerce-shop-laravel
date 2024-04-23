<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
       {{--  <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div> --}}
        <div>
            <label for="name" class="input-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('email') }}" required autofocus
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
        {{-- <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div> --}}
        <div>
            <label for="Email" class="input-label">Email</label>
            <input type="text" class="form-control" name="email" required autofocus
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
        {{-- <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div> --}}
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
        {{-- <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div> --}}
        <div>
            <label for="password_confirmation" class="input-label">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            @if ($errors->has('password'))
                <ul class="bg-danger">
                    @foreach ($errors->get('password') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        {{-- <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div> --}}
        <div class="d-flex mt-3">
            <a href="{{ route('login') }}" class="ms-3">Already registered?</a>
            <button class="btn btn-primary ms-3">Register</button>
        </div>
    </form>
</x-guest-layout>
