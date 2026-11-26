@extends('web._layouts.main')

@section('page-content')
    {{-- featured section --}}
    <section class="container py-5">
        <div class="mb-2">
            <p class="text-primary fw-medium">FEATURED</p>
        </div>

        @include('web._components.featured-article')
    </section>

    {{-- articles section --}}
    <section class="container py-5">
        <div class="row gy-3 mb-4 align-items-end justify-content-between">
            {{-- categories --}}
            <div class="col-lg-8">
                <p class="text-primary fw-medium">CATEGORIES</p>
                <div class="d-flex flex-wrap gap-2" aria-label="Filter articles by category">
                    <a class="py-2 px-3 fw-bold text-uppercase text-muted border rounded-pill text-decoration-none small active-categoty"
                        aria-current="true" href="#">All</a>
                    <a class="py-2 px-3 fw-bold text-uppercase text-muted border rounded-pill text-decoration-none small"
                        href="#">Culture</a>
                    <a class="py-2 px-3 fw-bold text-uppercase text-muted border rounded-pill text-decoration-none small"
                        href="#">Design</a>
                    <a class="py-2 px-3 fw-bold text-uppercase text-muted border rounded-pill text-decoration-none small"
                        href="#">Cities</a>
                    <a class="py-2 px-3 fw-bold text-uppercase text-muted border rounded-pill text-decoration-none small"
                        href="#">Food</a>
                    <a class="py-2 px-3 fw-bold text-uppercase text-muted border rounded-pill text-decoration-none small"
                        href="#">Essays</a>
                    <a class="py-2 px-3 fw-bold text-uppercase text-muted border rounded-pill text-decoration-none small"
                        href="#">Books</a>
                    <a class="py-2 px-3 fw-bold text-uppercase text-muted border rounded-pill text-decoration-none small"
                        href="#">Architecture</a>
                    <a class="py-2 px-3 fw-bold text-uppercase text-muted border rounded-pill text-decoration-none small"
                        href="#">History</a>
                </div>
            </div>

            {{-- search --}}
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="py-2 input-group-text" aria-hidden="true"><i class="bi bi-search"></i></span>
                    <input type="search" class="form-control border-start-0" id="articleSearch" name="q"
                        placeholder="Search stories, authors, topics…" aria-label="Search articles">
                </div>
            </div>
        </div>

        <hr class="mb-4">

        <div class="row gy-5 g-md-3 mb-5">
            @include('web._components.article-card')
            @include('web._components.article-card')
            @include('web._components.article-card')
        </div>

        <div class="row gy-5 g-md-3 mb-5">
            @include('web._components.article-card')
            @include('web._components.article-card')
            @include('web._components.article-card')
        </div>

        <div class="row gy-5 g-md-3 mb-5">
            @include('web._components.article-card')
            @include('web._components.article-card')
            @include('web._components.article-card')
        </div>

        <nav class="d-flex justify-content-center">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#"><i class="bi bi-arrow-left"></i></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="bi bi-arrow-right"></i></a></li>
            </ul>
        </nav>
    </section>
@endsection


@section('page-styles')
    <style>
        .active-categoty {
            background: var(--bs-primary);
            color: var(--bs-light) !important;
            border: none;
        }
    </style>
@endsection
