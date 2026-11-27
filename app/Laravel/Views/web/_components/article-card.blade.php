<div class="col-md-4 card border-0 article-card">
    <div class="overflow-hidden">
        <img src="{{ asset('assets/images/articles.avif') }}" class="card-img-top hover-zoom" alt="{{ $title }}">
    </div>
    <div class="d-flex flex-column px-0 card-body">
        <p class="mb-2 text-primary small">{{ $category }}</p>
        <h5 class="card-title fw-bold font-title">{{ $title }}</h5>
        <p class="card-text text-muted h-100 overflow-hidden article-excerpt">{{ $excerpt }}</p>
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
        <a href="{{ route('web.article') }}" class="btn btn-link me-auto">Read more</a>
    </div>
</div>
