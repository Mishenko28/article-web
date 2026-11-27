<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ 'BLOGS.PH · User Portal | ' . $title_page }}</title>

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
    <main class="container p-3">
        <div class="row p-3 align-items-center h-100 overflow-y-auto">
            @include('portal._components.notifications')
            <div class="d-none col-md-6 col-lg-8 d-md-flex justify-content-center">
                <img src="{{ asset('assets/images/login.png') }}" alt="login image" class="rounded img-fluid">
            </div>
            <form method="POST" action="" class="col-md-6 col-lg-4 p-3 form border rounded shadow">
                @csrf

                <h1 class="h3">User Portal Login</h1>
                <p class="text-muted">Sign in to manage your account.</p>

                <div class="mb-3">
                    <label for="login-email" class="form-label">
                        Email
                        <span>*</span>
                    </label>
                    <input required type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" id="login-email" placeholder="juandelacruz@email.com" />
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="login-password" class="form-label">
                        Password
                        <span>*</span>
                    </label>
                    <input required type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" id="login-password" />
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="mb-3 btn btn-primary">Login</button>

                <p class="text-muted">Dont have an account? Click here to <a
                        href="{{ route('portal.auth.register') }}">create an account.</a></p>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
