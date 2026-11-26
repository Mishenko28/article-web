@extends('web._layouts.main')

@section('page-content')
    {{-- featured section --}}
    <section class="container py-5">
        <div class="mb-2">
            <p class="text-primary fw-medium">FEATURED</p>
        </div>

        @include('web._components.featured-article', [
            'category' => 'CITIES',
            'title' => 'A city built for walking, one street at a time',
            'excerpt' =>
                'The best way to understand a place is still on foot. We spent a month crossing the city without a car and came back with a different map of it entirely.',
            'author' => 'Lia Mendoza',
            'date' => 'March 13, 2025',
            'read_time' => '10 min read',
        ])
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

        @php
            $articles = [
                [
                    'category' => 'CULTURE',
                    'title' => 'The last video store in the city is not giving up yet',
                    'excerpt' => 'Streaming was supposed to end it. Instead, a small room full of DVDs has become a meeting place for people who still like to browse.',
                    'author' => 'Ana Reyes',
                    'date' => 'March 11, 2025',
                    'read_time' => '6 min read',
                ],
                [
                    'category' => 'DESIGN',
                    'title' => 'A love letter to the humble sari-sari store sign',
                    'excerpt' => 'Hand-painted, slightly crooked, and impossible to ignore. The neighborhood storefront is a masterclass in visual identity.',
                    'author' => 'Maria Santos',
                    'date' => 'March 9, 2025',
                    'read_time' => '5 min read',
                ],
                [
                    'category' => 'CITIES',
                    'title' => 'How a covered court became the town square',
                    'excerpt' => 'On weekday mornings it hosts badminton. By evening it belongs to birthdays, rallies, and the occasional wedding reception.',
                    'author' => 'Lia Mendoza',
                    'date' => 'March 7, 2025',
                    'read_time' => '8 min read',
                ],
                [
                    'category' => 'FOOD',
                    'title' => 'The adobo recipe that survived three generations',
                    'excerpt' => 'Every family insists theirs is the right one. We visited a kitchen where the argument has been going on since 1962.',
                    'author' => 'Paolo Cruz',
                    'date' => 'March 5, 2025',
                    'read_time' => '9 min read',
                ],
                [
                    'category' => 'ESSAYS',
                    'title' => 'On staying, when everyone else seems to leave',
                    'excerpt' => 'A meditation on the friends who moved abroad, the ones who came back, and the quiet courage of making a life in place.',
                    'author' => 'Maria Santos',
                    'date' => 'March 3, 2025',
                    'read_time' => '12 min read',
                ],
                [
                    'category' => 'BOOKS',
                    'title' => 'Five small-press books worth clearing your weekend for',
                    'excerpt' => 'Independent publishers are having a moment. These five titles deserve a spot on your bedside table, not just your wish list.',
                    'author' => 'Ana Reyes',
                    'date' => 'March 1, 2025',
                    'read_time' => '7 min read',
                ],
                [
                    'category' => 'ARCHITECTURE',
                    'title' => 'The case for buildings that know when to be quiet',
                    'excerpt' => 'Not every structure needs to announce itself. Some of the best architecture in the city is the kind you walk past without noticing.',
                    'author' => 'Lia Mendoza',
                    'date' => 'February 27, 2025',
                    'read_time' => '8 min read',
                ],
                [
                    'category' => 'HISTORY',
                    'title' => 'The forgotten railway that once connected the coast',
                    'excerpt' => 'A few concrete sleepers and a rusted sign are all that remain of a line that carried people, produce, and gossip for sixty years.',
                    'author' => 'Paolo Cruz',
                    'date' => 'February 25, 2025',
                    'read_time' => '11 min read',
                ],
                [
                    'category' => 'CULTURE',
                    'title' => 'What karaoke teaches us about community',
                    'excerpt' => 'A rented microphone, a slightly out-of-tune speaker, and a room full of people willing to be a little ridiculous together.',
                    'author' => 'Ana Reyes',
                    'date' => 'February 23, 2025',
                    'read_time' => '6 min read',
                ],
            ];
        @endphp

        <div class="row gy-5 g-md-3 mb-5">
            @foreach ($articles as $article)
                @include('web._components.article-card', $article)
            @endforeach
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

    {{-- most read section --}}
    <section class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4">
                <p class="mb-2 text-primary fw-medium">MOST READ</p>
                <h2 class="mb-3 font-title display-6 fw-bold lh-1">The stories readers keep coming back to</h2>
                <p class="text-body-secondary">
                    A rotating list of the pieces that sparked the most replies, saves, and late-night messages. Some of
                    them are new. Some of them refuse to age.
                </p>
                <a class="btn btn-outline-primary rounded-0" href="{{ route('web.articles') }}">See the full archive</a>
            </div>

            <div class="col-lg-8">
                @php
                    $mostRead = [
                        ['category' => 'CITIES', 'title' => 'The jeepney route that became a moving classroom', 'meta' => '12 min read'],
                        ['category' => 'FOOD', 'title' => 'Why every family has a different adobo', 'meta' => '9 min read'],
                        ['category' => 'DESIGN', 'title' => 'The quiet politics of a well-designed bench', 'meta' => '7 min read'],
                        ['category' => 'CULTURE', 'title' => 'Inside the karaoke bar that never closes', 'meta' => '10 min read'],
                        ['category' => 'ESSAYS', 'title' => 'The things we keep in our childhood homes', 'meta' => '14 min read'],
                    ];
                @endphp

                <ol class="mb-0 list-unstyled">
                    @foreach ($mostRead as $item)
                        <li class="py-3 border-bottom d-flex gap-3 gap-md-4">
                            <span class="font-title fw-bold text-primary most-read-rank">0{{ $loop->iteration }}</span>
                            <div>
                                <p class="mb-1 text-primary fw-medium small">{{ $item['category'] }}</p>
                                <h3 class="mb-1 h5 fw-bold font-title">
                                    <a class="text-dark text-decoration-none most-read-link"
                                        href="{{ route('web.article') }}">{{ $item['title'] }}</a>
                                </h3>
                                <p class="mb-0 small text-muted"><i class="bi bi-clock"></i> {{ $item['meta'] }}</p>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </section>

    {{-- newsletter section --}}
    @include('web._components.newsletter', [
        'heading' => 'Never miss a good story.',
        'copy' =>
            'Join thousands of readers who get our best articles, a short editor note, and one recommended read every Friday.',
    ])
@endsection

@section('page-styles')
    <style>
        .active-categoty {
            background: var(--bs-primary);
            color: var(--bs-light) !important;
            border: none;
        }

        .most-read-rank {
            min-width: 2.5rem;
            font-size: 1.75rem;
            line-height: 1;
        }

        .most-read-link:hover {
            color: var(--bs-primary) !important;
        }
    </style>
@endsection
