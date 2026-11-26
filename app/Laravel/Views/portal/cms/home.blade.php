@extends('portal._layouts.main')

@section('page-content')
    <div class="container-lg">
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
                        <form method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <div id="editor">
                                    <textarea class="form-control editor" name="title">{{ old('title', $variables->firstWhere('section', 'title')?->content) }}</textarea>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Subtitle</label>
                                <div id="editor">
                                    <textarea class="form-control editor" name="subtitle">{{ old('subtitle', $variables->firstWhere('section', 'subtitle')?->content) }}</textarea>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <div id="editor">
                                    <textarea class="form-control editor" name="description">{{ old('description', $variables->firstWhere('section', 'description')?->content) }}</textarea>
                                </div>
                            </div>

                            <button class="btn btn-primary">
                                Submit Changes
                            </button>
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
