<header class="d-flex flex-column flex-sm-row px-sm-3 justify-content-between align-items-center sticky-top">
    <div class="d-flex gap-2 align-items-center align-self-start align-self-sm-center">
        <button
            class="d-flex text-muted border-0 rounded justify-content-center align-items-center bg-dark-subtle sidebar-toggle">
            <i class="bi bi-arrow-bar-left"></i>
        </button>
        <h6 class="m-0 text-uppercase">{{ $title_page }}</h6>
    </div>

    <div class="d-flex gap-2 align-items-center align-self-end align-self-sm-center">
        <form class="input-group">
            <i class="input-group-text rounded-start-pill text-muted bg-body bi bi-search"></i>
            <input class="px-1 form-control rounded-end-pill border-start-0" type="search" placeholder="Search"
                aria-label="Search" />
        </form>

        <hr class="bg-dark" style="width: 1.5px; height: 30px;">

        </hr>

        <div class="d-lg-flex flex-column d-none align-items-end">
            <small class="fw-medium text-nowrap">
                {{ auth('web')->user()->first_name }}
                {{ auth('web')->user()->last_name }}
            </small>
            <small class="text-muted">{{ auth('web')->user()->email }}</small>
        </div>

        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="bi bi-list"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="triggerId">
                <a class="dropdown-item" href="#">Action 1</a>
                <a class="dropdown-item" href="#">Action 2</a>
                <a class="dropdown-item" href="#">Action 3</a>
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
