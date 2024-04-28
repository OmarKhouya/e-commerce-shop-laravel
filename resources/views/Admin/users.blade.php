@extends('layouts.master')
@section('title', 'Users')
@section('content')
    <section class="py-3 text-dark" style="background-color: #FEFAF6">
        <div class="container">
            <h1 class="mb-2">Users</h1>
            <div class=" table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User type</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->usertype }}</td>
                                <td>
                                    <div class="d-flex">
                                        {{--  <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary me-2">
                                            <i class="fa-regular fa-pen-to-square"></i></a> --}}
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#delete-account">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="delete-account" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form method="post" action="{{ route('admin.users.destroy', $user->id) }}"
                                                        class="p-6">
                                                        @csrf
                                                        @method('delete')
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete
                                                                Account</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h2>
                                                                Are you sure you want to delete this account?
                                                            </h2>
                                                            <div class="mt-3">
                                                                <div>
                                                                    <label for="password"
                                                                        class="input-label">Password</label>
                                                                    <input type="password" class="form-control"
                                                                        name="password" required>
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
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-primary">Delete
                                                                Account</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $users->links() }}
        </div>
    </section>
@endsection
