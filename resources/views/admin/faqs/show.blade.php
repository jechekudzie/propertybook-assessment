@extends('admin.layouts.app')

@section('title', 'FAQ Details')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">FAQ Details</h1>
        <div>
            <a href="{{ route('admin.faqs.index') }}" class="btn btn-outline-secondary me-2">
                <i class="fas fa-arrow-left"></i> Back to FAQs
            </a>
            <a href="{{ route('admin.faqs.edit', $faq) }}" class="btn btn-primary">
                <i class="fas fa-edit"></i> Edit
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <h2 class="card-title h4 mb-0">{{ $faq->question }}</h2>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <h3 class="h5 text-secondary mb-3">Answer:</h3>
                        <div class="p-3 bg-light rounded">
                            <p class="mb-0">{!! nl2br(e($faq->answer)) !!}</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h3 class="h5 text-secondary mb-2">Status:</h3>
                                <span class="badge bg-{{ $faq->active ? 'success' : 'danger' }} fs-6">
                                    {{ $faq->active ? 'Active' : 'Inactive' }}
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h3 class="h5 text-secondary mb-2">Order:</h3>
                                <span class="badge bg-secondary fs-6">{{ $faq->order }}</span>
                                <small class="text-muted d-block mt-1">Lower numbers appear first</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <small class="text-muted">Created: {{ $faq->created_at->format('M d, Y H:i') }}</small>
                    <br>
                    <small class="text-muted">Last Updated: {{ $faq->updated_at->format('M d, Y H:i') }}</small>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card shadow-sm border-danger">
                <div class="card-header bg-danger text-white">
                    <h3 class="card-title h5 mb-0">Danger Zone</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.faqs.destroy', $faq) }}" method="POST" 
                          onsubmit="return confirm('Are you sure you want to delete this FAQ? This action cannot be undone.');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">
                            <i class="fas fa-trash-alt"></i> Delete FAQ
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 