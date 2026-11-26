@extends('web._layouts.main')

@section('page-content')
    {{-- intro section --}}
    @include('web._components.intro-section', [
        'title' => 'The Blogs.ph Journal',
        'subtitle' => 'Stories about the cities we live in, the things we make, and the ideas that move us.',
        'description' =>
            'An independent magazine covering culture, design, food, architecture, and the quiet corners of everyday life. New stories every week, written by people who care about the details.',
        'button_text' => 'Start reading',
        'image_src' => asset('assets/images/intro_home.jpg'),
    ])

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

    {{-- latest articles section --}}
    <section class="container py-5">
        <div class="mb-2 d-flex flex-wrap gap-2 justify-content-between align-items-end">
            <div>
                <p class="mb-2 text-primary fw-medium">LATEST ARTICLES</p>
                <h2 class="mb-0 font-title display-6 fw-bold lh-1">Fresh from the desk</h2>
            </div>
            <a class="btn btn-link p-0" href="{{ route('web.articles') }}">View all articles</a>
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

        <div class="mt-4 row gy-5 g-md-3">
            @foreach ($latestArticles as $article)
                @include('web._components.article-card', $article)
            @endforeach
        </div>
    </section>

    {{-- trending section --}}
    <section class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4">
                <p class="mb-2 text-primary fw-medium">TRENDING NOW</p>
                <h2 class="mb-3 font-title display-6 fw-bold lh-1">What everyone is reading this week</h2>
                <p class="text-body-secondary">
                    A rotating look at the stories readers are opening, saving, and sending to their group chats. Updated
                    every Monday morning.
                </p>
                <a class="btn btn-outline-primary rounded-0" href="{{ route('web.articles') }}">Browse all articles</a>
            </div>

            <div class="col-lg-8">
                @php
                    $trending = [
                        ['category' => 'CULTURE', 'title' => 'The playlist that shaped a generation of Manila DJs', 'meta' => '12 min read'],
                        ['category' => 'CITIES', 'title' => 'What a jeepney route can tell you about a city', 'meta' => '9 min read'],
                        ['category' => 'DESIGN', 'title' => 'The quiet politics of a well-designed bench', 'meta' => '7 min read'],
                        ['category' => 'FOOD', 'title' => 'Inside the family kitchen that never closes', 'meta' => '11 min read'],
                        ['category' => 'ESSAYS', 'title' => 'On leaving, and the things we pack by accident', 'meta' => '14 min read'],
                    ];
                @endphp

                <ol class="mb-0 list-unstyled">
                    @foreach ($trending as $item)
                        <li class="py-3 border-bottom d-flex gap-3 gap-md-4">
                            <span class="font-title fw-bold text-primary trending-rank">0{{ $loop->iteration }}</span>
                            <div>
                                <p class="mb-1 text-primary fw-medium small">{{ $item['category'] }}</p>
                                <h3 class="mb-1 h5 fw-bold font-title">
                                    <a class="text-dark text-decoration-none trending-link"
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

    {{-- topics section --}}
    <section class="py-5 bg-primary-subtle">
        <div class="container py-4">
            <div class="mb-4 row g-3 align-items-end">
                <div class="col-lg-8">
                    <p class="mb-2 text-primary fw-medium">EXPLORE TOPICS</p>
                    <h2 class="mb-0 font-title display-6 fw-bold lh-1">Find your corner of the magazine</h2>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="btn btn-link p-0" href="{{ route('web.articles') }}">See every story</a>
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
                        <a class="h-100 p-4 text-decoration-none bg-white border rounded-2 d-block topic-card"
                            href="{{ route('web.articles') }}">
                            <i class="h4 text-primary bi {{ $topic['icon'] }}" aria-hidden="true"></i>
                            <h3 class="mt-3 mb-1 h5 fw-bold font-title text-dark">{{ $topic['name'] }}</h3>
                            <p class="mb-0 small text-muted">{{ $topic['count'] }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- newsletter section --}}
    @include('web._components.newsletter')
@endsection

@section('page-styles')
    <style>
        .trending-rank {
            min-width: 2.5rem;
            font-size: 1.75rem;
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
