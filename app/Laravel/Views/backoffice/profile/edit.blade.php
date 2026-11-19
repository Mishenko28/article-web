@extends('backoffice._layouts.main')

@section('page-content')
    <div class="container-lg">
        <div class="card">
            <div class="card-header">
                Edit Profile
            </div>
            <div class="card-body">
                <form method="POST" class="form">
                    @csrf

                    <div class="mb-3">
                        <label for="edit-fullname" class="form-label">
                            Full Name
                            <span>*</span>
                        </label>
                        <input required type="text"
                            class="form-control text-uppercase @error('full_name') is-invalid @enderror" name="full_name"
                            id="edit-fullname" placeholder="Juan" value="{{ old('full_name', $user->full_name) }}" />
                        @error('full_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="edit-email" class="form-label">
                            Email
                            <span>*</span>
                        </label>
                        <input required type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" id="edit-email" placeholder="juandelacruz@email.com"
                            value="{{ old('email', $user->email) }}" />
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="edit-password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                            id="edit-password" />
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="mb-3 btn btn-primary submit-btn">Save Changes</button>
                    <a class="mb-3 btn btn-danger" href="{{ route('backoffice.profile.index') }}">
                        Cancel
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('page-scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const submitBtn = document.querySelector('.submit-btn');
            const form = submitBtn.closest('form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Do you want to apply changes with the provided information?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endsection
