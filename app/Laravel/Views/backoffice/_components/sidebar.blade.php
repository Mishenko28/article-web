<div class="d-flex flex-column flex-shrink-0 p-3 w-100 shadow h-100 text-nowrap text-bg-dark sidebar">
    <div class="d-flex align-items-center">
        <span href="" class="flex-grow-1 fs-4 text-decoration-none">
            <a class="text-decoration-none text-light" href="{{ route('web.home') }}">BLOGS.PH</a> | Admin
        </span>
        <button
            class="d-flex d-md-none text-muted border-0 rounded justify-content-center align-items-center sidebar-toggle">
            <i class="bi bi-arrow-bar-left"></i>
        </button>
    </div>

    <hr>

    <ul class="flex-column nav">
        <li class="nav-item">
            <a href="{{ route('backoffice.dashboard.index') }}"
                class="nav-link text-light rounded {{ $title_page === 'Dashboard' ? 'active' : '' }}"
                {{ $title_page === 'Dashboard' ? "aria-current='page'" : '' }}>
                <i class="bi bi-house"></i>
                Dashboard
            </a>
        </li>

        <li>
            <a href="{{ route('backoffice.profile.index') }}"
                class="nav-link text-light rounded {{ $title_page === 'Profile' ? 'active' : '' }}"
                {{ $title_page === 'Profile' ? "aria-current='page'" : '' }}>
                <i class="bi bi-person-square"></i>
                Profile
            </a>
        </li>
    </ul>

    <hr>

    <small class="ps-3 mb-2 fw-medium text-primary">ACCOUNT MANAGEMENT</small>
    <ul class="flex-column nav">
        <li class="nav-item">
            <a href="{{ route('backoffice.user-management.index') }}"
                class="nav-link text-light rounded {{ $title_page === 'User Management' ? 'active' : '' }}"
                {{ $title_page === 'User Management' ? "aria-current='page'" : '' }}>
                <i class="bi bi-house"></i>
                User Accounts
            </a>
        </li>

        <li>
            <a href="{{ route('backoffice.admin-management.index') }}"
                class="nav-link text-light rounded {{ $title_page === 'Admin Management' ? 'active' : '' }}"
                {{ $title_page === 'Admin Management' ? "aria-current='page'" : '' }}>
                <i class="bi bi-person-square"></i>
                Admin Accounts
            </a>
        </li>
    </ul>
</div>
