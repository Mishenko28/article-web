@extends('portal._layouts.main')

@section('page-content')
    <div class="container-lg">
        <div class="card">
            <div class="card-header">
                Edit Profile
            </div>
            <div class="card-body">
                <form method="POST" class="form">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4 mb-3">
                            <label for="edit-firstname" class="form-label">
                                First Name
                                <span>*</span>
                            </label>
                            <input required type="text"
                                class="form-control text-uppercase @error('first_name') is-invalid @enderror"
                                name="first_name" id="edit-firstname" placeholder="Juan"
                                value="{{ old('first_name', $user->first_name) }}" />
                            @error('first_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-sm-4 mb-3">
                            <label for="edit-middlename" class="form-label">Middle Name</label>
                            <input type="text"
                                class="form-control text-uppercase @error('middle_name') is-invalid @enderror"
                                name="middle_name" id="edit-middlename" placeholder="Tolentino"
                                value="{{ old('middle_name', $user->middle_name) }}" />
                            @error('middle_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-sm-4 mb-3">
                            <label for="edit-lastname" class="form-label">
                                Last Name
                                <span>*</span>
                            </label>
                            <input required type="text"
                                class="form-control text-uppercase @error('last_name') is-invalid @enderror"
                                name="last_name" id="edit-lastname" placeholder="Dela Cruz"
                                value="{{ old('last_name', $user->last_name) }}" />
                            @error('last_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
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
                    <a class="mb-3 btn btn-danger" href="{{ route('portal.profile.index') }}">
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
