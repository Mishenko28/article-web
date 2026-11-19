<header class="sticky-top bg-light-subtle border-bottom">
    <nav class="py-3 navbar navbar-expand-lg" aria-label="Navigation">
        <div class="container">
            <a class="navbar-brand fw-semibold fs-5" href="{{ route('web.home') }}">BLOGS.PH</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#siteNav"
                aria-controls="siteNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="gap-2 collapse navbar-collapse" id="siteNav">
                <ul class="gap-lg-2 navbar-nav mx-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link fw-medium {{ $title_page === 'Articles' ? 'active' : '' }}"
                            {{ $title_page === 'Articles' ? "aria-current='page'" : '' }}
                            href="{{ route('web.articles') }}">ARTICLES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium {{ $title_page === 'About' ? 'active' : '' }}"
                            {{ $title_page === 'About' ? "aria-current='page'" : '' }}
                            href="{{ route('web.about') }}">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium {{ $title_page === 'Contact' ? 'active' : '' }}"
                            {{ $title_page === 'Contact' ? "aria-current='page'" : '' }}
                            href="{{ route('web.contact') }}">CONTACT</a>
                    </li>

                    @auth('web')
                        <li class="d-lg-none d-flex gap-2 nav-item">
                            <a class="btn btn-primary" href="{{ route('portal.home.index') }}">Portal</a>
                        </li>
                    @endauth
                    @auth('admin')
                        <li class="d-lg-none d-flex gap-2 nav-item">
                            <a class="btn btn-primary" href="{{ route('backoffice.dashboard.index') }}">Backoffice</a>
                        </li>
                    @endauth
                    @guest('admin')
                        @guest('web')
                            <li class="d-lg-none d-flex gap-2 nav-item">
                                <a class="btn btn-outline-primary fw-medium" href="{{ route('portal.auth.login') }}">Login</a>
                                <a class="btn btn-primary fw-medium" href="{{ route('portal.auth.register') }}">Register</a>
                            </li>
                        @endguest
                    @endguest
                </ul>
            </div>

            @auth('web')
                <div class="d-none d-lg-flex gap-2 gap-2 navbar-nav align-items-center">
                    <div class="d-lg-flex flex-column d-none align-items-end">
                        <small class="fw-medium text-nowrap">
                            {{ auth('web')->user()->first_name }}
                            {{ auth('web')->user()->last_name }}
                        </small>
                        <small class="text-muted">{{ auth('web')->user()->email }}</small>
                    </div>
                    <a class="nav-item btn btn-primary" href="{{ route('portal.home.index') }}">Portal</a>
                </div>
            @endauth
            @auth('admin')
                <div class="d-none d-lg-flex gap-2 gap-2 navbar-nav align-items-center">
                    <div class="d-lg-flex flex-column d-none align-items-end">
                        <small class="fw-medium text-nowrap">
                            {{ auth('admin')->user()->full_name }}
                        </small>
                        <small class="text-muted">{{ auth('admin')->user()->email }}</small>
                    </div>
                    <a class="nav-item btn btn-primary" href="{{ route('backoffice.dashboard.index') }}">Backoffice</a>
                </div>
            @endauth
            @guest('admin')
                @guest('web')
                    <div class="d-none d-lg-flex gap-2 gap-2 navbar-nav">
                        <a class="nav-item btn btn-outline-primary" href="{{ route('portal.auth.login') }}">Login</a>
                        <a class="nav-item btn btn-primary" href="{{ route('portal.auth.register') }}">Register</a>
                    </div>
                @endguest
            @endguest
        </div>
    </nav>
</header>
