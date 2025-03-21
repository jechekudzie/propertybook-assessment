@extends('admin.layouts.app')

@section('title', 'Edit Feature')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Edit Feature</h1>
        <a href="{{ route('admin.features.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left"></i> Back to Features
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.features.update', $feature->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="tab_name" class="form-label">Tab Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('tab_name') is-invalid @enderror" id="tab_name" name="tab_name" value="{{ old('tab_name', $feature->tab_name) }}" required>
                    @error('tab_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">This will be displayed in the tab navigation (e.g., Modisit, Praesenti, Explica)</div>
                </div>
                
                <div class="mb-3">
                    <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $feature->title) }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" required>{{ old('description', $feature->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    @if($feature->image)
                        <div class="mb-2">
                            <img src="{{ asset($feature->image) }}" alt="{{ $feature->title }}" class="img-thumbnail" style="max-height: 150px;">
                        </div>
                    @endif
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">Recommended size: 540px × 360px. Leave empty to keep the current image.</div>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">List Items</label>
                    <div class="list-items-container">
                        @if(!empty($feature->list_items) && count($feature->list_items) > 0)
                            @foreach($feature->list_items as $index => $item)
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" name="list_items[]" value="{{ $item }}" placeholder="List item">
                                    <button type="button" class="btn btn-danger remove-list-item" {{ count($feature->list_items) == 1 ? 'disabled' : '' }}>
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            @endforeach
                        @else
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" name="list_items[]" placeholder="List item">
                                <button type="button" class="btn btn-danger remove-list-item" disabled>
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        @endif
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary mt-2" id="add-list-item">
                        <i class="fas fa-plus"></i> Add List Item
                    </button>
                    <div class="form-text">These will be displayed as bullet points in the feature</div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="order" class="form-label">Order</label>
                            <input type="number" class="form-control @error('order') is-invalid @enderror" id="order" name="order" value="{{ old('order', $feature->order) }}" min="0">
                            @error('order')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Lower numbers appear first</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <div class="form-check form-switch mt-4">
                                <input class="form-check-input" type="checkbox" role="switch" id="active" name="active" value="1" {{ old('active', $feature->active) ? 'checked' : '' }}>
                                <label class="form-check-label" for="active">Active</label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Feature
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add list item functionality
    document.getElementById('add-list-item').addEventListener('click', function() {
        const container = document.querySelector('.list-items-container');
        const newItem = document.createElement('div');
        newItem.className = 'input-group mb-2';
        newItem.innerHTML = `
            <input type="text" class="form-control" name="list_items[]" placeholder="List item">
            <button type="button" class="btn btn-danger remove-list-item">
                <i class="fas fa-times"></i>
            </button>
        `;
        container.appendChild(newItem);
        
        // Enable remove buttons when there's more than one item
        const removeButtons = document.querySelectorAll('.remove-list-item');
        if (removeButtons.length > 1) {
            removeButtons.forEach(btn => btn.disabled = false);
        }
    });
    
    // Remove list item functionality
    document.querySelector('.list-items-container').addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-list-item') || e.target.closest('.remove-list-item')) {
            const button = e.target.classList.contains('remove-list-item') ? e.target : e.target.closest('.remove-list-item');
            button.closest('.input-group').remove();
            
            // If only one item remains, disable its remove button
            const removeButtons = document.querySelectorAll('.remove-list-item');
            if (removeButtons.length === 1) {
                removeButtons[0].disabled = true;
            }
        }
    });
});
</script>
@endpush 