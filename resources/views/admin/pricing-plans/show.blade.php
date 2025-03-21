@extends('admin.layouts.app')

@section('title', 'Pricing Plan Details')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Pricing Plan Details</h1>
        <div>
            <a href="{{ route('admin.pricing-plans.index') }}" class="btn btn-outline-secondary me-2">
                <i class="fas fa-arrow-left"></i> Back to Pricing Plans
            </a>
            <a href="{{ route('admin.pricing-plans.edit', $pricingPlan) }}" class="btn btn-primary">
                <i class="fas fa-edit"></i> Edit
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <!-- Plan Details -->
            <div class="card shadow-sm mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h2 class="card-title h4 mb-0">{{ $pricingPlan->name }}</h2>
                    <div>
                        @if($pricingPlan->featured)
                            <span class="badge bg-warning">Featured</span>
                        @endif
                        <span class="badge bg-{{ $pricingPlan->active ? 'success' : 'danger' }}">
                            {{ $pricingPlan->active ? 'Active' : 'Inactive' }}
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h3 class="h5 text-secondary mb-2">Price:</h3>
                            <div class="fs-4 fw-bold">{{ $pricingPlan->currency }}{{ number_format($pricingPlan->price, 2) }} 
                                <span class="fs-6 fw-normal text-muted">{{ $pricingPlan->interval }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="h5 text-secondary mb-2">Order:</h3>
                            <span class="badge bg-secondary">{{ $pricingPlan->order }}</span>
                            <small class="text-muted d-block mt-1">Lower numbers appear first</small>
                        </div>
                    </div>
                    
                    @if($pricingPlan->description)
                    <div class="mb-4">
                        <h3 class="h5 text-secondary mb-2">Description:</h3>
                        <p>{{ $pricingPlan->description }}</p>
                    </div>
                    @endif
                    
                    @if($pricingPlan->button_text && $pricingPlan->button_url)
                    <div class="mb-4">
                        <h3 class="h5 text-secondary mb-2">Call to Action:</h3>
                        <a href="{{ $pricingPlan->button_url }}" target="_blank" class="btn btn-primary">
                            {{ $pricingPlan->button_text }}
                        </a>
                        <small class="text-muted d-block mt-2">URL: {{ $pricingPlan->button_url }}</small>
                    </div>
                    @endif
                </div>
                <div class="card-footer bg-white">
                    <small class="text-muted">Created: {{ $pricingPlan->created_at->format('M d, Y H:i') }}</small>
                    <br>
                    <small class="text-muted">Last Updated: {{ $pricingPlan->updated_at->format('M d, Y H:i') }}</small>
                </div>
            </div>
        </div>
        
        <div class="col-md-5">
            <!-- Features List -->
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <h3 class="card-title h5 mb-0">Plan Features</h3>
                </div>
                <div class="card-body">
                    @if($pricingPlan->features)
                        @php
                            $features = json_decode($pricingPlan->features, true);
                        @endphp
                        
                        @if(count($features) > 0)
                            <ul class="list-group list-group-flush">
                                @foreach($features as $feature)
                                    <li class="list-group-item px-0 d-flex align-items-center">
                                        <span class="me-2 text-success"><i class="fas fa-check"></i></span>
                                        {{ $feature }}
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-muted">No features specified for this plan.</p>
                        @endif
                    @else
                        <p class="text-muted">No features specified for this plan.</p>
                    @endif
                </div>
            </div>
            
            <!-- Danger Zone -->
            <div class="card shadow-sm border-danger">
                <div class="card-header bg-danger text-white">
                    <h3 class="card-title h5 mb-0">Danger Zone</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.pricing-plans.destroy', $pricingPlan) }}" method="POST" 
                          onsubmit="return confirm('Are you sure you want to delete this pricing plan? This action cannot be undone.');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">
                            <i class="fas fa-trash-alt"></i> Delete Pricing Plan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 