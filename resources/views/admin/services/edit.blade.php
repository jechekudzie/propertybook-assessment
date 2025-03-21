@extends('admin.layouts.app')

@section('title', 'Edit Service')

@section('header-buttons')
    <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Back to Services
    </a>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.services.update', $service->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $service->title) }}" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" required>{{ old('description', $service->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="icon" class="form-label">Icon <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-icons"></i></span>
                            <input type="text" class="form-control @error('icon') is-invalid @enderror" id="icon" name="icon" value="{{ old('icon', $service->icon) }}" required>
                        </div>
                        @error('icon')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Enter a FontAwesome icon name (e.g., chart-line, cube, images, shield)</div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="icon_color" class="form-label">Icon Color <span class="text-danger">*</span></label>
                        <input type="color" class="form-control form-control-color @error('icon_color') is-invalid @enderror" id="icon_color" name="icon_color" value="{{ old('icon_color', $service->icon_color) }}" required>
                        @error('icon_color')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="background_color" class="form-label">Background Color <span class="text-danger">*</span></label>
                        <input type="color" class="form-control form-control-color @error('background_color') is-invalid @enderror" id="background_color" name="background_color" value="{{ old('background_color', $service->background_color) }}" required>
                        @error('background_color')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Icon Preview</label>
                <div class="p-3 text-center" id="icon-preview-container" style="background-color: {{ $service->background_color }}; border-radius: 8px; width: 60px; height: 60px; margin: 0 auto;">
                    <i id="icon-preview" class="fas fa-{{ $service->icon }}" style="font-size: 24px; color: {{ $service->icon_color }};"></i>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="link_text" class="form-label">Link Text</label>
                        <input type="text" class="form-control @error('link_text') is-invalid @enderror" id="link_text" name="link_text" value="{{ old('link_text', $service->link_text) }}">
                        @error('link_text')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="link_url" class="form-label">Link URL</label>
                        <input type="text" class="form-control @error('link_url') is-invalid @enderror" id="link_url" name="link_url" value="{{ old('link_url', $service->link_url) }}">
                        @error('link_url')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="order" class="form-label">Order</label>
                        <input type="number" class="form-control @error('order') is-invalid @enderror" id="order" name="order" value="{{ old('order', $service->order) }}" min="0">
                        @error('order')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Lower numbers appear first</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="active" class="form-label">Status</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="active" name="active" value="1" {{ old('active', $service->active) ? 'checked' : '' }}>
                            <label class="form-check-label" for="active">Active</label>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Update Service
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const iconInput = document.getElementById('icon');
    const iconPreview = document.getElementById('icon-preview');
    const iconColorInput = document.getElementById('icon_color');
    const bgColorInput = document.getElementById('background_color');
    const previewContainer = document.getElementById('icon-preview-container');
    
    // Update icon preview when icon name changes
    iconInput.addEventListener('input', updatePreview);
    
    // Update colors when color inputs change
    iconColorInput.addEventListener('input', updatePreview);
    bgColorInput.addEventListener('input', updatePreview);
    
    function updatePreview() {
        // Update icon class
        iconPreview.className = 'fas fa-' + iconInput.value;
        
        // Update colors
        iconPreview.style.color = iconColorInput.value;
        previewContainer.style.backgroundColor = bgColorInput.value;
    }
    
    // Initial preview update
    updatePreview();
});
</script>
@endsection 