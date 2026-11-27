@extends('portal._layouts.main')

@section('page-content')
    <div class="container-lg">
        @include('portal._components.page-guide', [
            'guide_title' => 'Editing your Home page',
            'guide_text' =>
                'This content appears on your public Home page. Open a section below, make your changes, then save. Changes go live right away.',
            'guide_link' => route('web.home'),
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
                        <p class="mb-3 text-muted small">The first thing visitors see at the top of your Home page.</p>

                        <form method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="home-title">Title</label>
                                <div id="editor-home-title">
                                    <textarea class="form-control editor" name="title" id="home-title" aria-describedby="help-home-title">{{ old('title', $variables->firstWhere('section', 'title')?->content) }}</textarea>
                                </div>
                                <div id="help-home-title" class="form-text">Main headline.</div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="home-subtitle">Subtitle</label>
                                <div id="editor-home-subtitle">
                                    <textarea class="form-control editor" name="subtitle" id="home-subtitle" aria-describedby="help-home-subtitle">{{ old('subtitle', $variables->firstWhere('section', 'subtitle')?->content) }}</textarea>
                                </div>
                                <div id="help-home-subtitle" class="form-text">
                                    One supporting line shown under the headline.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="home-description">Description</label>
                                <div id="editor-home-description">
                                    <textarea class="form-control editor" name="description" id="home-description" aria-describedby="help-home-description">{{ old('description', $variables->firstWhere('section', 'description')?->content) }}</textarea>
                                </div>
                                <div id="help-home-description" class="form-text">Shown below the subtitle.</div>
                            </div>

                            <button class="btn btn-primary">Save Hero Section</button>
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
