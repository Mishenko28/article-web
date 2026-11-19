@extends('backoffice._layouts.main')

@section('page-content')
    <div class="container">
        <div class="row g-2">
            @for ($i = 0; $i < 5; $i++)
                <div class="col-4">
                    <div class="bg-body-tertiary rounded-3" style="height: 200px;">

                    </div>
                </div>
                <div class="col-4">
                    <div class="bg-body-tertiary rounded-3" style="height: 200px;">

                    </div>
                </div>
                <div class="col-4">
                    <div class="bg-body-tertiary rounded-3" style="height: 200px;">

                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
