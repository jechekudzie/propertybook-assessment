@extends('admin.layouts.app')

@section('title', 'Manage Contacts')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Contacts</h1>
        <a href="{{ route('admin.contacts.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add New Contact
        </a>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            @if(count($contacts) == 0)
            <div class="text-center py-4">
                <div class="mb-3">
                    <i class="fas fa-address-card fa-3x text-muted"></i>
                </div>
                <h4>No contact information found</h4>
                <p class="text-muted">Add your contact information to display on your website.</p>
                <a href="{{ route('admin.contacts.create') }}" class="btn btn-primary mt-2">
                    <i class="fas fa-plus"></i> Add Contact Information
                </a>
            </div>
            @else
            <div class="table-responsive">
                <table class="table table-hover datatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>
                                <a href="mailto:{{ $contact->email1 }}">{{ $contact->email1 }}</a>
                                @if($contact->email2)
                                <br><small class="text-muted">{{ $contact->email2 }}</small>
                                @endif
                            </td>
                            <td>
                                {{ $contact->phone1 }}
                                @if($contact->phone2)
                                <br><small class="text-muted">{{ $contact->phone2 }}</small>
                                @endif
                            </td>
                            <td>
                                <span class="badge bg-{{ $contact->active ? 'success' : 'danger' }}">
                                    {{ $contact->active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('admin.contacts.edit', $contact) }}" class="btn btn-sm btn-outline-primary me-2">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="{{ route('admin.contacts.show', $contact) }}" class="btn btn-sm btn-outline-info me-2">
                                        <i class="fas fa-eye"></i> View
                                    </a>
                                    <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" 
                                          onsubmit="return confirm('Are you sure you want to delete this contact information?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="fas fa-trash-alt"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="mt-4 pagination-links">
                {{ $contacts->links() }}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection 