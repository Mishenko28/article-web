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

                    <button type="button" class="col btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-btn">
                        Delete
                    </button>

                    <div class="modal fade" id="delete-btn" tabindex="-1" data-bs-keyboard="false" role="dialog"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId">
                                        Do you want to delete this admin?
                                    </h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <a href="{{ route('backoffice.admin-management.destroy', $record->id) }}"
                                        class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
