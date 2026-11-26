@php
    $category = $category ?? 'CULTURE';
    $title = $title ?? 'Lorem ipsum dolor sit amet.';
    $excerpt =
        $excerpt ??
        'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe repudiandae modi hic architecto culpa! Nemo et ullam illo ipsam cupiditate officia atque id doloremque.';
    $author = $author ?? 'Juan Dela Cruz';
    $date = $date ?? 'March 14, 2025';
    $read_time = $read_time ?? '8 min read';
    $image = $image ?? asset('assets/images/articles.avif');
    $url = $url ?? route('web.article');
@endphp

<div class="article-card card col-md-4 border-0">
    <div class="overflow-hidden">
        <img src="{{ $image }}" class="card-img-top hover-zoom" alt="{{ $title }}">
    </div>
    <div class="card-body px-0">
        <p class="mb-2 text-primary small">{{ $category }}</p>
        <h5 class="card-title fw-bold font-title">{{ $title }}</h5>
        <p class="card-text text-muted article-excerpt">{{ $excerpt }}</p>
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
        <a href="{{ $url }}" class="btn btn-link p-0">Read more</a>
    </div>
</div>
