@extends('admin.layouts.app')

@section('title', 'Service Details')

@section('header-buttons')
    <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Back to Services
    </a>
    <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-primary">
        <i class="fas fa-edit"></i> Edit Service
    </a>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h5 class="card-title">{{ $service->title }}</h5>
                
                <div class="mb-4">
                    <span class="badge {{ $service->active ? 'bg-success' : 'bg-danger' }}">
                        {{ $service->active ? 'Active' : 'Inactive' }}
                    </span>
                    <span class="badge bg-secondary">Order: {{ $service->order }}</span>
                    <span class="badge bg-info">Created: {{ $service->created_at->format('M d, Y') }}</span>
                </div>
                
                <div class="mb-4">
                    <h6>Description:</h6>
                    <p>{{ $service->description }}</p>
                </div>
                
                <div class="mb-4">
                    <h6>Link:</h6>
                    @if($service->link_text && $service->link_url)
                        <a href="{{ $service->link_url }}" target="_blank" class="btn btn-sm btn-outline-primary">
                            {{ $service->link_text }} <i class="fas fa-external-link-alt ms-1"></i>
                        </a>
                    @else
                        <p class="text-muted">No link specified</p>
                    @endif
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="text-center mb-4">
                    <h6>Icon Preview</h6>
                    <div class="d-inline-block p-4 mt-2 rounded" style="background-color: {{ $service->background_color }};">
                        <i class="fas fa-{{ $service->icon }} fa-3x" style="color: {{ $service->icon_color }};"></i>
                    </div>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>Icon</th>
                            <td><code>fa-{{ $service->icon }}</code></td>
                        </tr>
                        <tr>
                            <th>Icon Color</th>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="color-box me-2" style="width: 20px; height: 20px; background-color: {{ $service->icon_color }}; border: 1px solid #ddd;"></div>
                                    <code>{{ $service->icon_color }}</code>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Background Color</th>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="color-box me-2" style="width: 20px; height: 20px; background-color: {{ $service->background_color }}; border: 1px solid #ddd;"></div>
                                    <code>{{ $service->background_color }}</code>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-4">
    <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this service? This action cannot be undone.');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">
            <i class="fas fa-trash"></i> Delete Service
        </button>
    </form>
</div>
@endsection 