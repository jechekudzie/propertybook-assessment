@extends('admin.layouts.app')

@section('title', 'Call to Actions')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Call to Actions</h1>
        <a href="{{ route('admin.call-to-actions.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add New CTA
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
            @if(count($callToActions) == 0)
            <div class="text-center py-4">
                <div class="mb-3">
                    <i class="fas fa-bullhorn fa-3x text-muted"></i>
                </div>
                <h4>No call to actions found</h4>
                <p class="text-muted">Add a call to action to encourage your visitors to take a specific action.</p>
                <a href="{{ route('admin.call-to-actions.create') }}" class="btn btn-primary mt-2">
                    <i class="fas fa-plus"></i> Add New CTA
                </a>
            </div>
            @else
            <div class="table-responsive">
                <table class="table table-hover datatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Button</th>
                            <th>Background</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($callToActions as $cta)
                        <tr>
                            <td>{{ $cta->id }}</td>
                            <td>{{ $cta->title }}</td>
                            <td>
                                <span class="badge bg-secondary">{{ $cta->button_text }}</span>
                                <small class="d-block text-muted mt-1">{{ $cta->button_url }}</small>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="color-sample me-2" style="width: 20px; height: 20px; border-radius: 4px; background-color: {{ $cta->background_color }};"></div>
                                    <code>{{ $cta->background_color }}</code>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-{{ $cta->active ? 'success' : 'danger' }}">
                                    {{ $cta->active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('admin.call-to-actions.edit', $cta) }}" class="btn btn-sm btn-outline-primary me-2">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="{{ route('admin.call-to-actions.show', $cta) }}" class="btn btn-sm btn-outline-info me-2">
                                        <i class="fas fa-eye"></i> View
                                    </a>
                                    <form action="{{ route('admin.call-to-actions.destroy', $cta) }}" method="POST" 
                                          onsubmit="return confirm('Are you sure you want to delete this call to action?');">
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
            
            <div class="mt-4 pagination-links">
                {{ $callToActions->links() }}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection 