@extends('admin.layouts.app')

@section('title', 'Stats & Counters')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Stats & Counters</h1>
        <a href="{{ route('admin.stats.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add New Stat
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
            @if($stats->isEmpty())
                <div class="text-center py-4">
                    <div class="mb-3">
                        <i class="fas fa-chart-bar fa-3x text-muted"></i>
                    </div>
                    <h4>No stats found</h4>
                    <p class="text-muted">Add your first stat to showcase important metrics to your users.</p>
                    <a href="{{ route('admin.stats.create') }}" class="btn btn-primary mt-2">
                        <i class="fas fa-plus"></i> Add New Stat
                    </a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Value</th>
                                <th>Icon</th>
                                <th>Order</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($stats as $stat)
                                <tr>
                                    <td>{{ $stat->id }}</td>
                                    <td>{{ $stat->title }}</td>
                                    <td>
                                        @if($stat->prefix)<span class="text-muted">{{ $stat->prefix }}</span>@endif
                                        <strong>{{ $stat->value }}</strong>
                                        @if($stat->suffix)<span class="text-muted">{{ $stat->suffix }}</span>@endif
                                    </td>
                                    <td>
                                        @if($stat->icon)
                                            <i class="fas fa-{{ $stat->icon }}"></i> <code>fa-{{ $stat->icon }}</code>
                                        @else
                                            <span class="text-muted">None</span>
                                        @endif
                                    </td>
                                    <td>{{ $stat->order }}</td>
                                    <td>
                                        @if($stat->active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('admin.stats.edit', $stat->id) }}" class="btn btn-sm btn-outline-primary me-2">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a href="{{ route('admin.stats.show', $stat->id) }}" class="btn btn-sm btn-outline-info me-2">
                                                <i class="fas fa-eye"></i> View
                                            </a>
                                            <form action="{{ route('admin.stats.destroy', $stat->id) }}" method="POST" 
                                                onsubmit="return confirm('Are you sure you want to delete this stat?');">
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
                    {{ $stats->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection 