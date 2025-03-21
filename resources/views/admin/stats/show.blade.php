@extends('admin.layouts.app')

@section('title', 'Stat Details')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Stat Details</h1>
        <div>
            <a href="{{ route('admin.stats.index') }}" class="btn btn-outline-secondary me-2">
                <i class="fas fa-arrow-left"></i> Back to Stats
            </a>
            <a href="{{ route('admin.stats.edit', $stat) }}" class="btn btn-primary">
                <i class="fas fa-edit"></i> Edit
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <!-- Stat Details -->
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <h2 class="card-title h4 mb-0">{{ $stat->title }}</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h3 class="h5 text-secondary mb-2">Value:</h3>
                                <div class="fs-4 fw-bold">
                                    @if($stat->prefix)<span class="text-muted">{{ $stat->prefix }}</span>@endif
                                    {{ $stat->value }}
                                    @if($stat->suffix)<span class="text-muted">{{ $stat->suffix }}</span>@endif
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h3 class="h5 text-secondary mb-2">Status:</h3>
                                <span class="badge bg-{{ $stat->active ? 'success' : 'danger' }} fs-6">
                                    {{ $stat->active ? 'Active' : 'Inactive' }}
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h3 class="h5 text-secondary mb-2">Icon:</h3>
                                @if($stat->icon)
                                    <div>
                                        <i class="fas fa-{{ $stat->icon }} fa-2x text-primary"></i>
                                        <code class="ms-2">fa-{{ $stat->icon }}</code>
                                    </div>
                                @else
                                    <span class="text-muted">No icon set</span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h3 class="h5 text-secondary mb-2">Order:</h3>
                                <span class="badge bg-secondary">{{ $stat->order }}</span>
                                <small class="text-muted d-block mt-1">Lower numbers appear first</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col-12">
                            <h3 class="h5 text-secondary mb-3">Preview:</h3>
                            <div class="card p-4 bg-light">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    @if($stat->icon)
                                        <i class="fas fa-{{ $stat->icon }} fa-3x text-primary mb-3"></i>
                                    @endif
                                    <h3 class="h2 fw-bold mb-1">
                                        {{ $stat->prefix }}{{ $stat->value }}{{ $stat->suffix }}
                                    </h3>
                                    <p class="mb-0 text-secondary">{{ $stat->title }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer bg-white">
                    <small class="text-muted">Created: {{ $stat->created_at->format('M d, Y H:i') }}</small>
                    <br>
                    <small class="text-muted">Last Updated: {{ $stat->updated_at->format('M d, Y H:i') }}</small>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <!-- Danger Zone -->
            <div class="card shadow-sm border-danger">
                <div class="card-header bg-danger text-white">
                    <h3 class="card-title h5 mb-0">Danger Zone</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.stats.destroy', $stat) }}" method="POST" 
                          onsubmit="return confirm('Are you sure you want to delete this stat? This action cannot be undone.');">
                        @csrf
                        @method('DELETE')
                        <p class="text-muted mb-3">Deleting this stat will remove it permanently from the website.</p>
                        <button type="submit" class="btn btn-danger w-100">
                            <i class="fas fa-trash-alt"></i> Delete Stat
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 