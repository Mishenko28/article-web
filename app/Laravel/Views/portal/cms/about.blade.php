@extends('portal._layouts.main')

@section('page-content')
    <div class="container-lg">
        @include('portal._components.page-guide', [
            'guide_title' => 'Editing your About page',
            'guide_text' =>
                'This content appears on your public About page. Open a section below, make your changes, then save each section separately.',
            'guide_link' => route('web.about'),
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
                        <p class="mb-3 text-muted small">The first thing visitors see at the top of your About page.</p>

                        <form method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="about-title">Title</label>
                                <div id="editor-about-title">
                                    <textarea class="form-control editor" name="title" id="about-title" aria-describedby="help-about-title">{{ old('title', $variables->firstWhere('section', 'title')?->content) }}</textarea>
                                </div>
                                <div id="help-about-title" class="form-text">Main headline.</div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="about-subtitle">Subtitle</label>
                                <div id="editor-about-subtitle">
                                    <textarea class="form-control editor" name="subtitle" id="about-subtitle" aria-describedby="help-about-subtitle">{{ old('subtitle', $variables->firstWhere('section', 'subtitle')?->content) }}</textarea>
                                </div>
                                <div id="help-about-subtitle" class="form-text">
                                    One supporting line shown under the headline.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="about-description">Description</label>
                                <div id="editor-about-description">
                                    <textarea class="form-control editor" name="description" id="about-description"
                                        aria-describedby="help-about-description">{{ old('description', $variables->firstWhere('section', 'description')?->content) }}</textarea>
                                </div>
                                <div id="help-about-description" class="form-text">Shown below the subtitle.</div>
                            </div>

                            <button class="btn btn-primary">Save Hero Section</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panel-mission-vision" aria-expanded="false" aria-controls="panel-mission-vision">
                        Mission & Vision
                    </button>
                </h2>
                <div id="panel-mission-vision" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <p class="mb-3 text-muted small">These two blocks explain what your site stands for.</p>

                        <form method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="about-mission">Our Mission</label>
                                <div id="editor-about-mission">
                                    <textarea class="form-control editor" name="mission" id="about-mission" aria-describedby="help-about-mission">{{ old('mission', $variables->firstWhere('section', 'mission')?->content) }}</textarea>
                                </div>
                                <div id="help-about-mission" class="form-text">One or two sentences describing your
                                    purpose.</div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="about-vision">Our Vision</label>
                                <div id="editor-about-vision">
                                    <textarea class="form-control editor" name="vision" id="about-vision" aria-describedby="help-about-vision">{{ old('vision', $variables->firstWhere('section', 'vision')?->content) }}</textarea>
                                </div>
                                <div id="help-about-vision" class="form-text">One or two sentences describing your goal.
                                </div>
                            </div>

                            <button class="btn btn-primary">Save Mission & Vision</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panel-statistics" aria-expanded="false" aria-controls="panel-statistics">
                        Statistics
                    </button>
                </h2>
                <div id="panel-statistics" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <p class="mb-3 text-muted small">The numbers shown in the stats strip on your About page.</p>

                        <form method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label" for="about-article-published">Article Published</label>
                                    <div id="editor-about-article-published">
                                        <textarea class="form-control editor" name="article_published" id="about-article-published"
                                            aria-describedby="help-about-article-published">{{ old('article_published', $variables->firstWhere('section', 'article_published')?->content) }}</textarea>
                                    </div>
                                    <div id="help-about-article-published" class="form-text">
                                        Total number of articles published. e.g., 12K
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label class="form-label" for="about-registered-users">Registered Users</label>
                                    <div id="editor-about-registered-users">
                                        <textarea class="form-control editor" name="registered_users" id="about-registered-users"
                                            aria-describedby="help-about-registered-users">{{ old('registered_users', $variables->firstWhere('section', 'registered_users')?->content) }}</textarea>
                                    </div>
                                    <div id="help-about-registered-users" class="form-text">
                                        Total number of registered users. e.g., 12K
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label class="form-label" for="about-letter-subscribers">Letter Subscribers</label>
                                    <div id="editor-about-letter-subscribers">
                                        <textarea class="form-control editor" name="letter_subscribers" id="about-letter-subscribers"
                                            aria-describedby="help-about-letter-subscribers">{{ old('letter_subscribers', $variables->firstWhere('section', 'letter_subscribers')?->content) }}</textarea>
                                    </div>
                                    <div id="help-about-letter-subscribers" class="form-text">
                                        Total number of newsletter subscribers. e.g., 12K
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label class="form-label" for="about-founded-in">Founded In</label>
                                    <div id="editor-about-founded-in">
                                        <textarea class="form-control editor" name="founded_in" id="about-founded-in"
                                            aria-describedby="help-about-founded-in">{{ old('founded_in', $variables->firstWhere('section', 'founded_in')?->content) }}</textarea>
                                    </div>
                                    <div id="help-about-founded-in" class="form-text">
                                        The year your site was founded, e.g. 2024.
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary">Save Statistics</button>
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
