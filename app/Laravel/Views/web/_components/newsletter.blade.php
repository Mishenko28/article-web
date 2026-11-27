<section class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="p-4 p-md-5 bg-white border rounded-2 text-center">
                <p class="mb-2 text-primary fw-medium text-uppercase newsletter-eyebrow">{{ $eyebrow }}</p>
                <h2 class="mb-3 font-title fw-bold lh-1 display-6">{{ $heading }}</h2>
                <p class="mb-4 mx-auto text-body-secondary newsletter-copy">{{ $copy }}</p>
                <form class="row g-2 justify-content-center" action="#" method="get">
                    <div class="col-sm-7 col-md-6">
                        <label class="visually-hidden" for="newsletterEmail">Email address</label>
                        <input class="py-2 form-control" id="newsletterEmail" name="email" type="email"
                            placeholder="you@example.com" required>
                    </div>
                    <div class="col-auto">
                        <button class="px-4 py-2 btn btn-primary" type="submit">Subscribe</button>
                    </div>
                </form>
                <p class="mt-3 mb-0 text-muted small">No spam. Unsubscribe anytime.</p>
            </div>
        </div>
    </div>
</section>
