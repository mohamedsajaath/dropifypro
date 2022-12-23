<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>dropifypro - Financial Services Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/homepage/lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/homepage/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/homepage/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/homepage/css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <!-- <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</small>
                <small class="ms-4"><i class="fa fa-clock text-primary me-2"></i>9.00 am - 9.00 pm</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small><i class="fa fa-envelope text-primary me-2"></i>info@example.com</small>
                <small class="ms-4"><i class="fa fa-phone-alt text-primary me-2"></i>+012 345 6789</small>
            </div> -->
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="{{ route('home') }}" class="navbar-brand ms-4 ms-lg-0">
                <img src="{{ asset('assets/homepage/img/with-logo-dropify.png') }}" style="max-height: 50px;" />
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">About</a>
                    <a href="#services" class="nav-item nav-link">Services</a>
                    <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                    <a href="#pricing" class="nav-item nav-link">Sign Up</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner" id="home">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/homepage/img/carousel-1.jpg') }}" alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8">
                                    <p
                                        class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                        Welcome to Dropifypro
                                    </p>
                                    <h1 class="display-1 mb-4 animated slideInDown fs-1">
                                        proper Inventory Management is one of the important key
                                        for E-business
                                        <br />
                                        We Make It Simple
                                    </h1>
                                    <a href="#pricing" class="btn button-bg-light-blue py-3 px-5 animated slideInDown">
                                        Register Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('assets/homepage/img/carousel-2.jpg') }}" alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <p
                                        class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                        Welcome to dropifypro
                                    </p>
                                    <h1 class="display-1 mb-4 animated slideInDown fs-1">
                                        Don't find customer for your products, find products for
                                        your customers.
                                    </h1>
                                    <a href="#pricing" class="btn button-bg-light-blue py-3 px-5 animated slideInDown">
                                        Register Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;"></div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="testimonial-item">
                    <img class="icon-gray" src="{{ asset('assets/homepage/img/icons/ebay.png') }}" alt="" />
                </div>
                <div class="testimonial-item">
                    <img class="icon-gray" src="{{ asset('assets/homepage/img/icons/hermes.png') }}"
                        alt="" />
                </div>
                <div class="testimonial-item">
                    <img class="icon-gray" src="{{ asset('assets/homepage/img/icons/royalmail.png') }}"
                        alt="" />
                </div>
                <div class="testimonial-item">
                    <img class="icon-gray" src="{{ asset('assets/homepage/img/icons/paypal.png') }}"
                        alt="" />
                </div>
                <div class="testimonial-item">
                    <img class="icon-gray" src="{{ asset('assets/homepage/img/icons/stripe.png') }}"
                        alt="" />
                </div>
                <div class="testimonial-item">
                    <img class="icon-gray" src="{{ asset('assets/homepage/img/icons/196578.png') }}"
                        alt="" />
                </div>
            </div>
        </div>
    </div>

    <!-- About Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="{{ asset('assets/homepage/img/about.jpg') }}" />
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">
                        About Us
                    </p>
                    <h1 class="display-5 mb-4">
                        We Help Our Clients To Grow Their Business
                    </h1>
                    <p class="mb-4">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                        diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <div class="border rounded p-4">
                        <nav>
                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-story" type="button" role="tab"
                                    aria-controls="nav-story" aria-selected="true">
                                    Story
                                </button>
                                <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-mission" type="button" role="tab"
                                    aria-controls="nav-mission" aria-selected="false">
                                    Mission
                                </button>
                                <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-vision" type="button" role="tab"
                                    aria-controls="nav-vision" aria-selected="false">
                                    Vision
                                </button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                                aria-labelledby="nav-story-tab">
                                <p>
                                    Do you try to list many products in the
                                    hope that some of them might sell?
                                </p>
                                <p>
                                    Do you upload random products
                                    based on hunches and gut feelings?
                                </p>
                                <p>
                                    Do you set your prices based on other
                                    sellers’ prices and your instincts?
                                </p>
                                <p>
                                    Do you copy other sellers’ titles and
                                    hope buyers find your product?
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-mission" role="tabpanel"
                                aria-labelledby="nav-mission-tab">
                                <p>
                                    Your store is full of products that <b>fail to sell</b> or <b>don’t make any profit
                                    </b>.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-vision" role="tabpanel"
                                aria-labelledby="nav-vision-tab">
                                <p>
                                    Our Vision is
                                    Your products have a much greater chance of <b>selling fast</b> and at a <b>high
                                        profit</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle button-bg-light-blue">
                                    <i class="fa fa-times text-white"></i>
                                </div>
                                <div class="ps-3 pt-2">
                                    <h3>No Hidden Cost</h3>
                                </div>
                                <div class="border-end d-none d-lg-block"></div>
                            </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle button-bg-light-blue">
                                    <i class="fa fa-users text-white"></i>
                                </div>
                                <!--end::Person-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Button-->
                        <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
                            <span class="svg-icon svg-icon-3x">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                            <span class="svg-icon svg-icon-3x">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Slider-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Team Section-->
            <!--begin::Projects Section-->
            <div class="mb-lg-n15 position-relative z-index-2">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Card-->
                    <div class="card" style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08))">
                        <!--begin::Card body-->
                        <div class="card-body p-lg-20">
                            <!--begin::Heading-->
                            <div class="text-center mb-5 mb-lg-10">
                                <!--begin::Title-->
                                <h3 class="fs-2hx text-dark mb-5" id="portfolio"
                                    data-kt-scroll-offset="{default: 100, lg: 250}">Our Projects Sample Clicks</h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->

                            <!--begin::Tabs content-->
                            <div class="tab-content">
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade show active" id="kt_landing_projects_latest">
                                    <!--begin::Row-->
                                    <div class="row g-10">
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <!--begin::Item-->
                                            <a class="d-block card-rounded overlay h-lg-70"
                                                data-fslightbox="lightbox-projects"
                                                href="assets/media/images/dashboard.png">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                    style="background-image:url('assets/media/images/dashboard.png')">
                                                </div>
                                                <!--end::Image-->
                                                <!--begin::Action-->
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <div class="col-lg-6">
                                            <!--begin::Item-->
                                            <a class="d-block card-rounded overlay h-lg-70"
                                                data-fslightbox="lightbox-projects"
                                                href="assets/media/images/dashboard4.png">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                    style="background-image:url('assets/media/images/dashboard4.png')">
                                                </div>
                                                <!--end::Image-->
                                                <!--begin::Action-->
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <div class="col-lg-6">
                                            <!--begin::Item-->
                                            <a class="d-block card-rounded overlay h-lg-70"
                                                data-fslightbox="lightbox-projects"
                                                href="assets/media/images/dashboard2.png">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                    style="background-image:url('assets/media/images/dashboard2.png')">
                                                </div>
                                                <!--end::Image-->
                                                <!--begin::Action-->
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <div class="col-lg-6">
                                            <!--begin::Item-->
                                            <a class="d-block card-rounded overlay h-lg-70"
                                                data-fslightbox="lightbox-projects"
                                                href="assets/media/images/dashboard3.png">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                    style="background-image:url('assets/media/images/dashboard3.png')">
                                                </div>
                                                <!--end::Image-->
                                                <!--begin::Action-->
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        {{-- <div class="col-lg-6">
                                        <!--begin::Row-->
                                        <div class="row g-10 mb-10">
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <!--begin::Item-->
                                                <a class="d-block card-rounded overlay"
                                                    data-fslightbox="lightbox-projects"
                                                    href="assets/media/stock/ecommerce/215.gif">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                        style="background-image:url('assets/media/stock/ecommerce/215.gif')">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Action-->
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                    </div>
                                                    <!--end::Action-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <!--begin::Item-->
                                                <a class="d-block card-rounded overlay"
                                                    data-fslightbox="lightbox-projects"
                                                    href="assets/media/stock/ecommerce/161.gif">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                        style="background-image:url('assets/media/stock/ecommerce/161.gif')">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Action-->
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                    </div>
                                                    <!--end::Action-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects"
                                            href="assets/media/stock/ecommerce/16.gif">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                style="background-image:url('assets/media/stock/ecommerce/16.gif')">
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div> --}}
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Tab pane-->
                            </div>
                            <!--end::Tabs content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Projects Section-->
            <!--begin::Pricing Section-->
            <div class="mt-sm-n20">
                <!--begin::Curve top-->
                <div class="landing-curve landing-dark-color">
                    <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                            fill="#2d459d"></path>
                    </svg>
                </div>
                <!--end::Curve top-->
                <!--begin::Wrapper-->
                <div class="py-20 primary-gr-color-blue-2">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Plans-->
                        <div class="d-flex flex-column container pt-lg-20">
                            <!--begin::Heading-->
                            <div class="mb-13 text-center">
                                <h1 class="fs-2hx fw-bold text-white mb-5" id="pricing"
                                    data-kt-scroll-offset="{default: 100, lg: 150}">Clear Pricing Makes it Easy</h1>
                                <div class="text-white fw-semibold fs-5">Save thousands to millions of bucks by using
                                    single tool for different
                                    <br />amazing and outstanding cool and great useful admin
                                </div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Pricing-->
                            <div class="text-center" id="kt_pricing">
                                <!--begin::Nav group-->
                                <div class="nav-group primary-color-light-blue d-inline-flex mb-15"
                                    data-kt-buttons="true">
                                    <a href="#"
                                        class="btn btn-color-white-600 btn-active btn-active-success px-6 py-3 me-2 active"
                                        data-kt-plan="month" id="month_package">Monthly</a>
                                    <a href="#"
                                        class="btn btn-color-white-600 btn-active btn-active-success px-6 py-3"
                                        data-kt-plan="annual">Annual</a>
                                </div>
                                <!--end::Nav group-->
                                <!--begin::Row-->
                                <div class="row g-10">
                                    <form action="{{ route('register.plan') }}" method="POST" class="plan_form">
                                        @csrf
                                        <input type="hidden" value="" name="package" id="package">
                                        <input type="hidden" value="" name="id" id="plan_id">
                                        <input type="submit" id="submit" style="display: none">

                                    </form>

                                    @foreach ($plan_details as $plan_detail)
                                        @if (App\Models\Plan::ADVANCED_SLUG == $plan_detail->slug)
                                            <!--begin::Col-->
                                            <div class="col-xl-4">
                                                <div class="d-flex h-100 align-items-center">
                                                    <!--begin::Option-->
                                                    <div
                                                        class="w-100 d-flex flex-column flex-center rounded-3 bg-primary  py-15 px-10">
                                                        <!--begin::Heading-->
                                                        <div class="mb-7 text-center">
                                                            <!--begin::Title-->
                                                            <h1 class="text-white mb-5 fw-boldest">
                                                                {{ $plan_detail->name }}
                                                            </h1>
                                                            <!--end::Title-->
                                                            <!--begin::Price-->
                                                            <div class="text-center w-100 mb-10">
                                                                <span class="mb-2 text-white">£</span>
                                                                <span class="fs-3x fw-bold text-white"
                                                                    data-kt-plan-price-month="{{ $plan_detail->price_month }}"
                                                                    data-kt-plan-price-annual="{{ $plan_detail->price_year }}">{{ $plan_detail->price_month }}</span>
                                                                <span class="fs-7 fw-semibold opacity-50"
                                                                    data-kt-plan-price-month="Mon"
                                                                    data-kt-plan-price-annual="Ann">/
                                                                    Mon</span>
                                                            </div>
                                                            <!--end::Price-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Features-->
                                                        @if (App\Models\Plan::ADVANCED_SLUG == $plan_detail->slug)
                                                            @include('pages.home.includes.advanced_content')
                                                        @endif
                                                        <!--end::Features-->
                                                        <!--begin::Select-->
                                                        <button
                                                            class="btn btn-color-primary btn-active-light-primary btn-light select_btn"
                                                            data-id="{{ $plan_detail->id }}">Select</button>
                                                        <!--end::Select-->
                                                    </div>
                                                    <!--end::Option-->
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                        @else
                                            <!--begin::Col-->
                                            <div class="col-xl-4">
                                                <div class="d-flex h-100 align-items-center">
                                                    <!--begin::Option-->
                                                    <div
                                                        class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-20 px-10">
                                                        <!--begin::Heading-->
                                                        <div class="mb-7 text-center">
                                                            <!--begin::Title-->
                                                            <h1 class="text-dark mb-5 fw-boldest">
                                                                {{ $plan_detail->name }}
                                                            </h1>
                                                            <!--end::Title-->

                                                            @foreach ($plan_details as $plan_detail)
                                                                <div class="card col-md-4 text-center"
                                                                    style="width: 20rem;">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title mb-3">
                                                                            {{ $plan_detail['name'] }} Plan</h5>
                                                                        <h6 class="card-subtitle mb-3 text-muted">
                                                                            Lorem ipsum dolor sit amet consectetur
                                                                            adipisicing elit.
                                                                        </h6>
                                                                        <span style="text-align: left ;">
                                                                            @include('pages.home.includes.plan_body')
                                                                        </span>
                                                                        <div class="cross-price mt-4">
                                                                            £
                                                                            <span>{{ $plan_detail['price_month'] }}</span>
                                                                            /mo
                                                                        </div>
                                                                        <a href="#"
                                                                            class="btn btn-sm btn-primary mt-4">£{{ $plan_detail['price_month'] }}
                                                                            /mo</a>
                                                                        @if ($plan_detail['name'] !== 'Business')
                                                                            <a href="#"
                                                                                class="btn btn-sm button-bg-orange mt-4">
                                                                                £1 /7days
                                                                            </a>
                                                                        @endif
                                                                        <div class="cross-price mt-4">
                                                                            £
                                                                            <span>{{ $plan_detail['price_year'] }}</span>
                                                                            /yr
                                                                        </div>

                                                                        <a href="#"
                                                                            class="btn btn-sm btn-primary mt-4">£{{ $plan_detail['price_year'] }}
                                                                            /yr</a>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                                <!-- Service End -->

                                <!-- Callback Start -->
                                <div class="container-fluid callback my-5 pt-5">
                                    <div class="container pt-5">
                                        <div class="row g-5">
                                            <div class="col-sm-6 col-lg-4 text-center wow fadeIn"
                                                data-wow-delay="0.1s">
                                                <i class="fa fa-user fa-3x text-white"></i>

                                                <span class="fs-4 text-white"
                                                    style="margin-left: 10px; font-weight: bolder;">
                                                    User Friendly Interface
                                                </span>
                                                <hr class="bg-white w-25 mx-auto mb-0" />
                                            </div>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="col-lg-12">
                                                <div class="owl-carousel testimonial-carousel wow fadeInUp"
                                                    data-wow-delay="0.3s">
                                                    <div class="testimonial-item">
                                                        <img class="screenshot"
                                                            src="{{ asset('assets/homepage/img/screenshot/screenshot1.png') }}"
                                                            alt="" />
                                                    </div>

                                                    <div class="testimonial-item">
                                                        <img class="screenshot"
                                                            src="{{ asset('assets/homepage/img/screenshot/screenshot2.png') }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="testimonial-item">
                                                        <img class="screenshot"
                                                            src="{{ asset('assets/homepage/img/screenshot/screenshot3.png') }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="testimonial-item">
                                                        <img class="screenshot"
                                                            src="{{ asset('assets/homepage/img/screenshot/screenshot4.png') }}"
                                                            alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Callback End -->

                                <!-- Testimonial Start -->
                                <div class="container-xxl py-5">
                                    <div class="container">
                                        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s"
                                            style="max-width: 600px;">
                                            <p
                                                class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">
                                                Testimonial
                                            </p>
                                            <h1 class="display-5 mb-5">What Our Clients Say!</h1>
                                        </div>
                                        <div class="owl-carousel testimonial-carousel wow fadeInUp"
                                            data-wow-delay="0.3s">
                                            <div class="testimonial-item">
                                                <div class="testimonial-text border rounded p-4 pt-5 mb-5"
                                                    style="height: 350px;">
                                                    <div class="btn-square bg-white border rounded-circle">
                                                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                                                    </div>
                                                    With DropifyPro analytics, I receive not only the the-best tool made
                                                    from drop shippers to drop shippers. I
                                                    receive support, community, and training that I always recommend to
                                                    my students. To boost your sales, I
                                                    recommend this fantastic tool.
                                                </div>
                                                <img class="rounded-circle mb-3"
                                                    src="{{ asset('assets/homepage/img/testimonial-1.jpg') }}"
                                                    alt="" />
                                                <h4>Цветан Радушев,</h4>
                                                <span>HR Manager</span>
                                            </div>
                                            <div class="testimonial-item">
                                                <div class="testimonial-text border rounded p-4 pt-5 mb-5"
                                                    style="height: 350px;">
                                                    <div class="btn-square bg-white border rounded-circle">
                                                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                                                    </div>
                                                    As a user for 6 months now; it is the best investment I have made
                                                    for my dropshipping business to be
                                                    successful. Massive advantage over the competition and other sellers
                                                    with the various built-in tools.
                                                    Constantly coming out with new releases and other tools to help your
                                                    business grow, they are a clear winner
                                                    for product research!
                                                </div>
                                                <img class="rounded-circle mb-3"
                                                    src="{{ asset('assets/homepage/img/testimonial-2.jpg') }}"
                                                    alt="" />
                                                <h4>David Jacobovic</h4>
                                                <span>CEO</span>
                                            </div>
                                            <div class="testimonial-item">
                                                <div class="testimonial-text border rounded p-4 pt-5 mb-5"
                                                    style="height: 350px;">
                                                    <div class="btn-square bg-white border rounded-circle">
                                                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                                                    </div>
                                                    DropifyPro is easy to use, the data is very accurate and the
                                                    customer service always helpful You can find
                                                    all the information I need about product research and eBay selling
                                                    inside DropifyPro analytics as well to
                                                    the greate features they have mainly product and competitor research
                                                    And for the titles I have the unique
                                                    title builder that even show you sales history and competitor of
                                                    every keyword
                                                </div>
                                                <img class="rounded-circle mb-3"
                                                    src="{{ asset('assets/homepage/img/testimonial-3.jpg') }}"
                                                    alt="" />
                                                <h4>Noah Little</h4>
                                                <span>Associative Manager</span>
                                            </div>
                                            <div class="testimonial-item">
                                                <div class="testimonial-text border rounded p-4 pt-5 mb-5"
                                                    style="height: 350px;">
                                                    <div class="btn-square bg-white border rounded-circle">
                                                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                                                    </div>
                                                    Very helpful program and group of people. YouTube channel has tons
                                                    of vids and more out weekly. Fb group is
                                                    very helpful all the time with a good group of people. Program I use
                                                    daily and has been more helpful than
                                                    any other tool in this entire DS learning process.
                                                </div>
                                                <img class="rounded-circle mb-3"
                                                    src="{{ asset('assets/homepage/img/testimonial-4.jpg') }}"
                                                    alt="" />
                                                <h4>Tao</h4>
                                                <span>CEO</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial End -->

                                <!-- Footer Start -->
                                <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn"
                                    data-wow-delay="0.1s">
                                    <div class="container py-5">
                                        <div class="row g-5">
                                            <div class="col-lg-3 col-md-6">
                                                <h4 class="text-white mb-4">Our Office</h4>
                                                <p class="mb-2">
                                                    <i class="fa fa-map-marker-alt me-3"></i>
                                                    123 Street, New York, USA
                                                </p>
                                                <p class="mb-2">
                                                    <i class="fa fa-phone-alt me-3"></i>
                                                    +012 345 67890
                                                </p>
                                                <p class="mb-2">
                                                    <i class="fa fa-envelope me-3"></i>
                                                    mailto:info@example.com
                                                </p>
                                                <div class="d-flex pt-2">
                                                    <a class="btn btn-square btn-outline-light rounded-circle me-2"
                                                        href="">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                    <a class="btn btn-square btn-outline-light rounded-circle me-2"
                                                        href="">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                    <a class="btn btn-square btn-outline-light rounded-circle me-2"
                                                        href="">
                                                        <i class="fab fa-youtube"></i>
                                                    </a>
                                                    <a class="btn btn-square btn-outline-light rounded-circle me-2"
                                                        href="">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <h4 class="text-white mb-4">Services</h4>
                                                <a class="btn btn-link" href="">Webinars</a>
                                                <a class="btn btn-link" href="">Blog</a>
                                                <a class="btn btn-link" href="">Articles</a>
                                                <a class="btn btn-link" href="">Selling on eBay</a>
                                                <a class="btn btn-link" href="">Business Analysis</a>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <h4 class="text-white mb-4">Quick Links</h4>
                                                <a class="btn btn-link" href="">About Us</a>
                                                <a class="btn btn-link" href="">Contact Us</a>
                                                <a class="btn btn-link" href="">Our Services</a>
                                                <a class="btn btn-link" href="">Terms & Condition</a>
                                                <a class="btn btn-link" href="">Support</a>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <h4 class="text-white mb-4">Newsletter</h4>
                                                <p>Join over 100,000 sellers that have started or
                                                    grown their eBay business using DropifyPro Analytics</p>
                                                {{--                <div class="position-relative w-100"> --}}
                                                {{--                    <input class="form-control bg-white border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email" /> --}}
                                                {{--                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"> --}}
                                                {{--                        Start Now --}}
                                                {{--                    </button> --}}
                                                {{--                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Footer End -->


                                <!-- Back to Top -->
                                <a href="#home"
                                    class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top">
                                    <i class="bi bi-arrow-up"></i>
                                </a>

                                <!-- JavaScript Libraries -->
                                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
                                <script src="{{ asset('assets/homepage/lib/wow/wow.min.js') }}"></script>
                                <script src="{{ asset('assets/homepage/lib/easing/easing.min.js') }}"></script>
                                <script src="{{ asset('assets/homepage/lib/waypoints/waypoints.min.js') }}"></script>
                                <script src="{{ asset('assets/homepage/lib/owlcarousel/owl.carousel.min.js') }}"></script>
                                <script src="{{ asset('assets/homepage/lib/counterup/counterup.min.js') }}"></script>

                                <!-- Template Javascript -->
                                <script src="{{ asset('assets/homepage/js/main.js') }}"></script>
</body>

</html>
