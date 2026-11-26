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

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panel-contact-us" aria-expanded="false" aria-controls="panel-contact-us">
                        Contact Us
                    </button>
                </h2>
                <div id="panel-contact-us" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <form method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <div id="editor">
                                    <textarea class="form-control editor" name="email">{{ old('email', $variables->firstWhere('section', 'email')?->content) }}</textarea>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Telephone</label>
                                <div id="editor">
                                    <textarea class="form-control editor" name="telephone">{{ old('telephone', $variables->firstWhere('section', 'telephone')?->content) }}</textarea>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <div id="editor">
                                    <textarea class="form-control editor" name="address">{{ old('address', $variables->firstWhere('section', 'address')?->content) }}</textarea>
                                </div>
                            </div>

                            <button class="btn btn-primary">
                                Submit Changes
                            </button>
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
                        <form method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="twitter" class="form-label">X | Twitter</label>
                                    <input type="text" class="form-control" name="twitter" id="twitter"
                                        value="{{ old('twitter', $variables->firstWhere('section', 'twitter')?->content) }}" />
                                </div>

                                <div class="col-6 mb-3">
                                    <label for="instagram" class="form-label">Instagram</label>
                                    <input type="text" class="form-control" name="instagram" id="instagram"
                                        value="{{ old('instagram', $variables->firstWhere('section', 'instagram')?->content) }}" />
                                </div>

                                <div class="col-6 mb-3">
                                    <label for="linkedin" class="form-label">LinkedIn</label>
                                    <input type="text" class="form-control" name="linkedin" id="linkedin"
                                        value="{{ old('linkedin', $variables->firstWhere('section', 'linkedin')?->content) }}" />
                                </div>

                                <div class="col-6 mb-3">
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" id="facebook"
                                        value="{{ old('facebook', $variables->firstWhere('section', 'facebook')?->content) }}" />
                                </div>
                            </div>
                            <button class="btn btn-primary">
                                Submit Changes
                            </button>
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
                        <form method="POST">
                            @csrf

                            <div class="mb-3">
                                <div id="editor">
                                    <textarea class="form-control editor" name="office_hours">{{ old('office_hours', $variables->firstWhere('section', 'office_hours')?->content) }}</textarea>
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
