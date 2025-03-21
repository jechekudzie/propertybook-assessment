@extends('admin.layouts.app')

@section('title', 'Testimonials')

@section('header-buttons')
    <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Add New Testimonial
    </a>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        @if($testimonials->isEmpty())
            <div class="alert alert-info">
                No testimonials found. Click the "Add New Testimonial" button to create one.
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="5%">ID</th>
                            <th width="20%">Name</th>
                            <th width="15%">Position</th>
                            <th width="30%">Testimonial</th>
                            <th width="10%">Image</th>
                            <th width="10%">Order</th>
                            <th width="10%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($testimonials as $testimonial)
                            <tr>
                                <td>{{ $testimonial->id }}</td>
                                <td>{{ $testimonial->name }}</td>
                                <td>{{ $testimonial->position }}</td>
                                <td>{{ Str::limit($testimonial->testimonial, 100) }}</td>
                                <td>
                                    @if($testimonial->image)
                                        <img src="{{ asset($testimonial->image) }}" alt="{{ $testimonial->name }}" class="img-thumbnail" style="max-height: 50px;">
                                    @else
                                        <span class="text-muted">No image</span>
                                    @endif
                                </td>
                                <td>{{ $testimonial->order }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{ route('admin.testimonials.show', $testimonial->id) }}" class="btn btn-sm btn-info">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this testimonial?');">
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
            
            {{ $testimonials->links() }}
        @endif
    </div>
</div>
@endsection 