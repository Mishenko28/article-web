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
        @include('web._components.featured-article', [
            'category' => 'CITIES',
            'title' => 'The slow revival of the neighborhood market',
            'excerpt' =>
                'For decades the public market was the beating heart of the district. Then the malls arrived, the stalls emptied, and the silence settled in. A new generation of vendors is betting that the old ways still have something to teach us.',
            'author' => 'Maria Santos',
            'date' => 'March 14, 2025',
            'read_time' => '8 min read',
        ])
    </section>

    {{-- articles section --}}
    <section class="container py-5">
        <div class="d-flex flex-wrap mb-2 gap-2 justify-content-between align-items-end">
            <div>
                <p class="mb-2 text-primary fw-medium">LATEST ARTICLES</p>
                <h2 class="mb-0 font-title fw-bold lh-1 display-6">Fresh from the desk</h2>
            </div>
            <a class="p-0 btn btn-link" href="{{ route('web.articles') }}">View all articles</a>
        </div>

        @php
            $latestArticles = [
                [
                    'category' => 'DESIGN',
                    'title' => 'Why the best signs in the city are the ones you never notice',
                    'excerpt' =>
                        'Good wayfinding does not shout. It guides you quietly, one small decision at a time, until you forget you were ever lost.',
                    'author' => 'Ana Reyes',
                    'date' => 'March 12, 2025',
                    'read_time' => '6 min read',
                ],
                [
                    'category' => 'FOOD',
                    'title' => 'A case for eating lunch like you mean it',
                    'excerpt' =>
                        'Somewhere between the desk salad and the sad sandwich, we forgot that lunch used to be a proper pause. Here is how to take it back.',
                    'author' => 'Paolo Cruz',
                    'date' => 'March 10, 2025',
                    'read_time' => '5 min read',
                ],
                [
                    'category' => 'ARCHITECTURE',
                    'title' => 'The small buildings that hold a neighborhood together',
                    'excerpt' =>
                        'Not every landmark is grand. The corner bakery, the covered court, and the chapel by the river do more for a district than any tower.',
                    'author' => 'Lia Mendoza',
                    'date' => 'March 8, 2025',
                    'read_time' => '7 min read',
                ],
            ];
        @endphp

        <div class="row gy-5 g-md-3 mt-4">
            @foreach ($latestArticles as $article)
                @include('web._components.article-card', $article)
            @endforeach
        </div>
    </section>

    {{-- trending section --}}
    <section class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <p class="mb-2 text-primary fw-medium">TRENDING NOW</p>
                <h2 class="mb-3 font-title fw-bold lh-1 display-6">What everyone is reading this week</h2>
                <p class="text-body-secondary">
                    A rotating look at the stories readers are opening, saving, and sending to their group chats. Updated
                    every Monday morning.
                </p>
                <a class="btn btn-outline-primary rounded-0" href="{{ route('web.articles') }}">Browse all articles</a>
            </div>

            <div class="col-lg-8">
                @php
                    $trending = [
                        [
                            'category' => 'CULTURE',
                            'title' => 'The playlist that shaped a generation of Manila DJs',
                            'meta' => '12 min read',
                        ],
                        [
                            'category' => 'CITIES',
                            'title' => 'What a jeepney route can tell you about a city',
                            'meta' => '9 min read',
                        ],
                        [
                            'category' => 'DESIGN',
                            'title' => 'The quiet politics of a well-designed bench',
                            'meta' => '7 min read',
                        ],
                        [
                            'category' => 'FOOD',
                            'title' => 'Inside the family kitchen that never closes',
                            'meta' => '11 min read',
                        ],
                        [
                            'category' => 'ESSAYS',
                            'title' => 'On leaving, and the things we pack by accident',
                            'meta' => '14 min read',
                        ],
                    ];
                @endphp

                <ol class="mb-0 list-unstyled">
                    @foreach ($trending as $item)
                        <li class="d-flex py-3 gap-3 gap-md-4 border-bottom">
                            <span class="font-title fw-bold text-primary fs-3 trending-rank">0{{ $loop->iteration }}</span>
                            <div>
                                <p class="mb-1 text-primary fw-medium small">{{ $item['category'] }}</p>
                                <h3 class="mb-1 fw-bold font-title h5">
                                    <a class="text-dark text-decoration-none trending-link"
                                        href="{{ route('web.article') }}">{{ $item['title'] }}</a>
                                </h3>
                                <p class="mb-0 text-muted small"><i class="bi bi-clock"></i> {{ $item['meta'] }}</p>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </section>

    {{-- topics section --}}
    <section class="py-5 bg-primary-subtle">
        <div class="container py-4">
            <div class="row g-3 mb-4 align-items-end">
                <div class="col-lg-8">
                    <p class="mb-2 text-primary fw-medium">EXPLORE TOPICS</p>
                    <h2 class="mb-0 font-title fw-bold lh-1 display-6">Find your corner of the magazine</h2>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="p-0 btn btn-link" href="{{ route('web.articles') }}">See every story</a>
                </div>
            </div>

            @php
                $topics = [
                    ['name' => 'Culture', 'icon' => 'bi-palette', 'count' => '128 stories'],
                    ['name' => 'Design', 'icon' => 'bi-pen', 'count' => '96 stories'],
                    ['name' => 'Cities', 'icon' => 'bi-buildings', 'count' => '142 stories'],
                    ['name' => 'Food', 'icon' => 'bi-cup-hot', 'count' => '84 stories'],
                    ['name' => 'Essays', 'icon' => 'bi-journal-text', 'count' => '57 stories'],
                    ['name' => 'Books', 'icon' => 'bi-book', 'count' => '63 stories'],
                    ['name' => 'Architecture', 'icon' => 'bi-bank', 'count' => '71 stories'],
                    ['name' => 'History', 'icon' => 'bi-hourglass-split', 'count' => '48 stories'],
                ];
            @endphp

            <div class="row g-3">
                @foreach ($topics as $topic)
                    <div class="col-6 col-md-3">
                        <a class="d-block p-4 h-100 text-decoration-none bg-white border rounded-2 topic-card"
                            href="{{ route('web.articles') }}">
                            <i class="text-primary h4 bi {{ $topic['icon'] }}" aria-hidden="true"></i>
                            <h3 class="mt-3 mb-1 fw-bold font-title text-dark h5">{{ $topic['name'] }}</h3>
                            <p class="mb-0 text-muted small">{{ $topic['count'] }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- newsletter section --}}
    @include('web._components.newsletter', [
        'eyebrow' => 'The weekly letter',
        'heading' => 'Good stories, once a week.',
        'copy' =>
            'One thoughtful email every Friday: the best of what we published, a few links worth your time, and a note from the editor.',
    ])
@endsection

@section('page-styles')
    <style>
        .subtitle {
            max-width: 800px;
        }

        .description {
            max-width: 620px;
        }

        .trending-rank {
            min-width: 2.5rem;
            line-height: 1;
        }

        .trending-link:hover {
            color: var(--bs-primary) !important;
        }

        .topic-card {
            transition: transform 0.2s ease, border-color 0.2s ease;
        }

        .topic-card:hover {
            border-color: var(--bs-primary) !important;
            transform: translateY(-3px);
        }
    </style>
@endsection
