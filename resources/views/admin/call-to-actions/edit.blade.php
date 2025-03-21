@extends('admin.layouts.app')

@section('title', 'Edit Call to Action')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Edit Call to Action</h1>
        <a href="{{ route('admin.call-to-actions.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left"></i> Back to Call to Actions
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.call-to-actions.update', $callToAction) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="row mb-4">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $callToAction->title) }}">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="4">{{ old('description', $callToAction->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h4 class="h6 mb-0">Preview</h4>
                            </div>
                            <div class="card-body p-3" id="cta-preview" style="min-height: 150px; background-color: {{ $callToAction->background_color }};">
                                <h3 id="preview-title" class="h5">{{ $callToAction->title }}</h3>
                                <p id="preview-description" class="small">{{ $callToAction->description }}</p>
                                <a href="{{ $callToAction->button_url }}" id="preview-button" class="btn btn-sm btn-primary">{{ $callToAction->button_text }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="button_text" class="form-label">Button Text</label>
                        <input type="text" name="button_text" id="button_text" class="form-control @error('button_text') is-invalid @enderror" value="{{ old('button_text', $callToAction->button_text) }}">
                        @error('button_text')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="button_url" class="form-label">Button URL</label>
                        <input type="url" name="button_url" id="button_url" class="form-control @error('button_url') is-invalid @enderror" value="{{ old('button_url', $callToAction->button_url) }}" placeholder="https://example.com">
                        @error('button_url')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="background_color" class="form-label">Background Color</label>
                        <div class="input-group">
                            <span class="input-group-text p-0">
                                <input type="color" class="form-control form-control-color border-0" id="color_picker" value="{{ old('background_color', $callToAction->background_color) }}">
                            </span>
                            <input type="text" name="background_color" id="background_color" class="form-control @error('background_color') is-invalid @enderror" value="{{ old('background_color', $callToAction->background_color) }}">
                        </div>
                        @error('background_color')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <div class="mt-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input @error('active') is-invalid @enderror" id="active" name="active" value="1" {{ old('active', $callToAction->active) ? 'checked' : '' }}>
                                <label class="form-check-label" for="active">Active</label>
                                @error('active')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i> Update Call to Action
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const titleInput = document.getElementById('title');
        const descriptionInput = document.getElementById('description');
        const buttonTextInput = document.getElementById('button_text');
        const buttonUrlInput = document.getElementById('button_url');
        const bgColorInput = document.getElementById('background_color');
        const colorPicker = document.getElementById('color_picker');
        
        const previewTitle = document.getElementById('preview-title');
        const previewDescription = document.getElementById('preview-description');
        const previewButton = document.getElementById('preview-button');
        const previewContainer = document.getElementById('cta-preview');
        
        // Update preview when inputs change
        titleInput.addEventListener('input', function() {
            previewTitle.textContent = this.value || 'Call to Action Title';
        });
        
        descriptionInput.addEventListener('input', function() {
            previewDescription.textContent = this.value || 'Enter a description to see a preview here.';
        });
        
        buttonTextInput.addEventListener('input', function() {
            previewButton.textContent = this.value || 'Button';
        });
        
        buttonUrlInput.addEventListener('input', function() {
            previewButton.href = this.value || '#';
        });
        
        // Sync color picker with input
        colorPicker.addEventListener('input', function() {
            bgColorInput.value = this.value;
            previewContainer.style.backgroundColor = this.value;
        });
        
        bgColorInput.addEventListener('input', function() {
            colorPicker.value = this.value;
            previewContainer.style.backgroundColor = this.value;
        });
    });
</script>
@endpush
@endsection 