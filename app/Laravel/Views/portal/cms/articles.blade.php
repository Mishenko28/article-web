@extends('portal._layouts.main')

@section('page-content')
    <div class="container-lg">
        @include('portal._components.page-guide', [
            'guide_title' => 'Editing your Articles page',
            'guide_text' =>
                'This content appears on your public Articles page. Open a section below, make your changes, then save. Changes go live right away.',
            'guide_link' => route('web.articles'),
            'guide_link_label' => 'View public site',
        ])
    </div>
@endsection
