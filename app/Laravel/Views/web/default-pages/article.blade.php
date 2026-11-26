@extends('web._layouts.main')

@section('page-content')
    <article class="container pt-5">
        <header class="d-flex flex-column align-items-center text-center mx-auto">
            <p class="category-label mb-2 text-primary small">CITIES</p>
            <h5 class="title fs-1 fw-bold lh-1 mb-4">
                The corner store that remembers everything
            </h5>
            <div class="d-flex flex-column justify-content-center align-items-center gap-2">
                <div class="d-flex flex-wrap gap-2 align-items-center justify-content-center mb-3">
                    <div class="d-flex align-items-center gap-2">
                        <img src="{{ asset('assets/images/avatar.avif') }}" alt="avatar" width="400" height="400"
                            class="avatar-image rounded-circle">
                        <span class="fw-medium">Maria Santos</span>
                    </div>
                    <div>
                        <span class="small text-muted">March 14, 2025</span>
                        <span>-</span>
                        <span class="small text-muted"><i class="bi bi-clock"></i> 8 min read</span>
                    </div>
                </div>
                <div class="d-flex gap-2">
                    <a class="share-icon h6 m-0 d-flex align-items-center justify-content-center h3 text-primary border rounded-circle"
                        href="#" aria-label="Share on X">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                    <a class="share-icon h6 m-0 d-flex align-items-center justify-content-center h3 text-primary border rounded-circle"
                        href="#" aria-label="Share on Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a class="share-icon h6 m-0 d-flex align-items-center justify-content-center h3 text-primary border rounded-circle"
                        href="#" aria-label="Share on Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a class="share-icon h6 m-0 d-flex align-items-center justify-content-center h3 text-primary border rounded-circle"
                        href="#" aria-label="Copy link">
                        <i class="bi bi-link-45deg"></i>
                    </a>
                </div>
            </div>
        </header>

        {{-- featured image --}}
        <div class="pt-5">
            <img src="{{ asset('assets/images/featured.avif') }}" alt="hero image" width="1600" height="900"
                class="img-fluid rounded-2 w-100">
        </div>
    </article>

    {{-- article body --}}
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="d-flex flex-column gap-3">
                    <p class="content lead">
                        The first thing you notice about Aling Nena's store is the smell: coffee, old paper, and the faint
                        sweetness of candies that have been sitting in the same glass jar for years. The second is the wall
                        of photographs. Every inch of it is covered, from the floor to the ceiling, with faces that have
                        been coming through the same door since 1978.
                    </p>

                    <p class="content">
                        The store is not much bigger than a bedroom. There is a counter, a refrigerator that hums a little
                        too loudly, and a narrow aisle you have to turn sideways to walk through. But ask anyone on the
                        street where to find something, and they will point you here. Not because it has everything, but
                        because Aling Nena remembers who bought what, and when, and why.
                    </p>

                    <h2 class="mt-4 mb-0 h3 fw-bold font-title">A ledger of small things</h2>

                    <p class="content">
                        Behind the counter, underneath a stack of receipts, there is a notebook that functions as the
                        store's unofficial history. It is not a ledger in any formal sense. It is a record of favors: who
                        borrowed a cup of rice in 1998, whose daughter needed a notebook on the first day of school, which
                        neighbor paid in installments after a bad month. None of it was ever meant to be paid back on a
                        schedule.
                    </p>

                    <blockquote class="pull-quote my-3">
                        <p class="mb-0 fst-italic">
                            "Cities are not made of monuments. They are made of the people who remember where everything
                            used to be."
                        </p>
                    </blockquote>

                    <p class="content">
                        That kind of memory is easy to overlook in a city that is always building upward. We tend to
                        measure a place by what it adds: a new tower, a new bridge, a new mall with a cinema and a parking
                        garage. But there is another measure, quieter and harder to count, that has to do with how many
                        people can walk into a room and be recognized without saying their name.
                    </p>

                    <figure class="my-3">
                        <img src="{{ asset('assets/images/articles.avif') }}" alt="The storefront on a Tuesday morning"
                            class="img-fluid rounded-2 w-100">
                        <figcaption class="mt-2 small text-muted">
                            The storefront on a Tuesday morning, before the regulars arrive. Photo by Lia Mendoza.
                        </figcaption>
                    </figure>

                    <h2 class="mt-4 mb-0 h3 fw-bold font-title">The new regulars</h2>

                    <p class="content">
                        In the last two years, a different kind of customer has started showing up. They are younger, they
                        carry laptops, and they order the same thing every time: a bottle of soda and a pack of crackers,
                        which they eat slowly while pretending to work. Aling Nena does not mind. She has started keeping an
                        extension cord behind the counter, just in case.
                    </p>

                    <p class="content">
                        The new regulars bring something the old ones never had to: a reason to explain the store to
                        people who have never lived without a convenience store on every corner. They take photos of the
                        shelves, ask about the photographs on the wall, and sometimes leave with a story instead of a
                        receipt. It is a small exchange, but it keeps the place alive in a way that a loyalty program never
                        could.
                    </p>

                    <h2 class="mt-4 mb-0 h3 fw-bold font-title">What the next chapter looks like</h2>

                    <p class="content">
                        Aling Nena is seventy-three. Her son has offered to renovate the store, to put in better lighting
                        and a proper cash register and maybe a small coffee counter by the window. She has said no three
                        times. Not because she is against change, she says, but because she is not sure the store would
                        survive it. The cracked tiles and the handwritten price tags are not obstacles. They are the
                        point.
                    </p>

                    <p class="content">
                        For now, the door stays open from six in the morning until nine at night. The photographs stay on
                        the wall. The notebook stays under the receipts. And the regulars keep coming, one small purchase
                        at a time, keeping a piece of the city exactly where it is.
                    </p>

                    <div class="pt-2 d-flex flex-wrap gap-2">
                        @foreach (['Cities', 'Memory', 'Small business', 'Culture'] as $tag)
                            <a class="py-2 px-3 fw-medium text-uppercase text-muted border rounded-pill text-decoration-none small"
                                href="{{ route('web.articles') }}">{{ $tag }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- author bio --}}
    <section class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="p-4 p-md-5 d-flex flex-column flex-sm-row gap-4 align-items-start bg-white border rounded-2">
                    <img src="{{ asset('assets/images/avatar.avif') }}" alt="Maria Santos" width="400" height="400"
                        class="rounded-circle author-avatar">
                    <div>
                        <p class="mb-1 text-primary fw-medium text-uppercase small">Written by</p>
                        <h2 class="mb-2 h4 fw-bold font-title">Maria Santos</h2>
                        <p class="mb-3 text-body-secondary">
                            Maria is the editor-in-chief of BLOGS.PH. She spent a decade covering city halls and wet
                            markets before deciding that the best stories were usually one street away from the press
                            conference. She still keeps a notebook in every bag.
                        </p>
                        <div class="d-flex gap-2">
                            <a class="text-primary h5" href="#" aria-label="Maria on X"><i class="bi bi-twitter-x"></i></a>
                            <a class="text-primary h5" href="#" aria-label="Maria on Instagram"><i class="bi bi-instagram"></i></a>
                            <a class="text-primary h5" href="#" aria-label="Maria on LinkedIn"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- previous and next --}}
    <section class="container pb-5">
        <div class="row g-3">
            <div class="col-md-6">
                <a class="p-4 h-100 bg-white border rounded-2 d-block text-decoration-none prev-next-link"
                    href="{{ route('web.article') }}">
                    <span class="small text-muted"><i class="bi bi-arrow-left"></i> Previous story</span>
                    <h3 class="mt-2 mb-0 h5 fw-bold font-title text-dark">The last tailor on the street</h3>
                </a>
            </div>
            <div class="col-md-6 text-md-end">
                <a class="p-4 h-100 bg-white border rounded-2 d-block text-decoration-none prev-next-link"
                    href="{{ route('web.article') }}">
                    <span class="small text-muted">Next story <i class="bi bi-arrow-right"></i></span>
                    <h3 class="mt-2 mb-0 h5 fw-bold font-title text-dark">A short history of the city at night</h3>
                </a>
            </div>
        </div>
    </section>

    {{-- comments --}}
    <section class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="mb-4 d-flex justify-content-between align-items-end">
                    <h2 class="mb-0 h3 fw-bold font-title">Join the conversation</h2>
                    <span class="small text-muted">3 comments</span>
                </div>

                <div class="mb-4 d-flex gap-3">
                    <img src="{{ asset('assets/images/avatar.avif') }}" alt="avatar" width="400" height="400"
                        class="rounded-circle avatar-image">
                    <div>
                        <p class="mb-1 small"><span class="fw-semibold">Bea Lim</span> <span class="text-muted">·
                                March 15, 2025</span></p>
                        <p class="mb-0 text-body-secondary">
                            This made me think of the sari-sari store near my grandmother's house. The owner knew
                            everyone's birthday and kept a list of who was allergic to what. Thank you for writing this.
                        </p>
                    </div>
                </div>

                <div class="mb-4 d-flex gap-3">
                    <img src="{{ asset('assets/images/avatar.avif') }}" alt="avatar" width="400" height="400"
                        class="rounded-circle avatar-image">
                    <div>
                        <p class="mb-1 small"><span class="fw-semibold">Ramon Diaz</span> <span class="text-muted">·
                                March 16, 2025</span></p>
                        <p class="mb-0 text-body-secondary">
                            The part about the notebook hit me. Our neighborhood store had one too, and it was the only
                            place that would let you pay on a Friday if the week had been bad. More stories like this,
                            please.
                        </p>
                    </div>
                </div>

                <form class="p-4 bg-white border rounded-2" action="#" method="get">
                    <h3 class="mb-3 h6 fw-bold">Leave a comment</h3>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-medium small" for="commentName">NAME</label>
                            <input class="py-2 form-control" id="commentName" name="name" type="text"
                                placeholder="Your name" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-medium small" for="commentEmail">EMAIL</label>
                            <input class="py-2 form-control" id="commentEmail" name="email" type="email"
                                placeholder="you@example.com" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-medium small" for="commentMessage">COMMENT</label>
                            <textarea class="py-2 form-control" id="commentMessage" name="message" rows="4"
                                placeholder="Share your thoughts…" required></textarea>
                        </div>
                        <div class="col-12">
                            <button class="px-4 py-2 btn btn-primary" type="submit">Post comment</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    {{-- newsletter --}}
    @include('web._components.newsletter', [
        'heading' => 'More stories like this one.',
        'copy' =>
            'Get our best reporting on cities, culture, and the people who hold them together, delivered every Friday.',
    ])

    <!-- Related articles -->
    <section class="container mt-5 pt-4 pb-5">
        <div class="mb-2">
            <p class="text-primary fw-medium">KEEP READING</p>
            <h2>Related articles</h2>
        </div>

        @php
            $related = [
                [
                    'category' => 'CITIES',
                    'title' => 'The last tailor on the street',
                    'excerpt' => 'After fifty years of alterations, Mang Tonyo is training his grandson to take over the shop, one hem at a time.',
                    'author' => 'Lia Mendoza',
                    'date' => 'March 6, 2025',
                    'read_time' => '7 min read',
                ],
                [
                    'category' => 'CULTURE',
                    'title' => 'What karaoke teaches us about community',
                    'excerpt' => 'A rented microphone, a slightly out-of-tune speaker, and a room full of people willing to be a little ridiculous together.',
                    'author' => 'Ana Reyes',
                    'date' => 'February 23, 2025',
                    'read_time' => '6 min read',
                ],
                [
                    'category' => 'DESIGN',
                    'title' => 'The quiet politics of a well-designed bench',
                    'excerpt' => 'Who gets to sit down, and for how long, is never just a question about furniture.',
                    'author' => 'Maria Santos',
                    'date' => 'February 18, 2025',
                    'read_time' => '8 min read',
                ],
            ];
        @endphp

        <div class="row g-4">
            @foreach ($related as $article)
                @include('web._components.article-card', $article)
            @endforeach
        </div>
    </section>
@endsection

@section('page-styles')
    <style>
        .content {
            text-align: justify;
        }

        .content:first-of-type::first-letter {
            float: left;
            font-weight: 600;
            font-size: 3.8rem;
            line-height: 0.9;
            padding: 0.06em 0.12em 0 0;
        }

        .category-label {
            letter-spacing: 0.16em;
        }

        .title {
            max-width: 600px;
        }

        .avatar-image {
            width: 35px;
            height: 35px;
            flex-shrink: 0;
        }

        .share-icon {
            height: 44px;
            width: 44px;
        }

        .pull-quote {
            border-left: 4px solid var(--bs-primary);
            padding: 0.25rem 0 0.25rem 1.5rem;
        }

        .pull-quote p {
            font-family: Fraunces;
            font-size: 1.75rem;
            line-height: 1.3;
        }

        .author-avatar {
            width: 96px;
            height: 96px;
            flex-shrink: 0;
            object-fit: cover;
        }

        .prev-next-link {
            transition: border-color 0.2s ease, transform 0.2s ease;
        }

        .prev-next-link:hover {
            border-color: var(--bs-primary) !important;
            transform: translateY(-2px);
        }
    </style>
@endsection
