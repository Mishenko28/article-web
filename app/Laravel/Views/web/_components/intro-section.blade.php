<section class="container py-5 text-center intro-section">
    <p class="mt-5 text-primary fw-medium text-uppercase intro-title h6">
        {{ $title }}</p>
    <h1 class="m-auto lh-1 text-center fw-bold font-title subtitle display-3">
        {{ $subtitle }}
    </h1>
    <p class="py-3 m-auto text-muted subtitle-2">
        {{ $description }}
    </p>
    <a class="btn btn-lg btn-outline-primary rounded-0" href="{{ route('web.articles') }}">{{ $button_text }}</a>
    @if (isset($image_src))
        <div class="pt-5">
            <img src="{{ $image_src }}" alt="hero image" width="1600" height="900"
                class="rounded-2 w-100 img-fluid">
        </div>
    @endif
</section>
