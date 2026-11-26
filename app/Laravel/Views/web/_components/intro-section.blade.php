@php
    $subtitle = $subtitle ?? 'Lorem ipsum dolor sit amet consectetur.';
    $description =
        $description ??
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore similique, nostrum repudiandae impedit iste adipisci veniam deleniti amet modi! Veritatis repudiandae, maiores nihil voluptatem dignissimos provident itaque temporibus iste debitis?';
    $button_text = $button_text ?? 'Start reading';
    $button_url = $button_url ?? route('web.articles');
@endphp

<section class="intro-section container text-center py-5">
    <p class="intro-title text-primary fw-medium h6 mt-5 text-uppercase">
        {{ $title }}</p>
    <h1 class="subtitle lh-1 text-center m-auto fw-bold font-title display-3">
        {{ $subtitle }}
    </h1>
    <p class="subtitle-2 text-muted py-3 m-auto">
        {{ $description }}
    </p>
    <a class="btn btn-lg btn-outline-primary rounded-0" href="{{ $button_url }}">{{ $button_text }}</a>
    @if (isset($image_src))
        <div class="pt-5">
            <img src="{{ $image_src }}" alt="hero image" width="1600" height="900"
                class="img-fluid rounded-2 w-100">
        </div>
    @endif
</section>
