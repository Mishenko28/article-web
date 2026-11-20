<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ 'BLOGS.PH Admin | ' . $title_page }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        main {
            height: 100svh;
        }

        .form {
            height: min-content;
        }
    </style>
</head>

<body>
    <main class="d-flex flex-column p-3 gap-2 justify-content-center align-items-center">
        @include('backoffice._components.notifications')
        <form method="POST" class="p-3 form border rounded">
            @csrf

            <h1>Admin Register</h1>
            <p class="text-muted">Enter your details below to create your account.</p>

            <div class="mb-3">
                <label for="admin-register-fullname" class="form-label">
                    Full Name
                    <span>*</span>
                </label>
                <input required type="text" class="form-control @error('full_name') is-invalid @enderror"
                    name="full_name" id="admin-register-fullname" placeholder="Juan Dela Cruz" />
                @error('full_name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="admin-register-email" class="form-label">
                    Email
                    <span>*</span>
                </label>
                <input required type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    id="admin-register-email" placeholder="juandelacruz@email.com" />
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="admin-register-password" class="form-label">
                    Password
                    <span>*</span>
                </label>
                <input required type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" id="admin-register-password" />
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="mb-3 btn btn-primary submit-btn">Create Account</button>

            <p class="text-muted">Already have an account? Click here to <a
                    href="{{ route('backoffice.auth.login') }}">Log
                    in.</a></p>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const submitBtn = document.querySelector('.submit-btn');
            const form = submitBtn.closest('form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Do you want to register with the provided information?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, register!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
