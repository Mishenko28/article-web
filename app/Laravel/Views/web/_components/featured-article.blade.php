@php
    $category = $category ?? 'CITIES';
    $title = $title ?? 'Lorem ipsum dolor sit amet.';
    $excerpt =
        $excerpt ??
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ratione amet totam? Architecto aut sint aliquid fugit qui nihil incidunt, at, distinctio magnam rerum quasi eos veniam. Beatae molestiae in, odio soluta impedit ipsum laudantium magni quia cupiditate dignissimos!';
    $author = $author ?? 'Juan Dela Cruz';
    $date = $date ?? 'March 14, 2025';
    $read_time = $read_time ?? '8 min read';
    $image = $image ?? asset('assets/images/featured.avif');
    $url = $url ?? route('web.article');
@endphp

<div class="featured-article card border-0 px-3">
    <div class="row gap-0">
        <div class="col-md-7 overflow-hidden p-0">
            <img src="{{ $image }}" alt="{{ $title }}" class="img-fluid rounded-2 w-100 hover-zoom">
        </div>
        <div class="col-md-5 px-0 ps-md-5">
            <div class="card-body px-0">
                <p class="category-label mb-2 text-primary small">{{ $category }}</p>
                <h5 class="card-title fs-1 fw-bold lh-1 font-title">{{ $title }}</h5>
                <p class="card-text text-muted">{{ $excerpt }}</p>
                <div class="d-flex flex-wrap gap-2 align-items-center mb-3">
                    <div class="d-flex align-items-center gap-2">
                        <img src="{{ asset('assets/images/avatar.avif') }}" alt="avatar" width="400" height="400"
                            class="avatar rounded-circle">
                        <span class="fw-medium">{{ $author }}</span>
                    </div>
                    <div>
                        <span class="small text-muted">{{ $date }}</span>
                        <span>-</span>
                        <span class="small text-muted"><i class="bi bi-clock"></i> {{ $read_time }}</span>
                    </div>
                </div>
                <a href="{{ $url }}" class="card-link">Read the full story</a>
            </div>
        </div>
    </div>
</div>
