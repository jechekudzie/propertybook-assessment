@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Welcome to iLanding Admin Panel</h5>
                <p class="card-text">Use the sidebar navigation to manage your website content.</p>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card bg-primary text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-white">Features</h6>
                        <h2 class="mb-0">{{ $counts['features'] }}</h2>
                    </div>
                    <i class="fas fa-star fa-2x opacity-50"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="{{ route('admin.features.index') }}" class="text-white text-decoration-none">View Details</a>
                <i class="fas fa-arrow-circle-right text-white"></i>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card bg-success text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-white">Services</h6>
                        <h2 class="mb-0">{{ $counts['services'] }}</h2>
                    </div>
                    <i class="fas fa-tools fa-2x opacity-50"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="{{ route('admin.services.index') }}" class="text-white text-decoration-none">View Details</a>
                <i class="fas fa-arrow-circle-right text-white"></i>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card bg-warning text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-white">Testimonials</h6>
                        <h2 class="mb-0">{{ $counts['testimonials'] }}</h2>
                    </div>
                    <i class="fas fa-quote-left fa-2x opacity-50"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="{{ route('admin.testimonials.index') }}" class="text-white text-decoration-none">View Details</a>
                <i class="fas fa-arrow-circle-right text-white"></i>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card bg-danger text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-white">Pricing Plans</h6>
                        <h2 class="mb-0">{{ $counts['pricing_plans'] }}</h2>
                    </div>
                    <i class="fas fa-tags fa-2x opacity-50"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="{{ route('admin.pricing-plans.index') }}" class="text-white text-decoration-none">View Details</a>
                <i class="fas fa-arrow-circle-right text-white"></i>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card bg-info text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-white">FAQs</h6>
                        <h2 class="mb-0">{{ $counts['faqs'] }}</h2>
                    </div>
                    <i class="fas fa-question-circle fa-2x opacity-50"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="{{ route('admin.faqs.index') }}" class="text-white text-decoration-none">View Details</a>
                <i class="fas fa-arrow-circle-right text-white"></i>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card bg-secondary text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-white">Stats</h6>
                        <h2 class="mb-0">{{ $counts['stats'] }}</h2>
                    </div>
                    <i class="fas fa-chart-bar fa-2x opacity-50"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="{{ route('admin.stats.index') }}" class="text-white text-decoration-none">View Details</a>
                <i class="fas fa-arrow-circle-right text-white"></i>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card bg-dark text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-white">Contact Info</h6>
                        <h2 class="mb-0">{{ $counts['contacts'] }}</h2>
                    </div>
                    <i class="fas fa-address-book fa-2x opacity-50"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="{{ route('admin.contacts.index') }}" class="text-white text-decoration-none">View Details</a>
                <i class="fas fa-arrow-circle-right text-white"></i>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card bg-primary text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-white">Call to Action</h6>
                        <h2 class="mb-0">{{ $counts['call_to_actions'] }}</h2>
                    </div>
                    <i class="fas fa-bullhorn fa-2x opacity-50"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="{{ route('admin.call-to-actions.index') }}" class="text-white text-decoration-none">View Details</a>
                <i class="fas fa-arrow-circle-right text-white"></i>
            </div>
        </div>
    </div>
</div>
@endsection 