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


    {{-- featured section --}}
    <section class="container py-5">
        <div class="mb-2">
            <p class="text-primary fw-medium">FEATURED</p>
        </div>
        @include('web._components.featured-article')
    </section>

    {{-- articles section --}}
    <section class="container py-5">
        <div class="mb-2">
            <p class="text-primary fw-medium">LATEST ARTICLES</p>
        </div>
        <div class="row">
            @include('web._components.article-card')
            @include('web._components.article-card')
            @include('web._components.article-card')
        </div>
    </section>
@endsection

@section('page-styles')
    <style>
        .subtitle {
            max-width: 800px;
        }

        .description {
            max-width: 620px;
        }
    </style>
@endsection
