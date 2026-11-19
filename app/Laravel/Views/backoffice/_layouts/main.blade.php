<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    @include('backoffice._components.metas')
    @include('backoffice._components.styles')
    @yield('page-styles')
</head>

<body>
    <main class="d-flex main">
        @include('backoffice._components.sidebar')

        <div class="flex-grow-1 d-flex flex-column p-2 gap-2 overflow-hidden">
            @include('backoffice._components.header')
            @include('backoffice._components.notifications')
            <div class="flex-grow-1 overflow-y-auto">
                @yield('page-content')
            </div>
        </div>
    </main>

    @include('backoffice._components.scripts')

    @yield('page-scripts')
</body>

</html>
