@extends('backoffice._layouts.main')

@section('page-content')
    <div class="container-lg">
        @include('backoffice._components.page-guide', [
            'guide_title' => 'Welcome to the Admin Portal',
            'guide_text' =>
                'This area manages the people who use the platform. Changes here affect all users and admins.',
        ])

        <div class="row g-3">
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="d-flex flex-column card-body">
                        <div class="d-flex gap-2 mb-2 align-items-center">
                            <i class="fs-4 text-primary bi bi-people" aria-hidden="true"></i>
                            <h2 class="mb-0 h6">User Accounts</h2>
                        </div>
                        <p class="flex-grow-1 text-muted small">
                            Users who sign in to the User Portal to edit website content.</p>
                        <a href="{{ route('backoffice.user-management.index') }}"
                            class="btn btn-sm btn-primary align-self-start">Manage users</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <div class="d-flex flex-column card-body">
                        <div class="d-flex gap-2 mb-2 align-items-center">
                            <i class="fs-4 text-primary bi bi-person-gear" aria-hidden="true"></i>
                            <h2 class="mb-0 h6">Admin Accounts</h2>
                        </div>
                        <p class="flex-grow-1 text-muted small">
                            Admins who can sign in to this Admin Portal and manage every account.</p>
                        <a href="{{ route('backoffice.admin-management.index') }}"
                            class="btn btn-sm btn-primary align-self-start">Manage admins</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <div class="d-flex flex-column card-body">
                        <div class="d-flex gap-2 mb-2 align-items-center">
                            <i class="fs-4 text-primary bi bi-person-square" aria-hidden="true"></i>
                            <h2 class="mb-0 h6">My Profile</h2>
                        </div>
                        <p class="flex-grow-1 text-muted small">Update your own name, photo, email, and password.</p>
                        <a href="{{ route('backoffice.profile.index') }}"
                            class="btn btn-sm btn-primary align-self-start">Edit profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
