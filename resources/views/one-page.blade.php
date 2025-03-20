<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company Name</title>

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
                    <img src="https://via.placeholder.com/600x400" alt="Hero Image" class="img-fluid rounded">
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
                        <img src="https://via.placeholder.com/80x80" alt="CEO" class="rounded-circle me-3">
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
                        <img src="https://via.placeholder.com/600x400" alt="Office" class="img-fluid rounded shadow-sm">
                        <img src="https://via.placeholder.com/300x200" alt="Office interior" class="position-absolute top-0 end-0 translate-middle-y rounded shadow-sm" style="width: 70%; max-width: 400px; transform: translateY(25%);">
                        
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
            
            <div class="row justify-content-center">
                <div class="col-lg-12 features-tabs">
                    <div class="text-center mb-4">
                        <ul class="nav nav-pills justify-content-center" id="featuresTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="modisit-tab" data-bs-toggle="tab" data-bs-target="#modisit" type="button" role="tab" aria-controls="modisit" aria-selected="true">Modisit</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="praesenti-tab" data-bs-toggle="tab" data-bs-target="#praesenti" type="button" role="tab" aria-controls="praesenti" aria-selected="false">Praesenti</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="explica-tab" data-bs-toggle="tab" data-bs-target="#explica" type="button" role="tab" aria-controls="explica" aria-selected="false">Explica</button>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="tab-content" id="featuresTabsContent">
                        <div class="tab-pane fade show active" id="modisit" role="tabpanel" aria-labelledby="modisit-tab">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-lg-6">
                                    <h4 class="mb-4">Voluptatem dignissimos provident</h4>
                                    <div style="width: 50px; height: 3px; background-color: var(--primary-color); margin-bottom: 25px;"></div>
                                    <p class="text-muted fst-italic mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <ul class="list-unstyled">
                                        <li class="check-list-item"><i class="fas fa-check text-primary"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                        <li class="check-list-item"><i class="fas fa-check text-primary"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                        <li class="check-list-item"><i class="fas fa-check text-primary"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <img src="https://via.placeholder.com/500x300" alt="Feature" class="img-fluid rounded shadow-sm">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="praesenti" role="tabpanel" aria-labelledby="praesenti-tab">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-lg-6">
                                    <h4 class="mb-4">Voluptatem dignissimos provident</h4>
                                    <div style="width: 50px; height: 3px; background-color: var(--primary-color); margin-bottom: 25px;"></div>
                                    <p class="text-muted fst-italic mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <ul class="list-unstyled">
                                        <li class="check-list-item"><i class="fas fa-check text-primary"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                        <li class="check-list-item"><i class="fas fa-check text-primary"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                        <li class="check-list-item"><i class="fas fa-check text-primary"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <img src="https://via.placeholder.com/500x300" alt="Feature" class="img-fluid rounded shadow-sm">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="explica" role="tabpanel" aria-labelledby="explica-tab">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-lg-6">
                                    <h4 class="mb-4">Voluptatem dignissimos provident</h4>
                                    <div style="width: 50px; height: 3px; background-color: var(--primary-color); margin-bottom: 25px;"></div>
                                    <p class="text-muted fst-italic mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <ul class="list-unstyled">
                                        <li class="check-list-item"><i class="fas fa-check text-primary"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                        <li class="check-list-item"><i class="fas fa-check text-primary"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                        <li class="check-list-item"><i class="fas fa-check text-primary"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <img src="https://via.placeholder.com/500x300" alt="Feature" class="img-fluid rounded shadow-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                <!-- Testimonial 1 -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex mb-3">
                                <img src="https://via.placeholder.com/80x80" alt="Saul Goodman" class="rounded-circle" width="60" height="60">
                                <div class="ms-3">
                                    <h5 class="mb-0">Saul Goodman</h5>
                                    <p class="text-muted mb-1">Ceo & Founder</p>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <span class="text-primary me-2" style="font-size: 2rem; line-height: 1;">
                                    <i class="fas fa-quote-left"></i>
                                </span>
                                <p class="text-muted mb-0">
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                </p>
                                <span class="text-primary ms-2 align-self-end" style="font-size: 2rem; line-height: 1;">
                                    <i class="fas fa-quote-right"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex mb-3">
                                <img src="https://via.placeholder.com/80x80" alt="Sara Wilsson" class="rounded-circle" width="60" height="60">
                                <div class="ms-3">
                                    <h5 class="mb-0">Sara Wilsson</h5>
                                    <p class="text-muted mb-1">Designer</p>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <span class="text-primary me-2" style="font-size: 2rem; line-height: 1;">
                                    <i class="fas fa-quote-left"></i>
                                </span>
                                <p class="text-muted mb-0">
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                </p>
                                <span class="text-primary ms-2 align-self-end" style="font-size: 2rem; line-height: 1;">
                                    <i class="fas fa-quote-right"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex mb-3">
                                <img src="https://via.placeholder.com/80x80" alt="Jena Karlis" class="rounded-circle" width="60" height="60">
                                <div class="ms-3">
                                    <h5 class="mb-0">Jena Karlis</h5>
                                    <p class="text-muted mb-1">Store Owner</p>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <span class="text-primary me-2" style="font-size: 2rem; line-height: 1;">
                                    <i class="fas fa-quote-left"></i>
                                </span>
                                <p class="text-muted mb-0">
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                </p>
                                <span class="text-primary ms-2 align-self-end" style="font-size: 2rem; line-height: 1;">
                                    <i class="fas fa-quote-right"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 4 -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex mb-3">
                                <img src="https://via.placeholder.com/80x80" alt="Matt Brandon" class="rounded-circle" width="60" height="60">
                                <div class="ms-3">
                                    <h5 class="mb-0">Matt Brandon</h5>
                                    <p class="text-muted mb-1">Freelancer</p>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <span class="text-primary me-2" style="font-size: 2rem; line-height: 1;">
                                    <i class="fas fa-quote-left"></i>
                                </span>
                                <p class="text-muted mb-0">
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                </p>
                                <span class="text-primary ms-2 align-self-end" style="font-size: 2rem; line-height: 1;">
                                    <i class="fas fa-quote-right"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Stats Counter Section -->
    <section class="py-5 my-5 bg-white">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <h2 class="display-4 fw-bold mb-3">232</h2>
                    <div class="d-inline-block" style="width: 50px; height: 3px; background-color: var(--primary-color);"></div>
                    <p class="mt-3 text-muted">Clients</p>
                </div>
                
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <h2 class="display-4 fw-bold mb-3">521</h2>
                    <div class="d-inline-block" style="width: 50px; height: 3px; background-color: var(--primary-color);"></div>
                    <p class="mt-3 text-muted">Projects</p>
                </div>
                
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <h2 class="display-4 fw-bold mb-3">1453</h2>
                    <div class="d-inline-block" style="width: 50px; height: 3px; background-color: var(--primary-color);"></div>
                    <p class="mt-3 text-muted">Hours Of Support</p>
                </div>
                
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <h2 class="display-4 fw-bold mb-3">32</h2>
                    <div class="d-inline-block" style="width: 50px; height: 3px; background-color: var(--primary-color);"></div>
                    <p class="mt-3 text-muted">Workers</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5 my-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Services</h2>
                <div class="d-inline-block mx-auto" style="width: 50px; height: 3px; background-color: var(--primary-color);"></div>
                <p class="text-muted mt-4 mx-auto" style="max-width: 700px;">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div>
            
            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-primary bg-opacity-10 p-3 rounded me-4">
                                    <i class="fas fa-chart-line text-primary fa-2x"></i>
                                </div>
                                <h4 class="mb-0">Nesciunt Mete</h4>
                            </div>
                            <p class="text-muted mb-4">Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
                            <a href="#" class="text-primary text-decoration-none">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Service 2 -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-primary bg-opacity-10 p-3 rounded me-4">
                                    <i class="fas fa-cube text-primary fa-2x"></i>
                                </div>
                                <h4 class="mb-0">Eosle Commodi</h4>
                            </div>
                            <p class="text-muted mb-4">Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                            <a href="#" class="text-primary text-decoration-none">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Service 3 -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-primary bg-opacity-10 p-3 rounded me-4">
                                    <i class="fas fa-images text-primary fa-2x"></i>
                                </div>
                                <h4 class="mb-0">Ledo Markt</h4>
                            </div>
                            <p class="text-muted mb-4">Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
                            <a href="#" class="text-primary text-decoration-none">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Service 4 -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-primary bg-opacity-10 p-3 rounded me-4">
                                    <i class="fas fa-shield-alt text-primary fa-2x"></i>
                                </div>
                                <h4 class="mb-0">Asperiores Commodit</h4>
                            </div>
                            <p class="text-muted mb-4">Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
                            <a href="#" class="text-primary text-decoration-none">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
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
                <!-- Basic Plan -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100 rounded-3">
                        <div class="card-body p-5">
                            <h3 class="fw-bold mb-4">Basic Plan</h3>
                            <div class="mb-4">
                                <span class="h1 fw-bold">$</span>
                                <span class="display-4 fw-bold">9.9</span>
                                <span class="text-muted">/ month</span>
                            </div>
                            <p class="text-muted mb-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam.</p>
                            
                            <p class="fw-bold mb-3">Featured Included:</p>
                            <ul class="list-unstyled mb-5">
                                <li class="mb-2">
                                    <i class="fas fa-check text-primary me-2 rounded-circle p-1" style="background-color: rgba(13, 110, 253, 0.1);"></i>
                                    Duis aute irure dolor
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-primary me-2 rounded-circle p-1" style="background-color: rgba(13, 110, 253, 0.1);"></i>
                                    Excepteur sint occaecat
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-primary me-2 rounded-circle p-1" style="background-color: rgba(13, 110, 253, 0.1);"></i>
                                    Nemo enim ipsam voluptatem
                                </li>
                            </ul>
                            
                            <a href="#" class="btn btn-primary d-block py-3">Buy Now <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Standard Plan (Popular) -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100 bg-primary text-white rounded-3 position-relative">
                        <div class="position-absolute top-0 start-50 translate-middle bg-white text-primary fw-bold px-4 py-2 rounded-pill">
                            Most Popular
                        </div>
                        <div class="card-body p-5">
                            <h3 class="fw-bold mb-4">Standard Plan</h3>
                            <div class="mb-4">
                                <span class="h1 fw-bold">$</span>
                                <span class="display-4 fw-bold">19.9</span>
                                <span>/ month</span>
                            </div>
                            <p class="mb-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                            
                            <p class="fw-bold mb-3">Featured Included:</p>
                            <ul class="list-unstyled mb-5">
                                <li class="mb-2">
                                    <i class="fas fa-check bg-white text-primary me-2 rounded-circle p-1"></i>
                                    Lorem ipsum dolor sit amet
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check bg-white text-primary me-2 rounded-circle p-1"></i>
                                    Consectetur adipiscing elit
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check bg-white text-primary me-2 rounded-circle p-1"></i>
                                    Sed do eiusmod tempor
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check bg-white text-primary me-2 rounded-circle p-1"></i>
                                    Ut labore et dolore magna
                                </li>
                            </ul>
                            
                            <a href="#" class="btn btn-light d-block py-3">Buy Now <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Premium Plan -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100 rounded-3">
                        <div class="card-body p-5">
                            <h3 class="fw-bold mb-4">Premium Plan</h3>
                            <div class="mb-4">
                                <span class="h1 fw-bold">$</span>
                                <span class="display-4 fw-bold">39.9</span>
                                <span class="text-muted">/ month</span>
                            </div>
                            <p class="text-muted mb-4">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae.</p>
                            
                            <p class="fw-bold mb-3">Featured Included:</p>
                            <ul class="list-unstyled mb-5">
                                <li class="mb-2">
                                    <i class="fas fa-check text-primary me-2 rounded-circle p-1" style="background-color: rgba(13, 110, 253, 0.1);"></i>
                                    Temporibus autem quibusdam
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-primary me-2 rounded-circle p-1" style="background-color: rgba(13, 110, 253, 0.1);"></i>
                                    Saepe eveniet ut et voluptates
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-primary me-2 rounded-circle p-1" style="background-color: rgba(13, 110, 253, 0.1);"></i>
                                    Nam libero tempore soluta
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-primary me-2 rounded-circle p-1" style="background-color: rgba(13, 110, 253, 0.1);"></i>
                                    Cumque nihil impedit quo
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-primary me-2 rounded-circle p-1" style="background-color: rgba(13, 110, 253, 0.1);"></i>
                                    Maxime placeat facere possimus
                                </li>
                            </ul>
                            
                            <a href="#" class="btn btn-primary d-block py-3">Buy Now <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
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
                        <!-- FAQ Item 1 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Non consectetur a erat nam at lectus urna duis?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 2 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Feugiat scelerisque varius morbi enim nunc faucibus?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium.
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 3 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Dolor sit amet consectetur adipiscing elit pellentesque?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt.
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 4 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium.
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 5 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Tempus quam pellentesque nec nam aliquam sem et tortor?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan.
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 6 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Perspiciatis quod quo quos nulla quo illum ullam?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Varius vel pharetra vel turpis nunc eget lorem. Quisque id diam vel quam elementum pulvinar etiam non quam. Sit amet massa vitae tortor condimentum lacinia quis vel.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call To Action Section -->
    <section class="py-5 my-5" style="background-color: #4285F4;">
        <div class="container">
            <div class="row justify-content-center text-center text-white py-4">
                <div class="col-lg-8">
                    <h2 class="display-5 fw-bold mb-4">Call To Action</h2>
                    <p class="lead mb-5">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <a href="#" class="btn btn-light btn-lg px-5 py-3 rounded-pill">Call To Action</a>
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
                        <p class="mb-5">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.</p>
                        
                        <div class="d-flex mb-4">
                            <div class="bg-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="fas fa-map-marker-alt text-primary"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Our Location</h5>
                                <p class="mb-0">A108 Adam Street</p>
                                <p class="mb-0">New York, NY 535022</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-4">
                            <div class="bg-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="fas fa-phone text-primary"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Phone Number</h5>
                                <p class="mb-0">+1 5589 55488 55</p>
                                <p class="mb-0">+1 6678 254445 41</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-4">
                            <div class="bg-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="fas fa-envelope text-primary"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Email Address</h5>
                                <p class="mb-0">info@example.com</p>
                                <p class="mb-0">contact@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="col-lg-7">
                    <div class="bg-white p-4 p-lg-5 rounded-3 shadow-sm h-100">
                        <h3 class="fw-bold mb-4">Get In Touch</h3>
                        <p class="text-muted mb-4">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.</p>
                        
                        <form>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Your Email" required>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <input type="text" class="form-control" placeholder="Subject" required>
                            </div>
                            
                            <div class="mb-4">
                                <textarea class="form-control" rows="6" placeholder="Message" required></textarea>
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