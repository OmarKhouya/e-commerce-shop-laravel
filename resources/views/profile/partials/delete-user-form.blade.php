<section class="space-y-6">

    <h2>
        Delete Account
    </h2>
    <p class="text-muted ">
        Once your account is deleted, all of its resources and data will be permanently deleted
    </p>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#delete-account">
        Delete Account
    </button>

    <!-- Modal -->
    <div class="modal fade" id="delete-account" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                    @csrf
                    @method('delete')
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Account</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h2>
                            Are you sure you want to delete your account?
                        </h2>
                        <p class="text-muted">
                            Once your account is deleted, all of its resources and data will be permanently deleted.
                            Please
                            enter your password to confirm you would like to permanently delete your account.
                        </p>
                        <div class="mt-3">
                            <div>
                                <label for="password" class="input-label">Password</label>
                                <input type="password" class="form-control" name="password" required>
                                @if ($errors->userDeletion->has('password'))
                                    <ul class="bg-danger mt-3">
                                        @foreach ($errors->userDeletion->get('password') as $message)
                                            <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Delete Account</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
