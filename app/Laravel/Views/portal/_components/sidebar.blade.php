<div class="d-flex flex-column flex-shrink-0 p-3 w-100 shadow h-100 bg-light text-nowrap sidebar">
    <div class="d-flex gap-2 align-items-center">
        <span class="flex-grow-1 fs-5 text-decoration-none">
            <a class="text-decoration-none text-dark" href="{{ route('web.home') }}">BLOGS.PH</a>
            <span class="badge text-bg-primary align-middle">User Portal</span>
        </span>
        <button
            class="d-flex d-md-none text-muted border-0 rounded justify-content-center align-items-center bg-dark-subtle sidebar-toggle">
            <i class="bi bi-arrow-bar-left"></i>
        </button>
    </div>

    <hr>

    <small class="ps-3 mb-1 fw-medium text-primary" title="These pages appear on your public website">
        CMS
    </small>
    <ul class="flex-column nav">
        <li class="nav-item">
            <a href="{{ route('portal.home.index') }}" title="Edit the Home page of your public website"
                class="nav-link text-dark rounded {{ $title_page === 'Home' ? 'active' : '' }}"
                {{ $title_page === 'Home' ? "aria-current='page'" : '' }}>
                <i class="bi bi-house"></i>
                Home
            </a>
        </li>
        <li>
            <a href="{{ route('portal.about.index') }}" title="Edit the About page of your public website"
                class="nav-link text-dark rounded {{ $title_page === 'About' ? 'active' : '' }}"
                {{ $title_page === 'About' ? "aria-current='page'" : '' }}>
                <i class="bi bi-file-earmark-person"></i>
                About
            </a>
        </li>
        <li>
            <a href="{{ route('portal.contact.index') }}" title="Edit the Contact page of your public website"
                class="nav-link text-dark rounded {{ $title_page === 'Contact' ? 'active' : '' }}"
                {{ $title_page === 'Contact' ? "aria-current='page'" : '' }}>
                <i class="bi bi-telephone"></i>
                Contact
            </a>
        </li>
        <li>
            <a href="{{ route('portal.articles.index') }}" title="Articles are coming soon"
                class="nav-link text-dark rounded {{ $title_page === 'Articles' ? 'active' : '' }}"
                {{ $title_page === 'Articles' ? "aria-current='page'" : '' }}>
                <i class="bi bi-card-text"></i>
                Articles
            </a>
        </li>
    </ul>

    <hr>

    <small class="ps-3 mb-1 fw-medium text-primary">ACCOUNT</small>
    <ul class="flex-column nav">
        <li class="nav-item">
            <a href="{{ route('portal.profile.index') }}" title="Manage your name, photo, email, and password"
                class="nav-link text-dark rounded {{ $title_page === 'Profile' ? 'active' : '' }}"
                {{ $title_page === 'Profile' ? "aria-current='page'" : '' }}>
                <i class="bi bi-person-square"></i>
                Profile
            </a>
        </li>
    </ul>
</div>
