<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ 'BLOGS.PH Admin | ' . $title_page }}</title>

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
    <main class="d-flex flex-column gap-2 p-3 justify-content-center align-items-center">
        @include('backoffice._components.notifications')
        <form method="POST" action="" class="p-3 form border rounded">
            @csrf

            <h1>Admin Login</h1>
            <p class="text-muted">Welcome back! please enter your details.</p>

            <div class="mb-3">
                <label for="admin-login-email" class="form-label">Email</label>
                <input required type="email" class="form-control" name="email" id="admin-login-email"
                    placeholder="juandelacruz@email.com" />
            </div>

            <div class="mb-3">
                <label for="admin-login-password" class="form-label">Password</label>
                <input required type="password" class="form-control" name="password" id="admin-login-password" />
            </div>

            <button type="submit" class="mb-3 btn btn-primary">Login</button>

            <p class="text-muted">Dont have an account? Click here to <a
                    href="{{ route('backoffice.auth.register') }}">create an account.</a></p>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
