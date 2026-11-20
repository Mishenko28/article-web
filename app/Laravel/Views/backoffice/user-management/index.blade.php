@extends('backoffice._layouts.main')

@section('page-content')
    <div class="container-lg">
        <div class="card">
            <div class="card-header">
                List of User Accounts
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($records as $index => $record)
                                <tr>
                                    <td scope="row">{{ $record->first_name }}</td>
                                    <td scope="row">{{ $record->last_name }}</td>
                                    <td scope="row">{{ $record->email }}</td>
                                    <td scope="row">
                                        <div class="d-flex gap-1">
                                            <a href="{{ route('backoffice.user-management.edit', $record->id) }}"
                                                class="col btn btn-sm btn-primary actions">Edit</a>
                                            <a href="{{ route('backoffice.user-management.show', $record->id) }}"
                                                class="col btn btn-sm btn-info actions">View</a>
                                            <a class="col btn btn-sm btn-danger actions"
                                                href="{{ route('backoffice.user-management.destroy', $record->id) }}">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">no records found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
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
