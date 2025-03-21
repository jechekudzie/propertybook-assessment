<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iLanding</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #0d6efd;
            --secondary-color: #f8f9fa;
        }

        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        .hero-section {
            background-color: #f8f9fa;
            padding: 100px 0;
        }

        .feature-box {
            padding: 30px;
            border-radius: 10px;
            transition: all 0.3s ease;
            height: 100%;
        }

        .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .feature-icon {
            font-size: 2rem;
            margin-bottom: 20px;
            color: var(--primary-color);
        }

        .testimonial-card {
            padding: 30px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }

        .testimonial-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }

        .cta-section {
            background-color: var(--primary-color);
            color: white;
            padding: 80px 0;
        }

        .pricing-card {
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
            margin-bottom: 30px;
            height: 100%;
        }

        .pricing-card:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .pricing-header {
            background-color: var(--primary-color);
            color: white;
            padding: 20px;
            text-align: center;
        }

        .pricing-features {
            padding: 20px;
        }

        .contact-info {
            background-color: var(--primary-color);
            color: white;
            padding: 30px;
            border-radius: 10px;
        }

        .stats-box {
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .footer {
            background-color: #212529;
            color: #fff;
            padding: 60px 0 20px;
        }

        .footer-links h5 {
            margin-bottom: 20px;
            font-weight: 600;
        }

        .footer-links ul {
            list-style: none;
            padding-left: 0;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #adb5bd;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-links a:hover {
            color: #fff;
        }

        /* Custom Tab Styling */
        .features-tabs .nav-pills {
            display: inline-flex;
            background-color: #f8f9fa;
            border-radius: 50px;
            padding: 5px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .features-tabs .nav-pills .nav-link {
            border-radius: 50px;
            color: #495057;
            font-weight: 500;
            margin: 0 5px;
            padding: 10px 25px;
            transition: all 0.3s ease;
        }

        .features-tabs .nav-pills .nav-link.active {
            background-color: #0d6efd;
            color: #fff;
            box-shadow: 0 5px 15px rgba(13, 110, 253, 0.2);
        }

        .features-tabs .nav-pills .nav-link:not(.active):hover {
            background-color: rgba(13, 110, 253, 0.1);
        }

        .tab-content {
            padding: 30px 0;
            margin-top: 20px;
        }

        .check-list-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .check-list-item i {
            color: var(--primary-color);
            margin-right: 10px;
        }

        /* Footer Links Styling */
        footer .list-unstyled li a {
            color: #6c757d;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
            padding-left: 15px;
        }

        footer .list-unstyled li a:before {
            content: "→";
            position: absolute;
            left: 0;
            opacity: 0;
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        footer .list-unstyled li a:hover {
            color: #0d6efd;
            padding-left: 20px;
        }

        footer .list-unstyled li a:hover:before {
            opacity: 1;
            transform: translateX(3px);
        }

        /* Social Media Icons Styling */
        footer .d-flex a.rounded-circle {
            transition: all 0.3s ease;
            text-decoration: none;
        }

        footer .d-flex a.rounded-circle:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-decoration: none;
        }

        footer .d-flex a.rounded-circle:hover i.fa-twitter {
            color: #1DA1F2 !important;
        }

        footer .d-flex a.rounded-circle:hover i.fa-facebook-f {
            color: #4267B2 !important;
        }

        footer .d-flex a.rounded-circle:hover i.fa-instagram {
            color: #E1306C !important;
        }

        footer .d-flex a.rounded-circle:hover i.fa-linkedin-in {
            color: #0077B5 !important;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">iLanding</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn btn-primary d-none d-lg-block">Get Started</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section pt-5 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="bg-primary bg-opacity-10 text-primary d-inline-block px-3 py-1 rounded-pill mb-4">
                        <i class="fas fa-cog me-2"></i>Working for your success
                    </div>
                    <h1 class="display-4 fw-bold mb-4">Maecenas Vitae Consectetur Led <span class="text-primary">Vestibulum Ante</span></h1>
                    <p class="lead mb-4">Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="btn btn-primary btn-lg">Get Started</a>
                        <a href="#" class="btn btn-outline-secondary btn-lg d-flex align-items-center">
                            <div class="rounded-circle bg-light d-flex align-items-center justify-content-center me-2" style="width: 24px; height: 24px;">
                                <i class="fas fa-play text-primary" style="font-size: 10px;"></i>
                            </div>
                            Play Video
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{asset('images/aerial-view-african-descent-woman-working-computer-white-table-office.jpg')}}" alt="Hero Image" class="img-fluid rounded">
                </div>
            </div>
        </div>

         <!-- Metrics Section -->
        <div class="container mt-5">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body py-5">
                    <div class="row justify-content-between text-center">
                        <div class="col-md-3 mb-4 mb-md-0">
                            <div class="d-flex justify-content-center">
                                <div class="bg-primary bg-opacity-10 rounded-circle p-3 mb-3">
                                    <i class="fas fa-trophy text-primary fa-2x"></i>
                                </div>
                            </div>
                            <h3 class="fw-bold">3x Won Awards</h3>
                            <p class="text-muted mb-0">Vestibulum ante ipsum</p>
                        </div>

                        <div class="col-md-3 mb-4 mb-md-0">
                            <div class="d-flex justify-content-center">
                                <div class="bg-primary bg-opacity-10 rounded-circle p-3 mb-3">
                                    <i class="fas fa-briefcase text-primary fa-2x"></i>
                                </div>
                            </div>
                            <h3 class="fw-bold">6.5k Faucibus</h3>
                            <p class="text-muted mb-0">Nullam quis ante</p>
                        </div>

                        <div class="col-md-3 mb-4 mb-md-0">
                            <div class="d-flex justify-content-center">
                                <div class="bg-primary bg-opacity-10 rounded-circle p-3 mb-3">
                                    <i class="fas fa-chart-line text-primary fa-2x"></i>
                                </div>
                            </div>
                            <h3 class="fw-bold">80k Mauris</h3>
                            <p class="text-muted mb-0">Etiam sit amet orci</p>
                        </div>

                        <div class="col-md-3 mb-4 mb-md-0">
                            <div class="d-flex justify-content-center">
                                <div class="bg-primary bg-opacity-10 rounded-circle p-3 mb-3">
                                    <i class="fas fa-lightbulb text-primary fa-2x"></i>
                                </div>
                            </div>
                            <h3 class="fw-bold">6x Phasellus</h3>
                            <p class="text-muted mb-0">Vestibulum ante ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5 my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="text-primary mb-3">MORE ABOUT US</div>
                    <h2 class="display-5 fw-bold mb-4">Voluptas enim suscipit temporibus</h2>
                    <p class="text-muted mb-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary rounded-circle p-2 me-3 text-white">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>Lorem ipsum dolor sit amet</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary rounded-circle p-2 me-3 text-white">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>Consectetur adipiscing elit</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary rounded-circle p-2 me-3 text-white">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>Sed do eiusmod tempor</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary rounded-circle p-2 me-3 text-white">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>Incididunt ut labore et</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary rounded-circle p-2 me-3 text-white">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>Dolore magna aliqua</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary rounded-circle p-2 me-3 text-white">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>Ut enim ad minim veniam</span>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-4">
                        <img style="width: 150px;" src="{{asset('images/handsome-young-businessman-suit.jpg')}}" alt="CEO" class="img-responsive rounded-circle me-3">
                        <div>
                            <h5 class="mb-0">Mario Smith</h5>
                            <p class="text-primary mb-0">CEO & Founder</p>
                        </div>
                        <div class="ms-auto">
                            <div class="d-flex align-items-center">
                                <div class="text-muted small">Call us anytime</div>
                                <div class="ms-3">
                                    <a href="tel:+123456789" class="text-dark fw-bold text-decoration-none">
                                        <i class="fas fa-phone-alt bg-primary text-white p-2 rounded-circle me-2"></i>
                                        +123 456-789
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 position-relative">
                    <div class="position-relative rounded overflow-hidden">
                        <img src="{{asset('images/company-employee-pacing-around-startup-office-using-digital-tablet-analyze-project-statistics-young-businessman-waiting-corporate-workspace-receive-news-using-device.jpg')}}" alt="Office" class="img-fluid rounded shadow-sm">

                        <!-- Experience Badge -->
                        <div class="position-absolute bottom-0 end-0 translate-middle-y bg-primary text-white p-4 rounded shadow-sm" style="width: 200px;">
                            <h2 class="display-5 fw-bold mb-0">15+</h2>
                            <p class="mb-0">Years</p>
                            <p class="small mb-0">Of experience in business service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5 my-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Features</h2>
                <div class="d-inline-block mx-auto" style="width: 50px; height: 3px; background-color: var(--primary-color);"></div>
                <p class="text-muted mt-4 mx-auto" style="max-width: 700px;">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div>

            <div class="row">
                @foreach($features as $feature)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-{{ $feature->icon_color ?? 'primary' }} bg-opacity-10 p-3 rounded me-4">
                                    <i class="fas fa-{{ $feature->icon ?? 'star' }} text-{{ $feature->icon_color ?? 'primary' }} fa-2x"></i>
                                </div>
                                <h4 class="mb-0">{{ $feature->title }}</h4>
                            </div>
                            <p class="text-muted mb-4">{{ $feature->description }}</p>
                            @if($feature->button_text)
                            <a href="{{ $feature->button_url ?? '#' }}" class="text-primary text-decoration-none">
                                {{ $feature->button_text }} <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Feature Icons Section -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="row g-4">
                <!-- Beige Card -->
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 h-100" style="background-color: #FFF8E8; border-radius: 10px;">
                        <div class="card-body p-4">
                            <div class="text-warning mb-3">
                                <i class="fas fa-award fa-2x"></i>
                            </div>
                            <h4 class="mb-3">Corporis voluptates</h4>
                            <p class="text-muted mb-0">Consequntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                        </div>
                    </div>
                </div>

                <!-- Light Blue Card -->
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 h-100" style="background-color: #F0F7FF; border-radius: 10px;">
                        <div class="card-body p-4">
                            <div class="text-primary mb-3">
                                <i class="fas fa-check-circle fa-2x"></i>
                            </div>
                            <h4 class="mb-3">Explicabo consectetur</h4>
                            <p class="text-muted mb-0">Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                        </div>
                    </div>
                </div>

                <!-- Light Green Card -->
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 h-100" style="background-color: #E9F9E9; border-radius: 10px;">
                        <div class="card-body p-4">
                            <div class="text-success mb-3">
                                <i class="fas fa-sun fa-2x"></i>
                            </div>
                            <h4 class="mb-3">Ullamco laboris</h4>
                            <p class="text-muted mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                        </div>
                    </div>
                </div>

                <!-- Light Pink Card -->
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 h-100" style="background-color: #FFF0F0; border-radius: 10px;">
                        <div class="card-body p-4">
                            <div class="text-danger mb-3">
                                <i class="fas fa-shield-alt fa-2x"></i>
                            </div>
                            <h4 class="mb-3">Labore consequatur</h4>
                            <p class="text-muted mb-0">Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA with Clients Section -->
    <section class="py-5" style="background-color: #4285F4;">
        <div class="container">
            <!-- CTA Content -->
            <div class="row justify-content-center text-center text-white py-5">
                <div class="col-lg-8">
                    <h2 class="display-5 fw-bold mb-4">Maecenas tempus tellus eget condimentum</h2>
                    <p class="lead mb-5">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel</p>
                    <a href="#" class="btn btn-light btn-lg px-5 py-3 rounded-pill">Call To Action</a>
                </div>
            </div>

            <!-- Client Logos -->
            <div class="row justify-content-center mt-5">
                <div class="col-lg-10">
                    <div class="bg-white p-4 rounded">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-md-2 col-6 mb-4 mb-md-0 text-center">
                                <img src="https://via.placeholder.com/150x60?text=LifeGroups" alt="LifeGroups" class="img-fluid" style="max-height: 40px; filter: grayscale(100%);">
                            </div>
                            <div class="col-md-2 col-6 mb-4 mb-md-0 text-center">
                                <img src="https://via.placeholder.com/150x60?text=grabyo" alt="Grabyo" class="img-fluid" style="max-height: 40px; filter: grayscale(100%);">
                            </div>
                            <div class="col-md-2 col-6 mb-4 mb-md-0 text-center">
                                <img src="https://via.placeholder.com/150x60?text=citrus" alt="Citrus" class="img-fluid" style="max-height: 40px; filter: grayscale(100%);">
                            </div>
                            <div class="col-md-2 col-6 mb-4 mb-md-0 text-center">
                                <img src="https://via.placeholder.com/150x60?text=Trustly" alt="Trustly" class="img-fluid" style="max-height: 40px; filter: grayscale(100%);">
                            </div>
                            <div class="col-md-2 col-6 mb-4 mb-md-0 text-center">
                                <img src="https://via.placeholder.com/150x60?text=oldendorff" alt="Oldendorff" class="img-fluid" style="max-height: 40px; filter: grayscale(100%);">
                            </div>
                            <div class="col-md-2 col-6 mb-4 mb-md-0 text-center">
                                <img src="https://via.placeholder.com/150x60?text=Lilly" alt="Lilly" class="img-fluid" style="max-height: 40px; filter: grayscale(100%);">
                            </div>
                        </div>
                    </div>

                    <!-- Pagination Dots -->
                    <div class="d-flex justify-content-center mt-4">
                        <div class="mx-1 rounded-circle bg-white opacity-50" style="width: 10px; height: 10px;"></div>
                        <div class="mx-1 rounded-circle bg-white opacity-50" style="width: 10px; height: 10px;"></div>
                        <div class="mx-1 rounded-circle bg-white" style="width: 10px; height: 10px;"></div>
                        <div class="mx-1 rounded-circle bg-white opacity-50" style="width: 10px; height: 10px;"></div>
                        <div class="mx-1 rounded-circle bg-white opacity-50" style="width: 10px; height: 10px;"></div>
                        <div class="mx-1 rounded-circle bg-white opacity-50" style="width: 10px; height: 10px;"></div>
                        <div class="mx-1 rounded-circle bg-white opacity-50" style="width: 10px; height: 10px;"></div>
                        <div class="mx-1 rounded-circle bg-white opacity-50" style="width: 10px; height: 10px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 my-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Testimonials</h2>
                <div class="d-inline-block mx-auto" style="width: 50px; height: 3px; background-color: var(--primary-color);"></div>
                <p class="text-muted mt-4 mx-auto" style="max-width: 700px;">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div>

            <div class="row g-4">
                @foreach($testimonials as $testimonial)
                <!-- Testimonial -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex mb-3">
                                @if($testimonial->image)
                                <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}" class="rounded-circle" width="60" height="60">
                                @else
                                <img src="https://via.placeholder.com/80x80" alt="{{ $testimonial->name }}" class="rounded-circle" width="60" height="60">
                                @endif
                                <div class="ms-3">
                                    <h5 class="mb-0">{{ $testimonial->name }}</h5>
                                    <p class="text-muted mb-1">{{ $testimonial->position }}</p>
                                    <div class="text-warning">
                                        @for($i = 0; $i < $testimonial->rating; $i++)
                                        <i class="fas fa-star"></i>
                                        @endfor
                                        @for($i = $testimonial->rating; $i < 5; $i++)
                                        <i class="far fa-star"></i>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <span class="text-primary me-2" style="font-size: 2rem; line-height: 1;">
                                    <i class="fas fa-quote-left"></i>
                                </span>
                                <p class="text-muted mb-0">
                                    {{ $testimonial->content }}
                                </p>
                                <span class="text-primary ms-2 align-self-end" style="font-size: 2rem; line-height: 1;">
                                    <i class="fas fa-quote-right"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Stats Counter Section -->
    <section class="py-5 my-5 bg-white">
        <div class="container">
            <div class="row text-center">
                @foreach($stats as $stat)
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <h2 class="display-4 fw-bold mb-3">{{ $stat->value }}</h2>
                    <div class="d-inline-block" style="width: 50px; height: 3px; background-color: var(--primary-color);"></div>
                    <p class="mt-3 text-muted">{{ $stat->title }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5 my-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Services</h2>
                <div class="d-inline-block mx-auto" style="width: 50px; height: 3px; background-color: var(--primary-color);"></div>
                <p class="text-muted mt-4 mx-auto" style="max-width: 700px;">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div>

            <div class="row g-4">
                @foreach($services as $service)
                <!-- Service -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-{{ $service->background_color ?? 'primary' }} bg-opacity-10 p-3 rounded me-4">
                                    <i class="fas fa-{{ $service->icon ?? 'cube' }} text-{{ $service->icon_color ?? 'primary' }} fa-2x"></i>
                                </div>
                                <h4 class="mb-0">{{ $service->title }}</h4>
                            </div>
                            <p class="text-muted mb-4">{{ $service->description }}</p>
                            @if($service->button_text)
                            <a href="{{ $service->button_url ?? '#' }}" class="text-primary text-decoration-none">
                                {{ $service->button_text }} <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                            @else
                            <a href="#" class="text-primary text-decoration-none">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-5 my-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Pricing</h2>
                <div class="d-inline-block mx-auto" style="width: 50px; height: 3px; background-color: var(--primary-color);"></div>
                <p class="text-muted mt-4 mx-auto" style="max-width: 700px;">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div>

            <div class="row justify-content-center g-4">
                @foreach($pricing_plans as $plan)
                <!-- Pricing Plan -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100 rounded-3 {{ $plan->is_featured ? 'bg-primary text-white' : '' }} {{ $plan->is_featured ? 'position-relative' : '' }}">
                        @if($plan->is_featured)
                        <div class="position-absolute top-0 start-50 translate-middle bg-white text-primary fw-bold px-4 py-2 rounded-pill">
                            Most Popular
                        </div>
                        @endif
                        <div class="card-body p-5">
                            <h3 class="fw-bold mb-4">{{ $plan->title }}</h3>
                            <div class="mb-4">
                                <span class="h1 fw-bold">$</span>
                                <span class="display-4 fw-bold">{{ $plan->price }}</span>
                                <span class="{{ $plan->is_featured ? '' : 'text-muted' }}">/ {{ $plan->duration }}</span>
                            </div>
                            <p class="{{ $plan->is_featured ? '' : 'text-muted' }} mb-4">{{ $plan->description }}</p>

                            <p class="fw-bold mb-3">Featured Included:</p>
                            <ul class="list-unstyled mb-5">
                                @if(is_array($plan->features))
                                    @foreach($plan->features as $feature)
                                    <li class="mb-2">
                                        <i class="fas fa-check {{ $plan->is_featured ? 'bg-white text-primary' : 'text-primary' }} me-2 rounded-circle p-1" {{ !$plan->is_featured ? 'style="background-color: rgba(13, 110, 253, 0.1);"' : '' }}></i>
                                        {{ $feature }}
                                    </li>
                                    @endforeach
                                @elseif(is_string($plan->features))
                                    @foreach(explode("\n", $plan->features) as $feature)
                                    @if(trim($feature))
                                    <li class="mb-2">
                                        <i class="fas fa-check {{ $plan->is_featured ? 'bg-white text-primary' : 'text-primary' }} me-2 rounded-circle p-1" {{ !$plan->is_featured ? 'style="background-color: rgba(13, 110, 253, 0.1);"' : '' }}></i>
                                        {{ trim($feature) }}
                                    </li>
                                    @endif
                                    @endforeach
                                @endif
                            </ul>

                            <a href="{{ $plan->button_url }}" class="btn {{ $plan->is_featured ? 'btn-light' : 'btn-primary' }} d-block py-3">{{ $plan->button_text ?? 'Buy Now' }} <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5 my-5 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <h2 class="display-5 fw-bold mb-4">Have a question? Check out the FAQ</h2>
                    <p class="text-muted">Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum.</p>
                </div>

                <div class="col-lg-7">
                    <div class="accordion" id="faqAccordion">
                        @foreach($faqs as $key => $faq)
                        <!-- FAQ Item -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                            <h2 class="accordion-header" id="heading{{ $key }}">
                                <button class="accordion-button {{ $key > 0 ? 'collapsed' : '' }} rounded" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $key }}" aria-expanded="{{ $key === 0 ? 'true' : 'false' }}"
                                        aria-controls="collapse{{ $key }}">
                                    {{ $faq->question }}
                                </button>
                            </h2>
                            <div id="collapse{{ $key }}" class="accordion-collapse collapse {{ $key === 0 ? 'show' : '' }}"
                                aria-labelledby="heading{{ $key }}" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    {{ $faq->answer }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call To Action Section -->
    <section class="py-5 my-5" style="background-color: {{ $call_to_action->background_color ?? '#4285F4' }};">
        <div class="container">
            <div class="row justify-content-center text-center text-white py-4">
                <div class="col-lg-8">
                    <h2 class="display-5 fw-bold mb-4">{{ $call_to_action->title ?? 'Call To Action' }}</h2>
                    <p class="lead mb-5">{{ $call_to_action->description ?? 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' }}</p>
                    <a href="{{ $call_to_action->button_url ?? '#' }}" class="btn btn-light btn-lg px-5 py-3 rounded-pill">{{ $call_to_action->button_text ?? 'Call To Action' }}</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 my-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Contact</h2>
                <div class="d-inline-block mx-auto" style="width: 50px; height: 3px; background-color: var(--primary-color);"></div>
                <p class="text-muted mt-4 mx-auto" style="max-width: 700px;">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div>

            <div class="row g-4">
                <!-- Contact Info -->
                <div class="col-lg-5">
                    <div class="bg-primary text-white p-4 p-lg-5 rounded-3 h-100">
                        <h3 class="fw-bold mb-4">Contact Info</h3>
                        <p class="mb-5">{{ $contact->description ?? 'Get in touch with us. We\'re here to help and answer any questions you may have.' }}</p>

                        <div class="d-flex mb-4">
                            <div class="bg-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="fas fa-map-marker-alt text-primary"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Our Location</h5>
                                <p class="mb-0">{{ $contact->address ?? 'N/A' }}</p>
                                <p class="mb-0">{{ $contact->city ?? '' }} {{ $contact->zip_code ?? '' }}</p>
                            </div>
                        </div>

                        <div class="d-flex mb-4">
                            <div class="bg-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="fas fa-phone text-primary"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Phone Number</h5>
                                <p class="mb-0">{{ $contact->phone ?? 'N/A' }}</p>
                                <p class="mb-0">{{ $contact->secondary_phone ?? '' }}</p>
                            </div>
                        </div>

                        <div class="d-flex mb-4">
                            <div class="bg-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="fas fa-envelope text-primary"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Email Address</h5>
                                <p class="mb-0">{{ $contact->email ?? 'N/A' }}</p>
                                <p class="mb-0">{{ $contact->secondary_email ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-7">
                    <div class="bg-white p-4 p-lg-5 rounded-3 shadow-sm h-100">
                        <h3 class="fw-bold mb-4">Get In Touch</h3>
                        <p class="text-muted mb-4">{{ $contact->form_description ?? 'Send us a message and we\'ll get back to you as soon as possible.' }}</p>

                        <form action="#" method="POST">
                            @csrf
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                            </div>

                            <div class="mb-4">
                                <textarea name="message" class="form-control" rows="6" placeholder="Message" required></textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer style="background-color: white; color: black;" class="footer pt-5 pb-3">
        <div class="container">
            <div style="font-size: 12px;" class="row mb-5">
                <!-- Company Info -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h3 class="text-black h4 mb-4">iLanding</h3>
                    <p class="text-muted mb-2">A108 Adam Street</p>
                    <p class="text-muted mb-2">New York, NY 535022</p>
                    <p class="text-muted mb-2"><strong>Phone:</strong> +1 5589 55488 55</p>
                    <p class="text-muted mb-4"><strong>Email:</strong> info@example.com</p>

                    <div class="d-flex">
                        <a href="#" class="me-2 bg-light rounded-circle d-inline-flex justify-content-center align-items-center" style="width: 36px; height: 36px;">
                            <i class="fab fa-twitter text-secondary"></i>
                        </a>
                        <a href="#" class="me-2 bg-light rounded-circle d-inline-flex justify-content-center align-items-center" style="width: 36px; height: 36px;">
                            <i class="fab fa-facebook-f text-secondary"></i>
                        </a>
                        <a href="#" class="me-2 bg-light rounded-circle d-inline-flex justify-content-center align-items-center" style="width: 36px; height: 36px;">
                            <i class="fab fa-instagram text-secondary"></i>
                        </a>
                        <a href="#" class="me-2 bg-light rounded-circle d-inline-flex justify-content-center align-items-center" style="width: 36px; height: 36px;">
                            <i class="fab fa-linkedin-in text-secondary"></i>
                        </a>
                    </div>
                </div>

                <!-- Useful Links -->
                <div class="col-lg-2 offset-lg-1 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-black mb-4">Useful Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-muted">Home</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">About us</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Services</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Terms of service</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Privacy policy</a></li>
                    </ul>
                </div>

                <!-- Our Services -->
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-black mb-4">Our Services</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-muted">Web Design</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Web Development</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Product Management</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Marketing</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Graphic Design</a></li>
                    </ul>
                </div>

                <!-- Hic solutasetp -->
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-black mb-4">Hic solutasetp</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-muted">Molestiae accusamus iure</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Excepturi dignissimos</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Suscipit distinctio</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Dilecta</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Sit quas consectetur</a></li>
                    </ul>
                </div>

                <!-- Nobis illum -->
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-black mb-4">Nobis illum</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-muted">Ipsam</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Laudantium dolorum</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Dinera</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Trodelas</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Flexo</a></li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center border-top border-secondary pt-4">
                <p class="text-muted mb-1">© Copyright <strong>iLanding</strong>  All Rights Reserved</p>
                <p class="text-muted small">Designed by <a href="#" class="text-primary">BootstrapMade</a></p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="btn btn-primary rounded-circle position-fixed bottom-0 end-0 mb-4 me-4 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script>
        // Initialize Bootstrap tabs
        document.addEventListener('DOMContentLoaded', function() {
            // Explicitly initialize the first tab as active
            const firstTab = document.querySelector('#featuresTabs .nav-link');
            if (firstTab) {
                const tabTriggerEl = new bootstrap.Tab(firstTab);
                tabTriggerEl.show();
            }

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);

                    if (targetElement) {
                        const navbarHeight = document.querySelector('.navbar').offsetHeight;
                        const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - navbarHeight;

                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });

                        // Close mobile menu if open
                        const navbarToggler = document.querySelector('.navbar-toggler');
                        const navbarCollapse = document.querySelector('.navbar-collapse');
                        if (navbarCollapse.classList.contains('show')) {
                            navbarToggler.click();
                        }
                    }
                });
            });
        });

        // Active nav link on scroll
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');

            let current = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });

        // Scroll to top functionality for back to top button
        document.querySelector('a[href="#"].btn-primary.rounded-circle').addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>
</html>
