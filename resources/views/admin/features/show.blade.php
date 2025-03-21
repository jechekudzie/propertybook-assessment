@extends('admin.layouts.app')

@section('title', 'Feature Details')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Feature Details</h1>
        <div>
            <a href="{{ route('admin.features.index') }}" class="btn btn-outline-secondary me-2">
                <i class="fas fa-arrow-left"></i> Back to Features
            </a>
            <a href="{{ route('admin.features.edit', $feature->id) }}" class="btn btn-primary">
                <i class="fas fa-edit"></i> Edit
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h2 class="card-title h4 mb-0">{{ $feature->title }}</h2>
                    <span class="badge bg-{{ $feature->active ? 'success' : 'danger' }}">
                        {{ $feature->active ? 'Active' : 'Inactive' }}
                    </span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h3 class="h5 text-secondary mb-2">Tab Name:</h3>
                        <p>{{ $feature->tab_name }}</p>
                    </div>

                    <div class="mb-3">
                        <h3 class="h5 text-secondary mb-2">Description:</h3>
                        <p>{{ $feature->description }}</p>
                    </div>
                    
                    <div class="mb-3">
                        <h3 class="h5 text-secondary mb-2">Order:</h3>
                        <span class="badge bg-secondary">{{ $feature->order }}</span>
                        <small class="text-muted d-block mt-1">Lower numbers appear first</small>
                    </div>
                    
                    @if(!empty($feature->list_items) && count($feature->list_items) > 0)
                        <div class="mb-3">
                            <h3 class="h5 text-secondary mb-2">List Items:</h3>
                            <ul class="list-group list-group-flush">
                                @foreach($feature->list_items as $item)
                                    <li class="list-group-item px-0 d-flex align-items-center">
                                        <span class="me-2 text-success"><i class="fas fa-check"></i></span>
                                        {{ $item }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="card-footer bg-white">
                    <small class="text-muted">Created: {{ $feature->created_at->format('M d, Y H:i') }}</small>
                    <br>
                    <small class="text-muted">Last Updated: {{ $feature->updated_at->format('M d, Y H:i') }}</small>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <h3 class="card-title h5 mb-0">Image</h3>
                </div>
                <div class="card-body text-center">
                    @if($feature->image)
                        <img src="{{ asset($feature->image) }}" alt="{{ $feature->title }}" class="img-fluid rounded">
                        <!-- <div class="small text-muted mt-2">Path: {{ $feature->image }}</div> -->
                    @else
                        <div class="p-5 bg-light rounded">
                            <i class="fas fa-image fa-5x text-muted"></i>
                            <p class="mt-3">No image available</p>
                        </div>
                    @endif
                </div>
            </div>
            
            <!-- Danger Zone -->
            <div class="card shadow-sm border-danger">
                <div class="card-header bg-danger text-white">
                    <h3 class="card-title h5 mb-0">Danger Zone</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.features.destroy', $feature->id) }}" method="POST" 
                          onsubmit="return confirm('Are you sure you want to delete this feature? This action cannot be undone.');">
                        @csrf
                        @method('DELETE')
                        <p class="text-muted mb-3">Deleting this feature will remove it permanently from the website.</p>
                        <button type="submit" class="btn btn-danger w-100">
                            <i class="fas fa-trash-alt"></i> Delete Feature
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 