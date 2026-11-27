@extends('web._layouts.main')

@section('page-content')
    {{-- intro section --}}
    @include('web._components.intro-section', [
        'title' => 'Contact Blogs.ph',
        'subtitle' => 'Questions, pitches, or just a hello we read everything.',
        'description' =>
            'Whether you have a story idea, a correction, or a question about advertising, the fastest way to reach us is the form below. A real person will get back to you, usually within two business days.',
        'button_text' => 'Read the magazine',
    ])

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
                                <option>Story pitch</option>
                                <option>Question</option>
                                <option>Advertise with us</option>
                                <option>Report a correction</option>
                                <option>Something else</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-medium small" for="contactMessage">MESSAGE</label>
                            <textarea class="py-2 form-control" id="contactMessage" name="message" rows="6"
                                placeholder="Tell us a little about what you have in mind. Links and drafts are welcome." required></textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="px-4 py-2 btn btn-primary">Send message</button>
                            <p class="mt-2 mb-0 text-body-secondary small">
                                By sending a message you agree to our privacy policy. We never share your details with
                                third parties.
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
                        <a class="mb-0 lh-lg small" href="mailto:hello@blogs.ph">hello@blogs.ph</a>
                    </div>
                </div>

                <div class="d-flex gap-3 mb-3">
                    <i class="d-flex flex-shrink-0 text-primary bg-primary-subtle border-0 justify-content-center align-items-center rounded-circle contact-icon bi bi-telephone"
                        aria-hidden="true"></i>
                    <div>
                        <p class="mb-0 fw-semibold small">Telephone</p>
                        <p class="mb-0 text-body-secondary small">+63 (987) 654 3210</p>
                    </div>
                </div>

                <div class="d-flex gap-3 mb-4">
                    <i class="d-flex flex-shrink-0 text-primary bg-primary-subtle border-0 justify-content-center align-items-center rounded-circle contact-icon bi bi-geo-alt"
                        aria-hidden="true"></i>
                    <div>
                        <p class="mb-0 fw-semibold small">Address</p>
                        <p class="mb-0 lh-lg text-body-secondary small">12 Mabini Street, Barangay San Roque,
                            Quezon City, Philippines</p>
                    </div>
                </div>

                <div class="p-4 border rounded">
                    <h2 class="mb-3 h6">Follow us</h2>
                    <div class="d-flex mb-4 gap-2">
                        <a class="text-primary h3" href="#" aria-label="BLOGS.PH on X">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                        <a class="text-primary h3" href="#" aria-label="BLOGS.PH on Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a class="text-primary h3" href="#" aria-label="BLOGS.PH on LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a class="text-primary h3" href="#" aria-label="BLOGS.PH on Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </div>
                    <hr>
                    <h3 class="mb-3 h6">Office hours</h3>
                    <ul class="list-unstyled small">
                        <li class="d-flex mb-1 justify-content-between">
                            <span>Monday – Friday</span>
                            <span>8:00 AM – 5:00 PM</span>
                        </li>
                        <li class="d-flex mb-1 justify-content-between">
                            <span>Saturday</span>
                            <span>Closed</span>
                        </li>
                        <li class="d-flex mb-1 justify-content-between">
                            <span>Sunday</span>
                            <span>Closed</span>
                        </li>
                    </ul>
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

        .visit-eyebrow {
            letter-spacing: 0.16em;
        }

        .map-placeholder {
            min-height: 320px;
            background-color: var(--bs-light);
            background-image: radial-gradient(var(--bs-secondary-bg) 1px, transparent 1px);
            background-size: 18px 18px;
        }
    </style>
@endsection
