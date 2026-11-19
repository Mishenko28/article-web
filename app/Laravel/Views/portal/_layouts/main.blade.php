<!DOCTYPE html>
<html lang="en">

<head>
    @include('portal._components.metas')
    @include('portal._components.styles')
    @yield('page-styles')
</head>

<body>
    <main class="d-flex main">
        @include('portal._components.sidebar')

        <div class="flex-grow-1 d-flex flex-column p-2 gap-2 overflow-hidden">
            @include('portal._components.header')
            @include('portal._components.notifications')
            <div class="flex-grow-1 overflow-y-auto">
                @yield('page-content')
            </div>
        </div>
    </main>

    @include('portal._components.scripts')

    @yield('page-scripts')
</body>

</html>
