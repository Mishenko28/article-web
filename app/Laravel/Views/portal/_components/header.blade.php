@php($authUser = auth('web')->user())

<header class="d-flex flex-column flex-sm-row px-sm-3 justify-content-between align-items-center sticky-top">
    <div class="d-flex gap-2 align-items-center align-self-start align-self-sm-center">
        <button
            class="d-flex text-muted border-0 rounded justify-content-center align-items-center bg-dark-subtle sidebar-toggle">
            <i class="bi bi-arrow-bar-left"></i>
        </button>
        <h6 class="m-0 text-uppercase">{{ $title_page }}</h6>
    </div>

    <div class="d-flex gap-2 align-items-center align-self-end align-self-sm-center">
        <div class="d-flex gap-2 align-items-center">
            <div class="d-flex flex-column align-items-end">
                <small class="fw-medium text-nowrap">
                    {{ $authUser->first_name }}
                    {{ $authUser->last_name }}
                </small>
                <small class="text-muted">{{ $authUser->email }}</small>
            </div>
            <img src="{{ $authUser->avatar_path ? asset('storage/' . $authUser->avatar_path) : asset('assets/images/default_avatar.jpg') }}"
                alt="" class="border rounded-circle border-dark-subtle object-fit-cover img-fluid avatar">
        </div>

        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="bi bi-list"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="triggerId">
                <a class="dropdown-item" href="{{ route('portal.profile.index') }}">
                    <i class="bi bi-person"></i>
                    My Profile
                </a>
                <a class="dropdown-item" href="{{ route('web.home') }}">
                    <i class="bi bi-box-arrow-up-right"></i>
                    View public site
                </a>
                <div class="dropdown-divider"></div>
                <div class="dropdown-item">
                    <a class="btn btn-danger w-100 logout-btn" href="{{ route('portal.logout') }}">
                        <i class="bi bi-box-arrow-left"></i>
                        Log out
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
