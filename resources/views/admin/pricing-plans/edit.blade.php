@extends('admin.layouts.app')

@section('title', 'Edit Pricing Plan')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Edit Pricing Plan</h1>
        <a href="{{ route('admin.pricing-plans.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left"></i> Back to Pricing Plans
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-4">
            <form action="{{ route('admin.pricing-plans.update', $pricingPlan) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Plan Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" 
                                value="{{ old('name', $pricingPlan->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="interval" class="form-label">Billing Interval <span class="text-danger">*</span></label>
                            <select class="form-select @error('interval') is-invalid @enderror" id="interval" name="interval" required>
                                <option value="per month" {{ old('interval', $pricingPlan->interval) == 'per month' ? 'selected' : '' }}>Per Month</option>
                                <option value="per year" {{ old('interval', $pricingPlan->interval) == 'per year' ? 'selected' : '' }}>Per Year</option>
                                <option value="lifetime" {{ old('interval', $pricingPlan->interval) == 'lifetime' ? 'selected' : '' }}>Lifetime</option>
                                <option value="per day" {{ old('interval', $pricingPlan->interval) == 'per day' ? 'selected' : '' }}>Per Day</option>
                                <option value="per week" {{ old('interval', $pricingPlan->interval) == 'per week' ? 'selected' : '' }}>Per Week</option>
                                <option value="one-time" {{ old('interval', $pricingPlan->interval) == 'one-time' ? 'selected' : '' }}>One-Time</option>
                            </select>
                            @error('interval')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="price" class="form-label">Price <span class="text-danger">*</span></label>
                            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" 
                                value="{{ old('price', $pricingPlan->price) }}" required min="0">
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="currency" class="form-label">Currency Symbol <span class="text-danger">*</span></label>
                            <select class="form-select @error('currency') is-invalid @enderror" id="currency" name="currency" required>
                                <option value="$" {{ old('currency', $pricingPlan->currency) == '$' ? 'selected' : '' }}>$ (USD)</option>
                                <option value="€" {{ old('currency', $pricingPlan->currency) == '€' ? 'selected' : '' }}>€ (EUR)</option>
                                <option value="£" {{ old('currency', $pricingPlan->currency) == '£' ? 'selected' : '' }}>£ (GBP)</option>
                                <option value="¥" {{ old('currency', $pricingPlan->currency) == '¥' ? 'selected' : '' }}>¥ (JPY/CNY)</option>
                                <option value="₹" {{ old('currency', $pricingPlan->currency) == '₹' ? 'selected' : '' }}>₹ (INR)</option>
                                <option value="R" {{ old('currency', $pricingPlan->currency) == 'R' ? 'selected' : '' }}>R (ZAR)</option>
                                <option value="A$" {{ old('currency', $pricingPlan->currency) == 'A$' ? 'selected' : '' }}>A$ (AUD)</option>
                                <option value="C$" {{ old('currency', $pricingPlan->currency) == 'C$' ? 'selected' : '' }}>C$ (CAD)</option>
                            </select>
                            @error('currency')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" 
                        rows="3">{{ old('description', $pricingPlan->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="button_text" class="form-label">Button Text</label>
                            <input type="text" class="form-control @error('button_text') is-invalid @enderror" id="button_text" name="button_text" 
                                value="{{ old('button_text', $pricingPlan->button_text) }}">
                            @error('button_text')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="button_url" class="form-label">Button URL</label>
                            <input type="text" class="form-control @error('button_url') is-invalid @enderror" id="button_url" name="button_url" 
                                value="{{ old('button_url', $pricingPlan->button_url) }}">
                            @error('button_url')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label class="form-label">Plan Features</label>
                    <p class="text-muted small">Add up to 10 features that will be displayed in the pricing plan.</p>
                    
                    <div id="features-container">
                        @php
                            $features = old('features', $pricingPlan->features);
                            // Check if features is already an array, if not and it's a string, decode it
                            if (!is_array($features) && is_string($features)) {
                                $features = json_decode($features, true);
                            }
                            // If still not an array (null or other type), set it to empty array
                            if (!is_array($features)) {
                                $features = [];
                            }
                            $featureCount = count($features);
                        @endphp
                        
                        @forelse($features as $index => $feature)
                            <div class="input-group mb-2">
                                <span class="input-group-text"><i class="fas fa-check"></i></span>
                                <input type="text" name="features[]" class="form-control" placeholder="Feature {{ $index + 1 }}" 
                                    value="{{ $feature }}">
                                <button type="button" class="btn btn-outline-danger remove-feature"><i class="fas fa-times"></i></button>
                            </div>
                        @empty
                            @for($i = 0; $i < 5; $i++)
                                <div class="input-group mb-2">
                                    <span class="input-group-text"><i class="fas fa-check"></i></span>
                                    <input type="text" name="features[]" class="form-control" placeholder="Feature {{ $i + 1 }}">
                                    <button type="button" class="btn btn-outline-danger remove-feature"><i class="fas fa-times"></i></button>
                                </div>
                            @endfor
                        @endforelse
                    </div>
                    
                    <button type="button" id="add-feature" class="btn btn-sm btn-outline-secondary mt-2" 
                        {{ $featureCount >= 10 ? 'disabled' : '' }}>
                        <i class="fas fa-plus"></i> Add Feature
                    </button>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="order" class="form-label">Order</label>
                            <input type="number" class="form-control @error('order') is-invalid @enderror" id="order" name="order" 
                                value="{{ old('order', $pricingPlan->order) }}" min="0">
                            @error('order')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">Lower numbers appear first</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-check form-switch mt-4">
                                <input class="form-check-input" type="checkbox" role="switch" id="featured" name="featured" value="1"
                                    {{ old('featured', $pricingPlan->featured) ? 'checked' : '' }}>
                                <label class="form-check-label" for="featured">Featured Plan</label>
                            </div>
                            <small class="text-muted">Highlighted in the pricing section</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-check form-switch mt-4">
                                <input class="form-check-input" type="checkbox" role="switch" id="active" name="active" value="1"
                                    {{ old('active', $pricingPlan->active) ? 'checked' : '' }}>
                                <label class="form-check-label" for="active">Active</label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Pricing Plan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const container = document.getElementById('features-container');
    const addButton = document.getElementById('add-feature');
    let featureCount = container.querySelectorAll('.input-group').length;
    
    // Add new feature field
    addButton.addEventListener('click', function() {
        if (featureCount < 10) {
            const newFeature = document.createElement('div');
            newFeature.className = 'input-group mb-2';
            newFeature.innerHTML = `
                <span class="input-group-text"><i class="fas fa-check"></i></span>
                <input type="text" name="features[]" class="form-control" placeholder="Feature ${featureCount + 1}">
                <button type="button" class="btn btn-outline-danger remove-feature"><i class="fas fa-times"></i></button>
            `;
            container.appendChild(newFeature);
            featureCount++;
            
            // Disable add button if we reach the limit
            if (featureCount >= 10) {
                addButton.disabled = true;
            }
        }
    });
    
    // Remove feature field
    container.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-feature') || e.target.parentElement.classList.contains('remove-feature')) {
            const button = e.target.closest('.remove-feature');
            const group = button.closest('.input-group');
            group.remove();
            featureCount--;
            
            // Re-enable add button if we're below the limit
            if (featureCount < 10) {
                addButton.disabled = false;
            }
            
            // Update placeholders
            const inputs = container.querySelectorAll('input[name="features[]"]');
            inputs.forEach((input, index) => {
                input.placeholder = `Feature ${index + 1}`;
            });
        }
    });
});
</script>
@endsection 