@extends('admin.layouts.app')

@section('title', 'Add New Contact')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Add New Contact</h1>
        <a href="{{ route('admin.contacts.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left"></i> Back to Contacts
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.contacts.store') }}" method="POST">
                @csrf
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror" rows="3">{{ old('address') }}</textarea>
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <div class="mb-3">
                            <label for="phone1" class="form-label">Primary Phone Number</label>
                            <input type="text" name="phone1" id="phone1" class="form-control @error('phone1') is-invalid @enderror" value="{{ old('phone1') }}">
                            @error('phone1')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="phone2" class="form-label">Secondary Phone Number (Optional)</label>
                            <input type="text" name="phone2" id="phone2" class="form-control @error('phone2') is-invalid @enderror" value="{{ old('phone2') }}">
                            @error('phone2')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="email1" class="form-label">Primary Email</label>
                        <input type="email" name="email1" id="email1" class="form-control @error('email1') is-invalid @enderror" value="{{ old('email1') }}">
                        @error('email1')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="email2" class="form-label">Secondary Email (Optional)</label>
                        <input type="email" name="email2" id="email2" class="form-control @error('email2') is-invalid @enderror" value="{{ old('email2') }}">
                        @error('email2')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <h4 class="h5 mt-4 mb-3">Social Media Links</h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="social_facebook" class="form-label">
                            <i class="fab fa-facebook text-primary"></i> Facebook
                        </label>
                        <input type="url" name="social_facebook" id="social_facebook" class="form-control @error('social_facebook') is-invalid @enderror" value="{{ old('social_facebook') }}" placeholder="https://facebook.com/yourpage">
                        @error('social_facebook')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="social_twitter" class="form-label">
                            <i class="fab fa-twitter text-info"></i> Twitter
                        </label>
                        <input type="url" name="social_twitter" id="social_twitter" class="form-control @error('social_twitter') is-invalid @enderror" value="{{ old('social_twitter') }}" placeholder="https://twitter.com/yourusername">
                        @error('social_twitter')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="social_instagram" class="form-label">
                            <i class="fab fa-instagram text-danger"></i> Instagram
                        </label>
                        <input type="url" name="social_instagram" id="social_instagram" class="form-control @error('social_instagram') is-invalid @enderror" value="{{ old('social_instagram') }}" placeholder="https://instagram.com/yourusername">
                        @error('social_instagram')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="social_linkedin" class="form-label">
                            <i class="fab fa-linkedin text-primary"></i> LinkedIn
                        </label>
                        <input type="url" name="social_linkedin" id="social_linkedin" class="form-control @error('social_linkedin') is-invalid @enderror" value="{{ old('social_linkedin') }}" placeholder="https://linkedin.com/in/yourusername">
                        @error('social_linkedin')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input @error('active') is-invalid @enderror" id="active" name="active" value="1" {{ old('active', '1') == '1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="active">Active</label>
                        @error('active')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i> Save Contact
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection 