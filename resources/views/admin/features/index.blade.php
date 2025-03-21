@extends('admin.layouts.app')

@section('title', 'Features')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Features</h1>
        <a href="{{ route('admin.features.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add New Feature
        </a>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            @if($features->isEmpty())
            <div class="text-center py-4">
                <div class="mb-3">
                    <i class="fas fa-cubes fa-3x text-muted"></i>
                </div>
                <h4>No features found</h4>
                <p class="text-muted">Add your first feature to showcase your product capabilities.</p>
                <a href="{{ route('admin.features.create') }}" class="btn btn-primary mt-2">
                    <i class="fas fa-plus"></i> Add New Feature
                </a>
            </div>
            @else
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Tab Name</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($features as $feature)
                        <tr>
                            <td>{{ $feature->tab_name }}</td>
                            <td>{{ $feature->title }}</td>
                            <td>
                                @if($feature->image)
                                <img src="{{ asset($feature->image) }}" alt="{{ $feature->title }}" width="50" height="50" class="img-thumbnail">
                                @else
                                <span class="text-muted">No image</span>
                                @endif
                            </td>
                            <td>{{ $feature->order }}</td>
                            <td>
                                <span class="badge bg-{{ $feature->active ? 'success' : 'danger' }}">
                                    {{ $feature->active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('admin.features.show', $feature) }}" class="btn btn-sm btn-outline-info me-2">
                                        <i class="fas fa-eye"></i> View
                                    </a>
                                    <a href="{{ route('admin.features.edit', $feature) }}" class="btn btn-sm btn-outline-primary me-2">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.features.destroy', $feature) }}" method="POST" 
                                          onsubmit="return confirm('Are you sure you want to delete this feature?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="fas fa-trash-alt"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="mt-4">
                {{ $features->links() }}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection 