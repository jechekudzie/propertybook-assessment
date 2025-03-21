@extends('admin.layouts.app')

@section('title', 'Edit Call to Action')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Edit Call to Action</h1>
        <a href="{{ route('admin.call-to-actions.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left"></i> Back to CTAs
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
                            <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                   id="title" name="title" value="{{ old('title', $callToAction->title) }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Subtitle</label>
                            <textarea class="form-control @error('subtitle') is-invalid @enderror" 
                                      id="subtitle" name="subtitle" rows="3">{{ old('subtitle', $callToAction->subtitle) }}</textarea>
                            @error('subtitle')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="button_text" class="form-label">Button Text <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('button_text') is-invalid @enderror" 
                                   id="button_text" name="button_text" value="{{ old('button_text', $callToAction->button_text) }}" required>
                            @error('button_text')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="button_link" class="form-label">Button Link <span class="text-danger">*</span></label>
                            <input type="url" class="form-control @error('button_link') is-invalid @enderror" 
                                   id="button_link" name="button_link" value="{{ old('button_link', $callToAction->button_link) }}" required>
                            @error('button_link')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Enter a full URL (e.g., https://example.com/page)</div>
                        </div>
                        
                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="active" name="active" value="1" 
                                       {{ old('active', $callToAction->active) ? 'checked' : '' }}>
                                <label class="form-check-label" for="active">Active</label>
                            </div>
                            <div class="form-text">Only active Call to Actions will be displayed on the website.</div>
                        </div>
                    </div>
                </div>
                
                <!-- Preview Section -->
                <div class="mb-4">
                    <h4 class="h5 mb-3">Preview</h4>
                    <div class="bg-light p-4 rounded">
                        <div class="text-center">
                            <h2 id="preview-title" class="h3 mb-2">{{ $callToAction->title }}</h2>
                            <p id="preview-subtitle" class="mb-4">{{ $callToAction->subtitle }}</p>
                            <button id="preview-button" class="btn btn-primary" type="button">{{ $callToAction->button_text }}</button>
                        </div>
                    </div>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Call to Action
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Update preview on input change
    document.addEventListener('DOMContentLoaded', function() {
        // Initial preview update
        updatePreview();
        
        // Update on input changes
        document.getElementById('title').addEventListener('input', updatePreview);
        document.getElementById('subtitle').addEventListener('input', updatePreview);
        document.getElementById('button_text').addEventListener('input', updatePreview);
        
        function updatePreview() {
            // Get values
            const title = document.getElementById('title').value || 'Title';
            const subtitle = document.getElementById('subtitle').value || '';
            const buttonText = document.getElementById('button_text').value || 'Button';
            
            // Update preview elements
            document.getElementById('preview-title').textContent = title;
            document.getElementById('preview-subtitle').textContent = subtitle;
            document.getElementById('preview-button').textContent = buttonText;
        }
    });
</script>
@endpush

@endsection 