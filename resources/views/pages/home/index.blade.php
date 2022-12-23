<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>dropifypro - Financial Services Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="{{ asset('assets/homepage/img/favicon.ico') }}" rel="icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
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
                    <a href="#services" class="nav-item nav-link">Why Choosing Us?</a>
                    <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                    <a href="#pricing" class="nav-item nav-link">Register</a>
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
                                    hope that some of them might sell?<br />
                                    Do you upload random products
                                    based on hunches and gut feelings?<br />
                                    Do you set your prices based on other
                                    sellers’ prices and your instincts?<br />
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
                                <div class="ps-3 pt-2">
                                    <h3>Dedicated Team</h3>
                                </div>
                                <div class="border-end d-none d-lg-block"></div>
                            </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle button-bg-light-blue">
                                    <i class="fa fa-phone text-white"></i>
                                </div>
                                <div class="ps-3 pt-2">
                                    <h3>24/7 Available</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">2563</h1>
                    <span class="fs-5 text-white">Happy Clients</span>
                    <hr class="bg-white w-25 mx-auto mb-0" />
                </div>
                <div class="col-sm-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="bi bi-box fa-5x text-white mb-3"></i>

                    <h1 class="display-4 text-white" data-toggle="counter-up">10523</h1>
                    <span class="fs-5 text-white">Total Products</span>
                    <hr class="bg-white w-25 mx-auto mb-0" />
                </div>
                <div class="col-sm-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">226</h1>
                    <span class="fs-5 text-white">Dedicated Staff</span>
                    <hr class="bg-white w-25 mx-auto mb-0" />
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- Features Start -->
    <div class="container-xxl feature py-5" id="services">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">
                        Why Choosing Us!
                    </p>
                    <h1 class="display-5 mb-4">Few Reasons Why People Choosing Us!</h1>
                    <p class="mb-4">
                        Whether you’re a dropshipper, reseller or wholesaler,
                        we have all the tools you need to start selling on eBay
                    </p>
                    <a class="btn button-bg-light-blue py-3 px-5" href="">
                        Register Now
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-users fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">Fast Growing</h4>
                                        <p class="mb-3">
                                            It helps you build and maintain Mission, and Vision, growth and power.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-phone fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">Guide & Support</h4>
                                        <p class="mb-3">
                                            Help and advice about how to do something or about how to deal with problems
                                            connected with your
                                            work
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="feature-box border rounded p-4">
                                <i class="fa fa-lock fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">Financial Secure</h4>
                                <p class="mb-3">
                                    Your standard data connection is more secure.
                                    Pay using a credit card.
                                    You'll have more protection.
                                    So scammers can't get hold of your bank details.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Service Start -->
    <div class="container-xxl service py-5" id="pricing">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">
                    Your Plans
                </p>
                <h1 class="display-5 mb-5">
                    Choose The Best Plan For Awesome Experience
                </h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-12">
                    <div class="row w-100"
                        style="
                flex-wrap: nowrap;
                gap: 20px;
                justify-content: space-between;
              ">
                       
                            @foreach ($plan_details as $plan_detail)
                                <div class="card col-md-4 text-center" style="width: 20rem;">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">{{ $plan_detail['name'] }} Plan</h5>
                                        <h6 class="card-subtitle mb-3 text-muted">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        </h6>
                                        <span style="text-align: left ;">
                                            @include('pages.home.includes.plan_body')
                                        </span>
                                        <div class="cross-price mt-4">
                                            £
                                            <span>{{ $plan_detail['price_month'] + 9.99 }}</span>
                                            /mo
                                        </div>
                                        <a href="{{ route('register.plan',['id'=>$plan_detail->id,'package'=>"month"]) }}" 
                                            class="btn btn-sm btn-primary mt-4">£{{ $plan_detail['price_month'] }}
                                            /mo</a>
                                        @if ($plan_detail['name'] !== 'Business')
                                            <a href="#" class="btn btn-sm button-bg-orange mt-4">
                                                £1 /7days
                                            </a>
                                        @endif
                                        <div class="cross-price mt-4">
                                            £
                                            <span>{{ $plan_detail['price_year'] + 29.99 }}</span>
                                            /yr
                                        </div>

                                        <a href="{{ route('register.plan',['id'=>$plan_detail->id,'package'=>"year"]) }}" 
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
                <div class="col-sm-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-user fa-3x text-white"></i>

                    <span class="fs-4 text-white" style="margin-left: 10px; font-weight: bolder;">
                        User Friendly Interface
                    </span>
                    <hr class="bg-white w-25 mx-auto mb-0" />
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                        <div class="testimonial-item">
                            <img class="screenshot"
                                src="{{ asset('assets/homepage/img/screenshot/screenshot1.png') }}" alt="" />
                        </div>

                        <div class="testimonial-item">
                            <img class="screenshot"
                                src="{{ asset('assets/homepage/img/screenshot/screenshot2.png') }}" alt="" />
                        </div>
                        <div class="testimonial-item">
                            <img class="screenshot"
                                src="{{ asset('assets/homepage/img/screenshot/screenshot3.png') }}" alt="" />
                        </div>
                        <div class="testimonial-item">
                            <img class="screenshot"
                                src="{{ asset('assets/homepage/img/screenshot/screenshot4.png') }}" alt="" />
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
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">
                    Testimonial
                </p>
                <h1 class="display-5 mb-5">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5" style="height: 350px;">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        With DropifyPro, I receive not only the the-best tool made from drop shippers to drop shippers.
                        I
                        receive support, community, and training that I always recommend to my students. To boost your
                        sales, I
                        recommend this fantastic tool.
                    </div>
                    <img class="rounded-circle mb-3" src="{{ asset('assets/homepage/img/testimonial-1.jpg') }}"
                        alt="" />
                    <h4>Цветан Радушев,</h4>
                    <span>HR Manager</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5" style="height: 350px;">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        As a user for 6 months now; it is the best investment I have made for my dropshipping business
                        to be
                        successful. Massive advantage over the competition and other sellers with the various built-in
                        tools.
                        Constantly coming out with new releases and other tools to help your business grow, they are a
                        clear winner
                        for product research!
                    </div>
                    <img class="rounded-circle mb-3" src="{{ asset('assets/homepage/img/testimonial-2.jpg') }}"
                        alt="" />
                    <h4>David Jacobovic</h4>
                    <span>CEO</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5" style="height: 350px;">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        DropifyPro is easy to use, the data is very accurate and the customer service always helpful You
                        can find
                        all the information I need about product research and eBay selling inside DropifyPro as well to
                        the greate features they have mainly product and competitor research And for the titles I have
                        the unique
                        title builder that even show you sales history and competitor of every keyword
                    </div>
                    <img class="rounded-circle mb-3" src="{{ asset('assets/homepage/img/testimonial-3.jpg') }}"
                        alt="" />
                    <h4>Noah Little</h4>
                    <span>Associative Manager</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5" style="height: 350px;">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        Very helpful program and group of people. YouTube channel has tons of vids and more out weekly.
                        Fb group is
                        very helpful all the time with a good group of people. Program I use daily and has been more
                        helpful than
                        any other tool in this entire DS learning process.
                    </div>
                    <img class="rounded-circle mb-3" src="{{ asset('assets/homepage/img/testimonial-4.jpg') }}"
                        alt="" />
                    <h4>Tao</h4>
                    <span>CEO</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
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
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="">
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
                        grown their eBay business using DropifyPro</p>
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
    <a href="#home" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top">
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
