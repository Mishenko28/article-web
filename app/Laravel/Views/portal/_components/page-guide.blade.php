<div class="d-flex gap-2 mb-3 alert alert-primary border-0 bg-primary-subtle align-items-start" role="note">
    <i class="fs-5 text-primary bi bi-info-circle-fill" aria-hidden="true"></i>
    <div class="flex-grow-1">
        <p class="mb-1 fw-semibold">{{ $guide_title }}</p>
        <p class="mb-2 small">{{ $guide_text }}</p>

        @if (!empty($guide_link))
            <a href="{{ $guide_link }}" class="fw-medium small">
                {{ $guide_link_label ?? 'Learn more' }}
                <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
            </a>
        @endif
    </div>
</div>
