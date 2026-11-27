@extends('portal._layouts.main')

@section('page-content')
    <div class="container-lg">
        @include('portal._components.page-guide', [
            'guide_title' => 'Your account',
            'guide_text' =>
                'Your name and photo appear in the User Portal header. Use Edit Profile to change your details.',
        ])

        <div class="card">
            <div class="d-flex card-header justify-content-between align-items-center">
                Profile Details
                <div>
                    <a href="{{ route('portal.profile.edit') }}" class="col btn btn-primary">
                        <i class="bi bi-pencil-square"></i>
                        Edit Profile
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex flex-column flex-md-row gap-md-5">
                    <div class="mb-3">
                        <label class="text-muted">Profile Photo</label>
                        <img src="{{ $user->avatar_path ? asset('storage/' . $user->avatar_path) : asset('assets/images/default_avatar.jpg') }}"
                            alt="{{ $user->first_name }} {{ $user->last_name }}"
                            class="d-block border rounded-circle border-dark-subtle object-fit-cover img-fluid avatar-image-sm">
                    </div>
                    <div class="row">
                        <div class="col-sm-4 mb-3">
                            <label class="text-muted">First Name</label>
                            <p class="card-text fw-medium">{{ $user->first_name }}</p>
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label class="text-muted">Middle Name</label>
                            <p class="card-text fw-medium">{{ $user->middle_name }}</p>
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label class="text-muted">Last Name</label>
                            <p class="card-text fw-medium">{{ $user->last_name }}</p>
                        </div>
                        <div class="col mb-3">
                            <label class="text-muted">Email</label>
                            <p class="card-text fw-medium">{{ $user->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
