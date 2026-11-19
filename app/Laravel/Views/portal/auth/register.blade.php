<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ 'BLOGS.PH Portal | ' . $title_page }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">

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
    <main class="container p-3">
        <div class="row p-3 align-items-center h-100 overflow-y-auto">
            @include('portal._components.notifications')
            <div class="d-none col-md-6 col-lg-7 d-md-flex justify-content-center">
                <img src="{{ asset('assets/images/register.png') }}" alt="login image" class="rounded img-fluid">
            </div>
            <form method="POST" class="col-md-6 col-lg-5 p-3 form border rounded shadow">
                @csrf

                <h1>Register</h1>
                <p class="text-muted">Enter your details below to create your account.</p>

                <div class="row g-2">
                    <div class="col-sm-4 mb-3">
                        <label for="register-firstname" class="form-label">First Name</label>
                        <input required type="text" class="form-control" name="first_name" id="register-firstname"
                            placeholder="Juan" />
                    </div>

                    <div class="col-sm-4 mb-3">
                        <label for="register-middlename" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" name="middle_name" id="register-middlename"
                            placeholder="Tolentino" />
                    </div>
                    <div class="col-sm-4 mb-3">
                        <label for="register-lastname" class="form-label">Last Name</label>
                        <input required type="text" class="form-control" name="last_name" id="register-lastname"
                            placeholder="Dela Cruz" />
                    </div>
                </div>

                <div class="mb-3">
                    <label for="register-email" class="form-label">Email</label>
                    <input required type="email" class="form-control" name="email" id="register-email"
                        placeholder="juandelacruz@email.com" />
                </div>

                <div class="mb-3">
                    <label for="register-password" class="form-label">Password</label>
                    <input required type="password" class="form-control" name="password" id="register-password" />
                </div>

                <button type="submit" class="mb-3 btn btn-primary submit-btn">Create Account</button>

                <p class="text-muted">Already have an account? Click here to <a
                        href="{{ route('portal.auth.login') }}">Log in.</a></p>
            </form>
        </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
