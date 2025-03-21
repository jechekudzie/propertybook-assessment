@extends('admin.layouts.app')

@section('title', 'Contact Details')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Contact Information Details</h1>
        <a href="{{ route('admin.contacts.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left"></i> Back to Contacts
        </a>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <h2 class="card-title h4 mb-0">Contact Information</h2>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h3 class="h5 mb-3">Contact Details</h3>
                            
                            <div class="mb-3">
                                <label class="fw-bold mb-1">Address:</label>
                                <p class="mb-0" style="white-space: pre-line;">{{ $contact->address }}</p>
                            </div>
                            
                            <div class="mb-3">
                                <label class="fw-bold mb-1">Primary Phone:</label>
                                <p class="mb-0">{{ $contact->phone1 }}</p>
                            </div>
                            
                            @if($contact->phone2)
                            <div class="mb-3">
                                <label class="fw-bold mb-1">Secondary Phone:</label>
                                <p class="mb-0">{{ $contact->phone2 }}</p>
                            </div>
                            @endif
                            
                            <div class="mb-3">
                                <label class="fw-bold mb-1">Primary Email:</label>
                                <p class="mb-0">
                                    <a href="mailto:{{ $contact->email1 }}">{{ $contact->email1 }}</a>
                                </p>
                            </div>
                            
                            @if($contact->email2)
                            <div class="mb-3">
                                <label class="fw-bold mb-1">Secondary Email:</label>
                                <p class="mb-0">
                                    <a href="mailto:{{ $contact->email2 }}">{{ $contact->email2 }}</a>
                                </p>
                            </div>
                            @endif
                        </div>
                        
                        <div class="col-md-6">
                            <h3 class="h5 mb-3">Social Media Links</h3>
                            
                            @if($contact->social_facebook)
                            <div class="mb-3">
                                <label class="fw-bold mb-1">
                                    <i class="fab fa-facebook text-primary"></i> Facebook:
                                </label>
                                <p class="mb-0">
                                    <a href="{{ $contact->social_facebook }}" target="_blank">{{ $contact->social_facebook }}</a>
                                </p>
                            </div>
                            @endif
                            
                            @if($contact->social_twitter)
                            <div class="mb-3">
                                <label class="fw-bold mb-1">
                                    <i class="fab fa-twitter text-info"></i> Twitter:
                                </label>
                                <p class="mb-0">
                                    <a href="{{ $contact->social_twitter }}" target="_blank">{{ $contact->social_twitter }}</a>
                                </p>
                            </div>
                            @endif
                            
                            @if($contact->social_instagram)
                            <div class="mb-3">
                                <label class="fw-bold mb-1">
                                    <i class="fab fa-instagram text-danger"></i> Instagram:
                                </label>
                                <p class="mb-0">
                                    <a href="{{ $contact->social_instagram }}" target="_blank">{{ $contact->social_instagram }}</a>
                                </p>
                            </div>
                            @endif
                            
                            @if($contact->social_linkedin)
                            <div class="mb-3">
                                <label class="fw-bold mb-1">
                                    <i class="fab fa-linkedin text-primary"></i> LinkedIn:
                                </label>
                                <p class="mb-0">
                                    <a href="{{ $contact->social_linkedin }}" target="_blank">{{ $contact->social_linkedin }}</a>
                                </p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <span class="badge bg-{{ $contact->active ? 'success' : 'danger' }}">
                        {{ $contact->active ? 'Active' : 'Inactive' }}
                    </span>
                    <span class="text-muted ms-2">Last updated: {{ $contact->updated_at->format('M d, Y H:i') }}</span>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <h3 class="card-title h5 mb-0">Actions</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.contacts.edit', $contact) }}" 
                       class="btn btn-primary w-100 mb-3">
                        <i class="fas fa-edit me-1"></i> Edit Contact Information
                    </a>
                    
                    <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" 
                          onsubmit="return confirm('Are you sure you want to delete this contact information?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger w-100">
                            <i class="fas fa-trash-alt me-1"></i> Delete Contact Information
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 