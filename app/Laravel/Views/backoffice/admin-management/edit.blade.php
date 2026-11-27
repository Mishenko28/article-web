@extends('backoffice._layouts.main')

@section('page-content')
    <div class="container-lg">
        @include('backoffice._components.page-guide', [
            'guide_title' => 'Editing an admin account',
            'guide_text' =>
                'Changes to the email or password take effect immediately. This admin signs in to the Admin Portal with these details.',
        ])

        <a class="mb-3 btn btn-secondary" href="{{ route('backoffice.admin-management.index') }}">
            <i class="bi bi-arrow-90deg-left"></i>
            Go back
        </a>
        <div class="card">
            <div class="card-header">
                Edit Account
            </div>
            <div class="card-body">
                <form method="POST" class="form" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex justify-content-center">
                                <img id="avatar-preview"
                                    src="{{ $record->avatar_path ? asset('storage/' . $record->avatar_path) : asset('assets/images/default_avatar.jpg') }}"
                                    alt="{{ $record->full_name }}"
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
                            <div class="mb-3">
                                <label for="edit-fullname" class="form-label">
                                    Full Name
                                    <span>*</span>
                                </label>
                                <input required type="text"
                                    class="form-control text-uppercase @error('full_name') is-invalid @enderror"
                                    name="full_name" id="edit-fullname" placeholder="Juan Dela Cruz"
                                    value="{{ old('full_name', $record->full_name) }}" />
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
                                    aria-describedby="help-admin-email" value="{{ old('email', $record->email) }}" />
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <div id="help-admin-email" class="form-text">Used to sign in to the Admin Portal.</div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="mb-3 btn btn-primary submit-btn">Save Admin Account</button>
                    <a class="mb-3 btn btn-danger" href="{{ route('backoffice.admin-management.index') }}">
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
