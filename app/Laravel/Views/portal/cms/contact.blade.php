@extends('portal._layouts.main')

@section('page-content')
    <div class="container-lg">
        @include('portal._components.page-guide', [
            'guide_title' => 'Editing your Contact page',
            'guide_text' =>
                'This content appears on your public Contact page. Visitors use these details to reach you.',
            'guide_link' => route('web.contact'),
            'guide_link_label' => 'View public site',
        ])

        <div class="accordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panel-hero-section" aria-expanded="false" aria-controls="panel-hero-section">
                        Hero Section
                    </button>
                </h2>
                <div id="panel-hero-section" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <p class="mb-3 text-muted small">The first thing visitors see at the top of your Contact page.</p>

                        <form method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="contact-title">Title</label>
                                <div id="editor-contact-title">
                                    <textarea class="form-control editor" name="title" id="contact-title" aria-describedby="help-contact-title">{{ old('title', $variables->firstWhere('section', 'title')?->content) }}</textarea>
                                </div>
                                <div id="help-contact-title" class="form-text">Main headline.</div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="contact-subtitle">Subtitle</label>
                                <div id="editor-contact-subtitle">
                                    <textarea class="form-control editor" name="subtitle" id="contact-subtitle" aria-describedby="help-contact-subtitle">{{ old('subtitle', $variables->firstWhere('section', 'subtitle')?->content) }}</textarea>
                                </div>
                                <div id="help-contact-subtitle" class="form-text">
                                    One supporting line shown under the headline.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="contact-description">Description</label>
                                <div id="editor-contact-description">
                                    <textarea class="form-control editor" name="description" id="contact-description"
                                        aria-describedby="help-contact-description">{{ old('description', $variables->firstWhere('section', 'description')?->content) }}</textarea>
                                </div>
                                <div id="help-contact-description" class="form-text">Shown below the subtitle.</div>
                            </div>

                            <button class="btn btn-primary">Save Hero Section</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panel-contact-us" aria-expanded="false" aria-controls="panel-contact-us">
                        Contact Us
                    </button>
                </h2>
                <div id="panel-contact-us" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <p class="mb-3 text-muted small">These details are shown in contact links.</p>

                        <form method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="contact-email">Email</label>
                                <div id="editor-contact-email">
                                    <textarea class="form-control editor" name="email" id="contact-email" aria-describedby="help-contact-email">{{ old('email', $variables->firstWhere('section', 'email')?->content) }}</textarea>
                                </div>
                                <div id="help-contact-email" class="form-text">e.g. hello@blogs.ph</div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="contact-telephone">Telephone</label>
                                <div id="editor-contact-telephone">
                                    <textarea class="form-control editor" name="telephone" id="contact-telephone" aria-describedby="help-contact-telephone">{{ old('telephone', $variables->firstWhere('section', 'telephone')?->content) }}</textarea>
                                </div>
                                <div id="help-contact-telephone" class="form-text">e.g. +63 987 654 3210</div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="contact-address">Address</label>
                                <div id="editor-contact-address">
                                    <textarea class="form-control editor" name="address" id="contact-address" aria-describedby="help-contact-address">{{ old('address', $variables->firstWhere('section', 'address')?->content) }}</textarea>
                                </div>
                                <div id="help-contact-address" class="form-text">Complete office or mailing address.</div>
                            </div>

                            <button class="btn btn-primary">Save Contact Details</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panel-follow-us" aria-expanded="false" aria-controls="panel-follow-us">
                        Follow Us
                    </button>
                </h2>
                <div id="panel-follow-us" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <p class="mb-3 text-muted small">Links to social media profiles.</p>

                        <form method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="contact-twitter" class="form-label">X | Twitter</label>
                                    <input type="text" class="form-control" name="twitter" id="contact-twitter"
                                        aria-describedby="help-contact-twitter"
                                        value="{{ old('twitter', $variables->firstWhere('section', 'twitter')?->content) }}" />
                                    <div id="help-contact-twitter" class="form-text">
                                        Full URL starting with https://
                                    </div>
                                </div>

                                <div class="col-6 mb-3">
                                    <label for="contact-instagram" class="form-label">Instagram</label>
                                    <input type="text" class="form-control" name="instagram" id="contact-instagram"
                                        aria-describedby="help-contact-instagram"
                                        value="{{ old('instagram', $variables->firstWhere('section', 'instagram')?->content) }}" />
                                    <div id="help-contact-instagram" class="form-text">
                                        Full URL starting with https://
                                    </div>
                                </div>

                                <div class="col-6 mb-3">
                                    <label for="contact-linkedin" class="form-label">LinkedIn</label>
                                    <input type="text" class="form-control" name="linkedin" id="contact-linkedin"
                                        aria-describedby="help-contact-linkedin"
                                        value="{{ old('linkedin', $variables->firstWhere('section', 'linkedin')?->content) }}" />
                                    <div id="help-contact-linkedin" class="form-text">
                                        Full URL starting with https://
                                    </div>
                                </div>

                                <div class="col-6 mb-3">
                                    <label for="contact-facebook" class="form-label">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" id="contact-facebook"
                                        aria-describedby="help-contact-facebook"
                                        value="{{ old('facebook', $variables->firstWhere('section', 'facebook')?->content) }}" />
                                    <div id="help-contact-facebook" class="form-text">
                                        Full URL starting with https://
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary">Save Social Links</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panel-office-hours" aria-expanded="false" aria-controls="panel-office-hours">
                        Office Hours
                    </button>
                </h2>
                <div id="panel-office-hours" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <p class="mb-3 text-muted small">When visitors can reach your team.</p>

                        <form method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="contact-office-hours">Office Hours</label>
                                <div id="editor-contact-office-hours">
                                    <textarea class="form-control editor" name="office_hours" id="contact-office-hours"
                                        aria-describedby="help-contact-office-hours">{{ old('office_hours', $variables->firstWhere('section', 'office_hours')?->content) }}</textarea>
                                </div>
                                <div id="help-contact-office-hours" class="form-text">e.g. Mon–Fri, 9:00 AM–6:00 PM</div>
                            </div>

                            <button class="btn btn-primary">Save Office Hours</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-scripts')
    <script src="{{ asset('assets/libs/ckeditor5/build/ckeditor.js') }}"></script>
    <script>
        const editors = document.querySelectorAll('.editor');

        editors.forEach(editor => {
            ClassicEditor
                .create(editor, {
                    toolbar: [
                        'heading', '|',
                        'bold', 'italic', 'underline', '|',
                        'bulletedList', 'numberedList', 'link', '|',
                        'fontFamily', 'fontColor', 'fontBackgroundColor', '|',
                        'undo', 'redo'
                    ],
                    fontFamily: {
                        supportAllValues: true
                    },
                    heading: {
                        options: [{
                                model: 'paragraph',
                                title: 'Paragraph',
                                class: 'ck-heading_paragraph'
                            },
                            {
                                model: 'heading1',
                                view: 'h1',
                                title: 'Heading 1',
                                class: 'ck-heading_heading1'
                            },
                            {
                                model: 'heading2',
                                view: 'h2',
                                title: 'Heading 2',
                                class: 'ck-heading_heading2'
                            },
                            {
                                model: 'heading3',
                                view: 'h3',
                                title: 'Heading 3',
                                class: 'ck-heading_heading3'
                            },
                            {
                                model: 'heading4',
                                view: 'h4',
                                title: 'Heading 4',
                                class: 'ck-heading_heading4'
                            },
                            {
                                model: 'heading5',
                                view: 'h5',
                                title: 'Heading 5',
                                class: 'ck-heading_heading5'
                            },
                            {
                                model: 'heading6',
                                view: 'h6',
                                title: 'Heading 6',
                                class: 'ck-heading_heading6'
                            }
                        ]
                    }
                })
                .catch(error => console.error(error));
        });
    </script>
@endsection
