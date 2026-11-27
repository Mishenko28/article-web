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

    {{-- contact form --}}
    <section class="container py-5">
        <div class="row gy-5">
            <div class="col-lg-7">
                <h2 class="mb-4 font-title h4">Send a message</h2>
                <form id="contactForm" action="#" method="get" novalidate>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-medium small" for="contactName">YOUR NAME</label>
                            <input type="text" class="py-2 form-control" id="contactName" name="name"
                                placeholder="Juan Dela Cruz" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-medium small" for="contactEmail">EMAIL ADDRESS</label>
                            <input type="email" class="py-2 form-control" id="contactEmail" name="email"
                                placeholder="juandelacruz@example.com" required>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-medium small" for="contactSubject">SUBJECT</label>
                            <select class="py-2 form-select" id="contactSubject" name="subject" required>
                                <option value="" selected>Choose a subject…</option>
                                <option>Ask</option>
                                <option>Question</option>
                                <option>Advertise</option>
                                <option>Something else</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-medium small" for="contactMessage">MESSAGE</label>
                            <textarea class="py-2 form-control" id="contactMessage" name="message" rows="6"
                                placeholder="Lorem ipsum, dolor sit amet consectetur adipisicing elit." required></textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="px-4 py-2 btn btn-primary">Send message</button>
                            <p class="mt-2 mb-0 text-body-secondary small">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id temporibus illo rem.
                            </p>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-5">
                <h2 class="mb-4 font-title h4">Contact Us</h2>

                <div class="d-flex gap-3 mb-3">
                    <i class="d-flex flex-shrink-0 text-primary bg-primary-subtle border-0 justify-content-center align-items-center rounded-circle contact-icon bi bi-envelope"
                        aria-hidden="true"></i>
                    <div>
                        <p class="mb-0 fw-semibold small">Email</p>
                        <div class="contact-values">
                            {!! $variables->firstWhere('section', 'email')?->content !!}
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-3 mb-3">
                    <i class="d-flex flex-shrink-0 text-primary bg-primary-subtle border-0 justify-content-center align-items-center rounded-circle contact-icon bi bi-telephone"
                        aria-hidden="true"></i>
                    <div>
                        <p class="mb-0 fw-semibold small">Telephone</p>
                        <div class="contact-values">
                            {!! $variables->firstWhere('section', 'telephone')?->content !!}
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-3 mb-4">
                    <i class="d-flex flex-shrink-0 text-primary bg-primary-subtle border-0 justify-content-center align-items-center rounded-circle contact-icon bi bi-geo-alt"
                        aria-hidden="true"></i>
                    <div>
                        <p class="mb-0 fw-semibold small">Address</p>
                        <div class="contact-values">
                            {!! $variables->firstWhere('section', 'address')?->content !!}
                        </div>
                    </div>
                </div>

                <div class="p-4 border rounded">
                    <h2 class="mb-3 h6">Follow us</h2>
                    <div class="d-flex mb-4 gap-2">
                        <a class="text-primary h3" href="{{ $variables->firstWhere('section', 'twitter')?->content }}"
                            target="_blank">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                        <a class="text-primary h3" href="{{ $variables->firstWhere('section', 'instagram')?->content }}"
                            target="_blank">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a class="text-primary h3" href="{{ $variables->firstWhere('section', 'linkedin')?->content }}"
                            target="_blank">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a class="text-primary h3" href="{{ $variables->firstWhere('section', 'facebook')?->content }}"
                            target="_blank">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </div>
                    <hr>
                    <h3 class="mb-3 h6">Office hours</h3>
                    {!! $variables->firstWhere('section', 'office_hours')?->content !!}
                </div>
            </div>
        </div>
    </section>

    {{-- faq --}}
    <section class="container py-5">
        <div class="row">
            <div class="col-lg-5">
                <p class="mb-2 text-primary fw-medium">FAQ</p>
                <h2 class="mb-3 font-title fw-bold lh-1 display-6">Answers to the things people ask us most.</h2>
                <p class="text-body-secondary">
                    Can not find what you are looking for? Send us a note using the form above, or email us directly. We
                    keep every message in a folder labeled "read soon," and we mean it.
                </p>
                <a class="btn btn-outline-primary rounded-0" href="mailto:hello@blogs.ph">Email us directly</a>
            </div>

            <div class="col-lg-7">
                @php
                    $faqs = [
                        [
                            'q' => 'How do I pitch a story?',
                            'a' =>
                                'Send a short pitch through the form above. Tell us what the story is, why it matters now, and why you are the right person to tell it. A paragraph is enough. If we are interested, we will ask for a fuller outline.',
                        ],
                        [
                            'q' => 'Do you pay contributors?',
                            'a' =>
                                'Yes. We pay for accepted work, and rates depend on length, reporting, and the format. We are happy to discuss the budget before you start writing so there are no surprises.',
                        ],
                        [
                            'q' => 'Can I republish an article?',
                            'a' =>
                                'Usually, yes. We ask that you wait a few days after publication, credit BLOGS.PH and the author, and link back to the original. Send us a note and we will confirm.',
                        ],
                        [
                            'q' => 'How do I advertise with BLOGS.PH?',
                            'a' =>
                                'We work with a small number of partners each quarter. We prefer long-term collaborations over one-off banners. Email us with a short description of your brand and what you have in mind.',
                        ],
                        [
                            'q' => 'Where are you based?',
                            'a' =>
                                'Our office is in Quezon City, but our writers are spread across the country. We meet in person once a month and on video calls more often than anyone would like.',
                        ],
                    ];
                @endphp

                <div class="accordion" id="contactFaq">
                    @foreach ($faqs as $faq)
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq{{ $loop->iteration }}"
                                    aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                    aria-controls="faq{{ $loop->iteration }}">
                                    {{ $faq['q'] }}
                                </button>
                            </h3>
                            <div id="faq{{ $loop->iteration }}"
                                class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                data-bs-parent="#contactFaq">
                                <div class="accordion-body text-body-secondary">{{ $faq['a'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

@section('page-styles')
    <style>
        .contact-icon {
            width: 44px;
            height: 44px;
        }

        .subtitle {
            max-width: 800px;
        }

        .description {
            max-width: 620px;
        }

        .contact-values>* {
            margin-bottom: 0;
        }
    </style>
@endsection
