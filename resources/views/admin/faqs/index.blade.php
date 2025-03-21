@extends('admin.layouts.app')

@section('title', 'Manage FAQs')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Manage FAQs</h1>
        <a href="{{ route('admin.faqs.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add New FAQ
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
            @if($faqs->isEmpty())
            <div class="text-center py-4">
                <div class="mb-3">
                    <i class="fas fa-question-circle fa-3x text-muted"></i>
                </div>
                <h4>No FAQs found</h4>
                <p class="text-muted">Add your first FAQ to help your users find answers to common questions.</p>
                <a href="{{ route('admin.faqs.create') }}" class="btn btn-primary mt-2">
                    <i class="fas fa-plus"></i> Add New FAQ
                </a>
            </div>
            @else
            <div class="table-responsive">
                <table class="table table-hover datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($faqs as $faq)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ Str::limit($faq->question, 50) }}</td>
                                <td>{{ Str::limit($faq->answer, 70) }}</td>
                                <td>{{ $faq->order }}</td>
                                <td>
                                    <span class="badge bg-{{ $faq->active ? 'success' : 'danger' }}">
                                        {{ $faq->active ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('admin.faqs.show', $faq) }}" class="btn btn-sm btn-outline-info me-2">
                                            <i class="fas fa-eye"></i> View
                                        </a>
                                        <a href="{{ route('admin.faqs.edit', $faq) }}" class="btn btn-sm btn-outline-primary me-2">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('admin.faqs.destroy', $faq) }}" method="POST" 
                                              onsubmit="return confirm('Are you sure you want to delete this FAQ?');">
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
                {{ $faqs->links() }}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection 