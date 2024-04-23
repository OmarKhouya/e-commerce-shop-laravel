<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
{{--
        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div> --}}
        <div>
            <label for="update_password_current_password" class="input-label">Current Password</label>
            <input type="password" class="form-control" name="current_password" required autocomplete="current-password">
            @if ($errors->updatePassword->has('current_password'))
                <ul class="bg-danger mt-3">
                    @foreach ($errors->updatePassword->get('current_password') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        {{-- <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div> --}}
        <div>
            <label for="update_password_password" class="input-label">New Password</label>
            <input type="password" class="form-control" name="password" required autocomplete="new-password">
            @if ($errors->updatePassword->has('password'))
                <ul class="bg-danger mt-3">
                    @foreach ($errors->updatePassword->get('password') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

       {{--  <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div> --}}

        <div>
            <label for="update_password_password_confirmation" class="input-label">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            @if ($errors->updatePassword->has('password_confirmation'))
                <ul class="bg-danger mt-3">
                    @foreach ($errors->updatePassword->get('password_confirmation') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

       {{--  <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div> --}}
        <div>
            <button class="btn btn-primary mt-3" type="submit">Save</button>
            @if (session('status') === 'password-updated')
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
            >
                Saved
            </p>
            @endif
        </div>
        
    </form>
</section>
