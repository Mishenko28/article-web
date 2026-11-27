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

    {{-- our story --}}
    <section class="container py-5">
        <div class="row">
            <div class="col-lg-5">
                <p class="mb-2 text-primary fw-medium">OUR STORY</p>
                <h2 class="mb-3 font-title fw-bold lh-1 display-6">From a shared document to a weekly habit.</h2>
                <p class="lh-lg text-body-secondary">
                    BLOGS.PH started the way a lot of good things do: three friends, one shared document, and a stubborn
                    belief that the stories we cared about were not being told. The first issue went out to forty-two
                    people, most of them relatives.
                </p>
                <p class="mb-0 lh-lg text-body-secondary">
                    Four years later the magazine is still small by design. We publish fewer stories than we could, edit
                    them more than we probably should, and measure success by the number of readers who finish a piece and
                    send it to someone they love.
                </p>
            </div>

            <div class="col-lg-7">
                @php
                    $milestones = [
                        [
                            'year' => '2022',
                            'title' => 'A shared document',
                            'text' =>
                                'Three friends start a weekly email about the places they love. It has forty-two subscribers, most of them relatives.',
                        ],
                        [
                            'year' => '2023',
                            'title' => 'The first newsroom',
                            'text' =>
                                'A tiny office above a laundromat becomes home base. The team publishes its hundredth story and celebrates with instant noodles.',
                        ],
                        [
                            'year' => '2024',
                            'title' => 'Going regional',
                            'text' =>
                                'Writers from six cities join the roster. The weekly letter crosses ten thousand readers and the inbox becomes a community.',
                        ],
                        [
                            'year' => '2025',
                            'title' => 'A wider lens',
                            'text' =>
                                'Photography and long-form essays become permanent sections. The archive passes two hundred stories from across the country.',
                        ],
                        [
                            'year' => '2026',
                            'title' => 'Still curious',
                            'text' =>
                                'The magazine turns four, launches a mentorship program for young writers, and keeps the same rule: the story comes first.',
                        ],
                    ];
                @endphp

                <div class="pt-2">
                    @foreach ($milestones as $milestone)
                        <div class="d-flex gap-3 gap-md-4">
                            <div class="pt-1 fw-bold text-primary font-title fs-5 timeline-year">{{ $milestone['year'] }}
                            </div>
                            <div class="flex-grow-1 pb-4 ps-3 ps-md-4 border-start">
                                <h3 class="mb-1 fw-bold h6">{{ $milestone['title'] }}</h3>
                                <p class="mb-0 text-body-secondary small">{{ $milestone['text'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- values --}}
    <section class="py-5 border-top border-bottom bg-white">
        <div class="container py-4">
            <div class="mb-5 mx-auto text-center values-intro">
                <p class="mb-2 text-primary fw-medium">WHAT WE STAND FOR</p>
                <h2 class="mb-0 font-title fw-bold lh-1 display-6">Four things we refuse to compromise on</h2>
            </div>

            @php
                $values = [
                    [
                        'icon' => 'bi-search',
                        'title' => 'Curiosity first',
                        'text' =>
                            'We ask one more question than we think we need to. The best stories usually live just past the obvious one.',
                    ],
                    [
                        'icon' => 'bi-people',
                        'title' => 'People over pageviews',
                        'text' =>
                            'We measure success by whether a reader finishes a story and tells someone about it, not by how fast they clicked.',
                    ],
                    [
                        'icon' => 'bi-geo-alt',
                        'title' => 'Local, always',
                        'text' =>
                            'Every story begins somewhere specific. We name the street, the store, and the person who knows the history.',
                    ],
                    [
                        'icon' => 'bi-unlock',
                        'title' => 'Open by default',
                        'text' =>
                            'Our process is not a secret. We share drafts, corrections, and the occasional dead end with our readers.',
                    ],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($values as $value)
                    <div class="col-md-6 col-lg-3">
                        <span
                            class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary-subtle text-primary fs-5 value-icon">
                            <i class="bi {{ $value['icon'] }}" aria-hidden="true"></i>
                        </span>
                        <h3 class="mt-3 mb-2 fw-bold font-title h5">{{ $value['title'] }}</h3>
                        <p class="mb-0 text-body-secondary small">{{ $value['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- write for us --}}
    <section class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="p-4 p-md-5 text-center rounded-2 bg-primary text-light">
                    <p class="mb-2 fw-medium text-uppercase small cta-eyebrow">WRITE FOR US</p>
                    <h2 class="mb-3 font-title fw-bold lh-1 display-6">Have a story worth telling?</h2>
                    <p class="mb-4 mx-auto cta-copy">
                        We work with new and experienced writers alike. Send us a short pitch, a rough draft, or just a
                        question you cannot stop thinking about. We read every message.
                    </p>
                    <a class="btn btn-lg btn-light rounded-0" href="{{ route('web.contact') }}">Get in touch</a>
                </div>
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

        .timeline-year {
            min-width: 4rem;
        }

        .value-icon {
            width: 52px;
            height: 52px;
        }

        .values-intro {
            max-width: 640px;
        }

        .values-intro h2 {
            text-wrap: balance;
        }

        .cta-eyebrow {
            letter-spacing: 0.16em;
        }

        .cta-copy {
            max-width: 560px;
        }
    </style>
@endsection
