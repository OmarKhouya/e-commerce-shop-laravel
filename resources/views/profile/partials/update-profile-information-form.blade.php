<section>
    <div>
        <h2 class="">
            Profile Information
        </h2>
        <p>Update your account's profile information and email address.</p>
    </div>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div class="my-3">
            <label for="name" class="input-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" required
                autofocus autocomplete="name">
            @if ($errors->has('name'))
                <ul class="bg-danger">
                    @foreach ($errors->get('name') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class="my-3">
            <label for="email" class="input-label">Email</label>
            <input type="text" class="form-control" name="email" value="{{ old('email', $user-> email) }}" required autofocus
                autocomplete="username">
            @if ($errors->has('email'))
                <ul class="bg-danger">
                    @foreach ($errors->get('email') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div>
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class=mt-2>
                        Your email address is unverified.
                        <button form="send-verification" class="text-decoration-underline">
                            Click here to re-send the verification email.
                        </button>
                    </p>
                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2">
                            A new verification link has been sent to your email address.
                        </p>
                    @endif
                </div>
            @endif
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Save</button>
            @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
                Saved
            </p>
            @endif
        </div>
    </form>
</section>
