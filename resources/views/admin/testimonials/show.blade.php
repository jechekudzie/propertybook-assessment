@extends('admin.layouts.app')

@section('title', 'Testimonial Details')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Testimonial Details</h1>
        <div>
            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-outline-secondary me-2">
                <i class="fas fa-arrow-left"></i> Back to Testimonials
            </a>
            <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn btn-primary">
                <i class="fas fa-edit"></i> Edit
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="card-title h4 mb-3">{{ $testimonial->name }}</h2>
                    
                    <div class="mb-3">
                        <span class="badge bg-{{ $testimonial->active ? 'success' : 'danger' }}">
                            {{ $testimonial->active ? 'Active' : 'Inactive' }}
                        </span>
                        <span class="badge bg-secondary">Order: {{ $testimonial->order }}</span>
                    </div>
                    
                    <div class="mb-3">
                        <p class="text-secondary mb-2">Position:</p>
                        <p>{{ $testimonial->position }}</p>
                    </div>
                    
                    <div>
                        <p class="text-secondary mb-2">Testimonial:</p>
                        <div class="p-3 bg-light rounded">
                            <p class="mb-0">{{ $testimonial->testimonial }}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <small class="text-muted">Created: {{ $testimonial->created_at->format('M d, Y H:i') }}</small>
                    <br>
                    <small class="text-muted">Last Updated: {{ $testimonial->updated_at->format('M d, Y H:i') }}</small>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <h3 class="card-title h5 mb-0">Profile Image</h3>
                </div>
                <div class="card-body text-center p-4">
                    @if($testimonial->image)
                        <img src="{{ asset($testimonial->image) }}" alt="{{ $testimonial->name }}" 
                             class="img-fluid rounded" style="max-height: 200px;">
                    @else
                        <div class="p-5 bg-light rounded d-flex align-items-center justify-content-center">
                            <span class="text-muted">No image available</span>
                        </div>
                    @endif
                </div>
            </div>
            
            <div class="card shadow-sm border-danger">
                <div class="card-header bg-danger text-white">
                    <h3 class="card-title h5 mb-0">Danger Zone</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" 
                          onsubmit="return confirm('Are you sure you want to delete this testimonial? This action cannot be undone.');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">
                            <i class="fas fa-trash-alt"></i> Delete Testimonial
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 