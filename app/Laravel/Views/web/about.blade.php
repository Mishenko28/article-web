@extends('web._layouts.main')

@section('page-content')
    <section class="container py-5 text-center">
        <div class="mt-5">
            {!! $variables->firstWhere('section', 'title')?->content !!}
        </div>
        <div class="m-auto subtitle">
            {!! $variables->firstWhere('section', 'subtitle')?->content !!}
        </div>
        <div class="py-3 m-auto description">
            {!! $variables->firstWhere('section', 'description')?->content !!}
        </div>
        <a class="btn btn-lg btn-outline-primary rounded-0" href="{{ route('web.articles') }}">Start reading</a>
        <div class="pt-5">
            <img src="{{ asset('assets/images/intro_about.avif') }}" alt="hero image" width="1600" height="900"
                class="rounded-2 w-100 img-fluid">
        </div>
    </section>

    {{-- mission & vision section --}}
    <section class="container py-5">
        <div class="row gy-5">
            <div class="col-lg-6">
                <h2 class="mb-3 font-title h3">Our mission</h2>
                <div class="mission-vision">
                    {!! $variables->firstWhere('section', 'mission')?->content !!}
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="mb-3 font-title h3">Our vision</h2>
                <div class="mission-vision">
                    {!! $variables->firstWhere('section', 'vision')?->content !!}
                </div>
            </div>
        </div>
    </section>

    {{-- statistics --}}
    <section class="container py-5">
        <div class="row g-4 py-5 text-center border-top border-bottom">
            <div class="col-6 col-lg-3">
                <div>
                    {!! $variables->firstWhere('section', 'article_published')?->content !!}
                </div>
                <span class="text-uppercase fw-bold text-muted stat-label small">
                    Article Published
                </span>
            </div>
            <div class="col-6 col-lg-3">
                <div>
                    {!! $variables->firstWhere('section', 'registered_users')?->content !!}
                </div>
                <span class="text-uppercase fw-bold text-muted stat-label small">
                    Registered Users
                </span>
            </div>
            <div class="col-6 col-lg-3">
                <div>
                    {!! $variables->firstWhere('section', 'letter_subscribers')?->content !!}
                </div>
                <span class="text-uppercase fw-bold text-muted stat-label small">
                    Letter Subscribers
                </span>
            </div>
            <div class="col-6 col-lg-3">
                <div>
                    {!! $variables->firstWhere('section', 'founded_in')?->content !!}
                </div>
                <span class="text-uppercase fw-bold text-muted stat-label small">
                    Founded In
                </span>
            </div>
        </div>
    </section>
@endsection

@section('page-styles')
    <style>
        .mission-vision {
            text-align: justify;
        }

        .stat-label {
            letter-spacing: 0.16em
        }

        .subtitle {
            max-width: 800px;
        }

        .description {
            max-width: 620px;
        }
    </style>
@endsection
