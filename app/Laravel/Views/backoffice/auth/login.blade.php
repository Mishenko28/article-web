<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ 'BLOGS.PH · Admin Portal | ' . $title_page }}</title>

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

            <h1 class="h3">Admin Portal Login</h1>
            <div class="mb-3">
                <label for="admin-login-email" class="form-label">
                    Email
                    <span>*</span>
                </label>
                <input required type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    id="admin-login-email" placeholder="juandelacruz@email.com" />
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="admin-login-password" class="form-label">
                    Password
                    <span>*</span>
                </label>
                <input required type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" id="admin-login-password" />
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="mb-3 btn btn-primary">Login</button>

            <p class="text-muted">Dont have an account? Click here to <a
                    href="{{ route('backoffice.auth.register') }}">create an account.</a></p>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
