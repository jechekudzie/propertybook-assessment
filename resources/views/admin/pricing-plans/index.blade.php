@extends('admin.layouts.app')

@section('title', 'Pricing Plans')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Pricing Plans</h1>
        <a href="{{ route('admin.pricing-plans.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add New Plan
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
            @if($pricingPlans->isEmpty())
                <div class="alert alert-info">
                    No pricing plans found. Click the "Add New Plan" button to create one.
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover datatable">
                        <thead>
                            <tr>
                                <th width="5%">ID</th>
                                <th width="15%">Name</th>
                                <th width="10%">Price</th>
                                <th width="15%">Interval</th>
                                <th width="10%">Featured</th>
                                <th width="10%">Order</th>
                                <th width="10%">Status</th>
                                <th width="15%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pricingPlans as $plan)
                                <tr>
                                    <td>{{ $plan->id }}</td>
                                    <td>{{ $plan->name }}</td>
                                    <td>{{ $plan->currency }}{{ number_format($plan->price, 2) }}</td>
                                    <td>{{ $plan->interval }}</td>
                                    <td>
                                        @if($plan->featured)
                                            <span class="badge bg-warning">Featured</span>
                                        @else
                                            <span class="text-muted">No</span>
                                        @endif
                                    </td>
                                    <td>{{ $plan->order }}</td>
                                    <td>
                                        @if($plan->active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.pricing-plans.edit', $plan->id) }}" class="btn btn-sm btn-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{ route('admin.pricing-plans.show', $plan->id) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <form action="{{ route('admin.pricing-plans.destroy', $plan->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this pricing plan?');">
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
                
                <div class="d-flex justify-content-center mt-4 pagination-links">
                    {{ $pricingPlans->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection 