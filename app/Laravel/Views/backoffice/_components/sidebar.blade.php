<div class="d-flex flex-column flex-shrink-0 p-3 w-100 shadow h-100 text-nowrap text-bg-dark sidebar">
    <div class="d-flex gap-2 align-items-center">
        <span class="flex-grow-1 fs-5 text-decoration-none">
            <a class="text-decoration-none text-light" href="{{ route('web.home') }}">BLOGS.PH</a>
            <span class="badge text-bg-light align-middle">Admin Portal</span>
        </span>
        <button
            class="d-flex d-md-none text-muted border-0 rounded justify-content-center align-items-center sidebar-toggle">
            <i class="bi bi-arrow-bar-left"></i>
        </button>
    </div>

    <hr>

    <small class="ps-3 mb-1 fw-medium text-primary" title="An overview of the Admin Portal">OVERVIEW</small>
    <ul class="flex-column nav">
        <li class="nav-item">
            <a href="{{ route('backoffice.dashboard.index') }}" title="See a quick start guide and account shortcuts"
                class="nav-link text-light rounded {{ $title_page === 'Dashboard' ? 'active' : '' }}"
                {{ $title_page === 'Dashboard' ? "aria-current='page'" : '' }}>
                <i class="bi bi-house"></i>
                Dashboard
            </a>
        </li>
    </ul>

    <hr>

    <small class="ps-3 mb-1 fw-medium text-primary" title="People who use the platform">ACCOUNT MANAGEMENT</small>
    <ul class="flex-column nav">
        <li class="nav-item">
            <a href="{{ route('backoffice.user-management.index') }}"
                title="Manage users who sign in to the User Portal"
                class="nav-link text-light rounded {{ $title_page === 'User Management' ? 'active' : '' }}"
                {{ $title_page === 'User Management' ? "aria-current='page'" : '' }}>
                <i class="bi bi-people"></i>
                User Accounts
            </a>
        </li>

        <li>
            <a href="{{ route('backoffice.admin-management.index') }}"
                title="Manage admins who can sign in to the Admin Portal"
                class="nav-link text-light rounded {{ $title_page === 'Admin Management' ? 'active' : '' }}"
                {{ $title_page === 'Admin Management' ? "aria-current='page'" : '' }}>
                <i class="bi bi-person-gear"></i>
                Admin Accounts
            </a>
        </li>
    </ul>

    <hr>

    <small class="ps-3 mb-1 fw-medium text-primary">ACCOUNT</small>
    <ul class="flex-column nav">
        <li class="nav-item">
            <a href="{{ route('backoffice.profile.index') }}"
                title="Manage your own admin name, photo, email, and password"
                class="nav-link text-light rounded {{ $title_page === 'Profile' ? 'active' : '' }}"
                {{ $title_page === 'Profile' ? "aria-current='page'" : '' }}>
                <i class="bi bi-person-square"></i>
                Profile
            </a>
        </li>
    </ul>
</div>
