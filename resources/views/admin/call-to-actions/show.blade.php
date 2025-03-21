@extends('admin.layouts.app')

@section('title', 'Call to Action Details')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Call to Action Details</h1>
        <div>
            <a href="{{ route('admin.call-to-actions.index') }}" class="btn btn-outline-secondary me-2">
                <i class="fas fa-arrow-left"></i> Back to CTAs
            </a>
            <a href="{{ route('admin.call-to-actions.edit', $callToAction) }}" class="btn btn-primary">
                <i class="fas fa-edit"></i> Edit
            </a>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="row">
        <div class="col-md-8">
            <!-- CTA Details -->
            <div class="card shadow-sm mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h2 class="card-title h4 mb-0">{{ $callToAction->title }}</h2>
                    <span class="badge bg-{{ $callToAction->active ? 'success' : 'danger' }}">
                        {{ $callToAction->active ? 'Active' : 'Inactive' }}
                    </span>
                </div>
                <div class="card-body">
                    @if($callToAction->subtitle)
                    <div class="mb-4">
                        <h3 class="h5 text-secondary mb-2">Subtitle:</h3>
                        <p>{{ $callToAction->subtitle }}</p>
                    </div>
                    @endif

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h3 class="h5 text-secondary mb-2">Button:</h3>
                            <button class="btn btn-primary" disabled>{{ $callToAction->button_text }}</button>
                        </div>
                        <div class="col-md-6">
                            <h3 class="h5 text-secondary mb-2">Button Link:</h3>
                            <a href="{{ $callToAction->button_link }}" target="_blank" class="d-block text-truncate">
                                {{ $callToAction->button_link }} <i class="fas fa-external-link-alt fa-xs"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Preview -->
                    <div class="mt-4">
                        <h3 class="h5 text-secondary mb-3">Preview:</h3>
                        <div class="bg-light p-4 rounded">
                            <div class="text-center">
                                <h2 class="h3 mb-2">{{ $callToAction->title }}</h2>
                                @if($callToAction->subtitle)
                                <p class="mb-4">{{ $callToAction->subtitle }}</p>
                                @endif
                                <a href="{{ $callToAction->button_link }}" target="_blank" class="btn btn-primary">
                                    {{ $callToAction->button_text }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <small class="text-muted">Created: {{ $callToAction->created_at->format('M d, Y H:i') }}</small>
                    <br>
                    <small class="text-muted">Last Updated: {{ $callToAction->updated_at->format('M d, Y H:i') }}</small>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <!-- Danger Zone -->
            <div class="card shadow-sm border-danger">
                <div class="card-header bg-danger text-white">
                    <h3 class="card-title h5 mb-0">Danger Zone</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.call-to-actions.destroy', $callToAction) }}" method="POST" 
                          onsubmit="return confirm('Are you sure you want to delete this Call to Action? This action cannot be undone.');">
                        @csrf
                        @method('DELETE')
                        <p class="text-muted mb-3">Deleting this Call to Action will remove it permanently from the website.</p>
                        <button type="submit" class="btn btn-danger w-100">
                            <i class="fas fa-trash-alt"></i> Delete Call to Action
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Status Toggle -->
            <div class="card shadow-sm mt-4">
                <div class="card-header">
                    <h3 class="card-title h5 mb-0">Quick Actions</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.call-to-actions.update', $callToAction) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="title" value="{{ $callToAction->title }}">
                        <input type="hidden" name="subtitle" value="{{ $callToAction->subtitle }}">
                        <input type="hidden" name="button_text" value="{{ $callToAction->button_text }}">
                        <input type="hidden" name="button_link" value="{{ $callToAction->button_link }}">
                        <input type="hidden" name="active" value="{{ $callToAction->active ? 0 : 1 }}">
                        
                        <button type="submit" class="btn btn-outline-{{ $callToAction->active ? 'warning' : 'success' }} w-100">
                            <i class="fas fa-toggle-{{ $callToAction->active ? 'off' : 'on' }} me-1"></i>
                            {{ $callToAction->active ? 'Deactivate' : 'Activate' }} Call to Action
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 