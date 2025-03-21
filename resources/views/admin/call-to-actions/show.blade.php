@extends('admin.layouts.app')

@section('title', 'Call to Action Details')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Call to Action Details</h1>
        <a href="{{ route('admin.call-to-actions.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left"></i> Back to Call to Actions
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
                    <h2 class="card-title h4 mb-0">Call to Action Information</h2>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <div class="p-4 rounded" style="background-color: {{ $callToAction->background_color }};">
                            <h3 class="h4 mb-3">{{ $callToAction->title }}</h3>
                            <p class="mb-4">{{ $callToAction->description }}</p>
                            <a href="{{ $callToAction->button_url }}" target="_blank" class="btn btn-primary">
                                {{ $callToAction->button_text }}
                            </a>
                        </div>
                    </div>
                    
                    <h3 class="h5 mt-4 mb-3">Details</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width: 150px;" class="bg-light">Title</th>
                                    <td>{{ $callToAction->title }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light">Description</th>
                                    <td>{{ $callToAction->description }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light">Button Text</th>
                                    <td>{{ $callToAction->button_text }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light">Button URL</th>
                                    <td>
                                        <a href="{{ $callToAction->button_url }}" target="_blank">
                                            {{ $callToAction->button_url }}
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-light">Background Color</th>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="color-sample me-2" style="width: 20px; height: 20px; border-radius: 4px; background-color: {{ $callToAction->background_color }};"></div>
                                            <code>{{ $callToAction->background_color }}</code>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-light">Status</th>
                                    <td>
                                        <span class="badge bg-{{ $callToAction->active ? 'success' : 'danger' }}">
                                            {{ $callToAction->active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <small>Created: {{ $callToAction->created_at->format('M d, Y H:i') }}</small>
                    <small class="ms-3">Last Updated: {{ $callToAction->updated_at->format('M d, Y H:i') }}</small>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <h3 class="card-title h5 mb-0">Actions</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.call-to-actions.edit', $callToAction) }}" 
                       class="btn btn-primary w-100 mb-3">
                        <i class="fas fa-edit me-1"></i> Edit Call to Action
                    </a>
                    
                    <form action="{{ route('admin.call-to-actions.destroy', $callToAction) }}" method="POST" 
                          onsubmit="return confirm('Are you sure you want to delete this call to action?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger w-100">
                            <i class="fas fa-trash-alt me-1"></i> Delete Call to Action
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 