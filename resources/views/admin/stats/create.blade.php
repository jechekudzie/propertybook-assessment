@extends('admin.layouts.app')

@section('title', 'Add New Stat')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Add New Stat</h1>
        <a href="{{ route('admin.stats.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left"></i> Back to Stats
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-4">
            <form action="{{ route('admin.stats.store') }}" method="POST">
                @csrf
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="label" class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('label') is-invalid @enderror" id="label" name="label" 
                                value="{{ old('label') }}" required>
                            @error('label')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">E.g., "Happy Clients", "Projects Completed"</small>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="icon" class="form-label">Icon</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-icons"></i></span>
                                <input type="text" class="form-control @error('icon') is-invalid @enderror" id="icon" name="icon" 
                                    value="{{ old('icon') }}">
                            </div>
                            @error('icon')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">Enter a FontAwesome icon name (e.g., users, trophy, globe)</small>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="prefix" class="form-label">Prefix</label>
                            <input type="text" class="form-control @error('prefix') is-invalid @enderror" id="prefix" name="prefix" 
                                value="{{ old('prefix') }}">
                            @error('prefix')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">E.g., "$", "+", "~"</small>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="value" class="form-label">Value <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('value') is-invalid @enderror" id="value" name="value" 
                                value="{{ old('value') }}" required>
                            @error('value')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">E.g., "500", "1,000", "4.5"</small>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="suffix" class="form-label">Suffix</label>
                            <input type="text" class="form-control @error('suffix') is-invalid @enderror" id="suffix" name="suffix" 
                                value="{{ old('suffix') }}">
                            @error('suffix')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">E.g., "+", "%", "K"</small>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="order" class="form-label">Order</label>
                            <input type="number" class="form-control @error('order') is-invalid @enderror" id="order" name="order" 
                                value="{{ old('order', 0) }}" min="0">
                            @error('order')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">Lower numbers appear first</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <div class="form-check form-switch mt-4">
                                <input class="form-check-input" type="checkbox" role="switch" id="active" name="active" value="1" {{ old('active', '1') == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="active">Active</label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label class="form-label">Preview</label>
                    <div class="card p-3 bg-light">
                        <div class="d-flex align-items-center justify-content-center mb-2">
                            <i id="preview-icon" class="fas fa-3x text-primary"></i>
                        </div>
                        <div class="text-center">
                            <h3 id="preview-value" class="h2 fw-bold mb-0">
                                <span id="preview-prefix"></span><span id="preview-number">0</span><span id="preview-suffix"></span>
                            </h3>
                            <p id="preview-title" class="mb-0 text-secondary">Title</p>
                        </div>
                    </div>
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Save Stat
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const iconInput = document.getElementById('icon');
    const labelInput = document.getElementById('label');
    const valueInput = document.getElementById('value');
    const prefixInput = document.getElementById('prefix');
    const suffixInput = document.getElementById('suffix');
    
    const previewIcon = document.getElementById('preview-icon');
    const previewTitle = document.getElementById('preview-title');
    const previewNumber = document.getElementById('preview-number');
    const previewPrefix = document.getElementById('preview-prefix');
    const previewSuffix = document.getElementById('preview-suffix');
    
    // Update preview when inputs change
    function updatePreview() {
        // Update icon
        if (iconInput.value) {
            previewIcon.className = 'fas fa-' + iconInput.value + ' fa-3x text-primary';
        } else {
            previewIcon.className = 'fas fa-chart-bar fa-3x text-primary'; // Default icon
        }
        
        // Update title
        previewTitle.textContent = labelInput.value || 'Title';
        
        // Update value
        previewNumber.textContent = valueInput.value || '0';
        
        // Update prefix and suffix
        previewPrefix.textContent = prefixInput.value || '';
        previewSuffix.textContent = suffixInput.value || '';
    }
    
    // Add event listeners
    iconInput.addEventListener('input', updatePreview);
    labelInput.addEventListener('input', updatePreview);
    valueInput.addEventListener('input', updatePreview);
    prefixInput.addEventListener('input', updatePreview);
    suffixInput.addEventListener('input', updatePreview);
    
    // Initial update
    updatePreview();
});
</script>
@endsection 