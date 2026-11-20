<div class="d-flex flex-column flex-shrink-0 p-3 w-100 shadow h-100 bg-light text-nowrap sidebar">
    <div class="d-flex align-items-center">
        <span href="" class="flex-grow-1 fs-4 text-decoration-none">
            <a class="text-decoration-none text-dark" href="{{ route('web.home') }}">BLOGS.PH</a> | Portal
        </span>
        <button
            class="d-flex d-md-none text-muted border-0 rounded justify-content-center align-items-center bg-dark-subtle sidebar-toggle">
            <i class="bi bi-arrow-bar-left"></i>
        </button>
    </div>

    <hr>

    <small class="ps-3 mb-2 fw-medium text-primary">CMS</small>
    <ul class="flex-column nav">
        <li class="nav-item">
            <a href="{{ route('portal.home.index') }}"
                class="nav-link text-dark rounded {{ $title_page === 'Home' ? 'active' : '' }}"
                {{ $title_page === 'Home' ? "aria-current='page'" : '' }}>
                <i class="bi bi-house"></i>
                Home
            </a>
        </li>
        <li>
            <a href="{{ route('portal.about.index') }}"
                class="nav-link text-dark rounded {{ $title_page === 'About' ? 'active' : '' }}"
                {{ $title_page === 'About' ? "aria-current='page'" : '' }}>
                <i class="bi bi-file-earmark-person"></i>
                About
            </a>
        </li>
        <li>
            <a href="{{ route('portal.contact.index') }}"
                class="nav-link text-dark rounded {{ $title_page === 'Contact' ? 'active' : '' }}"
                {{ $title_page === 'Contact' ? "aria-current='page'" : '' }}>
                <i class="bi bi-telephone"></i>
                Contact
            </a>
        </li>
        <li>
            <a href="{{ route('portal.articles.index') }}"
                class="nav-link text-dark rounded {{ $title_page === 'Articles' ? 'active' : '' }}"
                {{ $title_page === 'Articles' ? "aria-current='page'" : '' }}>
                <i class="bi bi-card-text"></i>
                Articles
            </a>
        </li>

        <hr>

        <li>
            <a href="{{ route('portal.profile.index') }}"
                class="nav-link text-dark rounded {{ $title_page === 'Profile' ? 'active' : '' }}"
                {{ $title_page === 'Profile' ? "aria-current='page'" : '' }}>
                <i class="bi bi-person-square"></i>
                Profile
            </a>
        </li>
    </ul>
</div>
