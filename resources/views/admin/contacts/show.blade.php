@extends('admin.layouts.app')

@section('title', 'Contact Details')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Contact Details</h1>
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
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h2 class="card-title h4 mb-0">{{ $contact->subject }}</h2>
                    <span class="badge bg-secondary">{{ $contact->created_at->format('M d, Y H:i') }}</span>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <div class="bg-light rounded p-3 mb-3">
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3">
                                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; font-size: 20px;">
                                        {{ strtoupper(substr($contact->name, 0, 1)) }}
                                    </div>
                                </div>
                                <div>
                                    <h3 class="h5 mb-1">{{ $contact->name }}</h3>
                                    <a href="mailto:{{ $contact->email }}" class="text-decoration-none">
                                        <i class="fas fa-envelope me-1 small"></i> {{ $contact->email }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <h4 class="h5 mb-3">Message:</h4>
                        <div class="p-3 border rounded bg-white">
                            <p class="mb-0" style="white-space: pre-line;">{{ $contact->message }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <h3 class="card-title h5 mb-0">Actions</h3>
                </div>
                <div class="card-body">
                    <a href="mailto:{{ $contact->email }}?subject=Re: {{ $contact->subject }}" 
                       class="btn btn-primary w-100 mb-3">
                        <i class="fas fa-reply me-1"></i> Reply via Email
                    </a>
                    
                    <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" 
                          onsubmit="return confirm('Are you sure you want to delete this contact message?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger w-100">
                            <i class="fas fa-trash-alt me-1"></i> Delete Message
                        </button>
                    </form>
                </div>
                <div class="card-footer bg-white">
                    <small class="text-muted">
                        <i class="fas fa-clock me-1"></i> Received {{ $contact->created_at->diffForHumans() }}
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 