@extends('backoffice._layouts.main')

@section('page-content')
    <div class="container-lg">
        <a class="mb-3 btn btn-secondary" href="{{ route('backoffice.admin-management.index') }}">
            <i class="bi bi-arrow-90deg-left"></i>
            Go back
        </a>
        <div class="card">
            <div class="card-header">
                User Account Details
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="text-muted">Full Name</label>
                    <p class="card-text fw-medium">{{ $record->full_name }}</p>
                </div>
                <div class="mb-3">
                    <label class="text-muted">Email</label>
                    <p class="card-text fw-medium">{{ "$record->email" }}</p>
                </div>
                <div class="mb-3">
                    <a href="{{ route('backoffice.admin-management.edit', $record->id) }}" class="col btn btn-primary">
                        <i class="bi bi-pencil-square"></i>
                        Edit
                    </a>
                    <a href="{{ route('backoffice.admin-management.destroy', $record->id) }}" class="col btn btn-danger ">
                        <i class="bi bi-trash"></i>
                        Delete
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
