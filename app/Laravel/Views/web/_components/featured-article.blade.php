<div class="px-3 card border-0 featured-article">
    <div class="row gap-0">
        <div class="col-md-7 p-0 overflow-hidden">
            <img src="{{ asset('assets/images/featured.avif') }}" alt="{{ $title }}"
                class="rounded-2 w-100 img-fluid hover-zoom">
        </div>
        <div class="col-md-5 px-0 ps-md-5">
            <div class="px-0 card-body">
                <p class="mb-2 text-primary category-label small">{{ $category }}</p>
                <h5 class="card-title fs-1 fw-bold lh-1 font-title">{{ $title }}</h5>
                <p class="card-text text-muted">{{ $excerpt }}</p>
                <div class="d-flex flex-wrap gap-2 mb-3 align-items-center">
                    <div class="d-flex gap-2 align-items-center">
                        <img src="{{ asset('assets/images/avatar.avif') }}" alt="avatar" width="400" height="400"
                            class="rounded-circle avatar">
                        <span class="fw-medium">{{ $author }}</span>
                    </div>
                    <div>
                        <span class="text-muted small">{{ $date }}</span>
                        <span>-</span>
                        <span class="text-muted small"><i class="bi bi-clock"></i> {{ $read_time }}</span>
                    </div>
                </div>
                <a href="{{ route('web.article') }}" class="card-link">Read the full story</a>
            </div>
        </div>
    </div>
</div>
