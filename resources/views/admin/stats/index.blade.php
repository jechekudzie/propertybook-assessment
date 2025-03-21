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
                <div class="alert alert-info">
                    No stats found. Click the "Add New Stat" button to create one.
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="5%">ID</th>
                                <th width="20%">Title</th>
                                <th width="20%">Value</th>
                                <th width="15%">Icon</th>
                                <th width="10%">Order</th>
                                <th width="10%">Status</th>
                                <th width="20%">Actions</th>
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
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.stats.edit', $stat->id) }}" class="btn btn-sm btn-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{ route('admin.stats.show', $stat->id) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <form action="{{ route('admin.stats.destroy', $stat->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this stat?');">
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
                
                <div class="d-flex justify-content-center mt-4">
                    {{ $stats->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection 