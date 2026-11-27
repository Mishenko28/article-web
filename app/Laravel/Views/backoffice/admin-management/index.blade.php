@extends('backoffice._layouts.main')

@section('page-content')
    <div class="container-lg">
        @include('backoffice._components.page-guide', [
            'guide_title' => 'Managing admins',
            'guide_text' =>
                'Admins sign in to this Admin Portal and can manage every account. Only give admin access to trusted people.',
        ])

        <div class="card">
            <div class="card-header">
                <p class="mb-0 fw-medium">List of Admin Accounts</p>
                <small class="text-muted">Accounts that can sign in to this Admin Portal.</small>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($records as $index => $record)
                                <tr>
                                    <td scope="row">{{ $record->full_name }}</td>
                                    <td scope="row">{{ $record->email }}</td>
                                    <td scope="row">
                                        <div class="d-flex gap-1">
                                            <a href="{{ route('backoffice.admin-management.edit', $record->id) }}"
                                                class="col btn btn-sm btn-primary actions">Edit</a>
                                            <a href="{{ route('backoffice.admin-management.show', $record->id) }}"
                                                class="col btn btn-sm btn-info actions">View</a>

                                            <button type="button" class="col btn btn-sm btn-danger actions"
                                                data-bs-toggle="modal" data-bs-target="#delete-btn{{ $record->id }}">
                                                Delete
                                            </button>

                                            <div class="modal fade" id="delete-btn{{ $record->id }}" tabindex="-1"
                                                data-bs-keyboard="false" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalTitleId">
                                                                Delete this admin account?
                                                            </h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">
                                                                Close
                                                            </button>
                                                            <a href="{{ route('backoffice.admin-management.destroy', $record->id) }}"
                                                                class="btn btn-danger">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="py-4 text-center">
                                        <i class="d-block mb-2 fs-4 text-muted bi bi-person-gear" aria-hidden="true"></i>
                                        <span class="d-block fw-medium">No admin accounts yet.</span>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            @if ($records->hasPages())
                <div class="card-footer">
                    {{ $records->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection

@section('page-styles')
    <style>
        .actions {
            max-width: 70px;
        }
    </style>
@endsection
