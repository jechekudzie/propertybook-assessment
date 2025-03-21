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
            @if($callToActions->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Button Text</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($callToActions as $cta)
                        <tr>
                            <td>{{ $cta->title }}</td>
                            <td>{{ $cta->button_text }}</td>
                            <td>
                                <span class="badge bg-{{ $cta->active ? 'success' : 'danger' }}">
                                    {{ $cta->active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>{{ $cta->created_at->format('M d, Y') }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('admin.call-to-actions.show', $cta) }}" class="btn btn-sm btn-outline-info me-2">
                                        <i class="fas fa-eye"></i> View
                                    </a>
                                    <a href="{{ route('admin.call-to-actions.edit', $cta) }}" class="btn btn-sm btn-outline-primary me-2">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.call-to-actions.destroy', $cta) }}" method="POST" 
                                          onsubmit="return confirm('Are you sure you want to delete this Call to Action?');">
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
                {{ $callToActions->links() }}
            </div>
            @else
            <div class="text-center py-4">
                <div class="mb-3">
                    <i class="fas fa-bullhorn fa-3x text-muted"></i>
                </div>
                <h4>No Call to Actions found</h4>
                <p class="text-muted">Add your first Call to Action to encourage visitors to take action.</p>
                <a href="{{ route('admin.call-to-actions.create') }}" class="btn btn-primary mt-2">
                    <i class="fas fa-plus"></i> Add New CTA
                </a>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection 