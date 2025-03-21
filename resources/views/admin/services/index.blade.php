@extends('admin.layouts.app')

@section('title', 'Services')

@section('header-buttons')
    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Add New Service
    </a>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        @if($services->isEmpty())
            <div class="alert alert-info">
                No services found. Click the "Add New Service" button to create one.
            </div>
        @else
            <div class="table-responsive">
            <table class="table table-hover datatable">
                    <thead>
                        <tr>
                            <th width="5%">ID</th>
                            <th width="20%">Title</th>
                            <th width="25%">Description</th>
                            <th width="15%">Icon</th>
                            <th width="10%">Order</th>
                            <th width="10%">Status</th>
                            <th width="15%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $service)
                            <tr>
                                <td>{{ $service->id }}</td>
                                <td>{{ $service->title }}</td>
                                <td>{{ Str::limit($service->description, 100) }}</td>
                                <td>
                                    <div class="icon-container">
                                        <i class="fas fa-{{ $service->icon }}"></i>
                                        <small class="text-muted ms-2">{{ $service->icon }}</small>
                                    </div>
                                </td>
                                <td>{{ $service->order }}</td>
                                <td>
                                    @if($service->active)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{ route('admin.services.show', $service->id) }}" class="btn btn-sm btn-info">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this service?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="pagination-links">
                {{ $services->links() }}
            </div>
        @endif
    </div>
</div>
@endsection 