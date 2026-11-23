@extends('portal._layouts.main')

@section('page-content')
    <div class="container-lg">
        <div class="card">
            <div class="card-header">
                Edit Profile
            </div>
            <div class="card-body">
                <form method="POST" class="form" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex justify-content-center">
                                <img id="avatar-preview"
                                    src="{{ $user->avatar_path ? asset('storage/' . $user->avatar_path) : asset('assets/images/default_avatar.jpg') }}"
                                    alt="{{ $user->first_name }} {{ $user->last_name }}"
                                    class="border rounded-circle border-dark-subtle object-fit-cover img-fluid avatar-image-lg">
                            </div>

                            <div class="mb-3">
                                <label for="edit-avatar" class="form-label">Profile Photo</label>
                                <div class="input-group">
                                    <input type="file" class="form-control @error('avatar') is-invalid @enderror"
                                        name="avatar" id="edit-avatar" accept="image/*" />
                                    <button type="button" class="d-none btn btn-outline-danger" id="remove-avatar"
                                        title="Remove selected image">
                                        Remove
                                    </button>
                                </div>
                                @error('avatar')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-8">
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
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" id="edit-password" />
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
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
            // Sweet alert
            const submitBtn = document.querySelector('.submit-btn');
            const form = submitBtn.closest('form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Do you want to apply the changes with the provided information?",
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

            // Image preview
            const avatarInput = document.getElementById('edit-avatar');
            const avatarPreview = document.getElementById('avatar-preview');
            const removeAvatarBtn = document.getElementById('remove-avatar');
            const originalSrc = avatarPreview.src;
            let objectUrl = null;

            function resetAvatar() {
                if (objectUrl) {
                    URL.revokeObjectURL(objectUrl);
                    objectUrl = null;
                }
                avatarInput.value = '';
                avatarPreview.src = originalSrc;
                removeAvatarBtn.classList.add('d-none');
            }

            avatarInput.addEventListener('change', function() {
                const file = this.files[0];

                if (!file) {
                    resetAvatar();
                    return;
                }

                if (objectUrl) {
                    URL.revokeObjectURL(objectUrl);
                }

                objectUrl = URL.createObjectURL(file);
                avatarPreview.src = objectUrl;
                removeAvatarBtn.classList.remove('d-none');
            });

            removeAvatarBtn.addEventListener('click', resetAvatar);

        });
    </script>
@endsection
