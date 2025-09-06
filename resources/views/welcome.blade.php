<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Startup - Startup Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Stanbic Height, Accra Ghana,
                        USA</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>024 385 6398</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i><a
                            href="/cdn-cgi/l/email-protection" class="__cf_email__"
                            data-cfemail="0b62656d644b6e736a667b676e25686466">[support@ecotrustinternational.com]</a></small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">

            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Ecobank</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <div class="nav-item dropdown">
                        <a href="/" class="nav-link  active" data-bs-toggle="dropdown">Home</a>

                    </div>
                    <div class="nav-item dropdown">
                        <a href="/about" class="nav-link " >About</a>
                        {{-- <div class="dropdown-menu m-0">
                            <a href="about-1.html" class="dropdown-item">About 1</a>
                            <a href="about-2.html" class="dropdown-item">About 2</a>
                        </div> --}}
                    </div>
                    <div class="nav-item dropdown">
                        <a href="/loan" class="nav-link " >Loan</a>

                    </div>
                    <div class="nav-item dropdown">
                        <a href="/contact" class="nav-link dropdown-toggle" >Contact US</a>

                    </div>

                </div>
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal"
                    data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                <a href="/login"
                    class="btn btn-primary py-2 px-3 ms-3">Login</a>
            </div>
        </nav>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Discover banking tailored
                                for your everyday needs</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">A better way to bank your way
                            </h1>
                            {{-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Open
                                an account
                            </a> --}}


                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('assets/img/cons.webp') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Innovative banking that
                                helps business flourish</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">A better way to a better future
                            </h1>

                            <a href="/contact"
                                class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
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
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Happy Clients</h5>
                            <span class="text-white h1 mb-0" data-toggle="counter-up">100,000</span> <span
                                class="h1 text-white">+</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Projects Done</h5>
                            <span class="text-dark h1 mb-0" data-toggle="counter-up">70</span> <span
                                class="h1 text-dark">+</span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Awards Winning</h5>
                            <span class="text-white h1 mb-0" data-toggle="counter-up">100</span> <span
                                class="h1 text-white">+</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title-1 position-relative pb-3 mb-5">
                        {{-- <h5 class="fw-bold text-primary text-uppercase">About Us</h5> --}}
                        <h1 class="mb-0">Be safe and secure online</h1>
                    </div>
                    <p class="mb-4">Let’s build together.
                        Let’s grow together.Ecobank is proud to play a defining role in developing and supporting
                        Africa’s fincechs to help transform digital finance and banking.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                            {{-- <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5> --}}
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call us to book your appointment with us now</h5>
                            <h4 class="text-primary mb-0">024 385 6398</h4>
                        </div>
                    </div>
                    <a href="/contact" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Contact
                        us
                    </a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="{{ asset('assets/img/freelance-tab.png') }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
                <h1 class="mb-0">We Are Here to Grow Your Business Exponentially</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3">
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Cashless</h4>
                            <p class="mb-0">Why carry money? Go plastic, go cashless
                            </p>
                        </div>
                        <div class="col-md-6 col-lg-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Award Winning</h4>
                            <p class="mb-0">Our award-winning staff are skilled, reliable, and committed to serving
                                you with excellence.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>Professional Staff</h4>
                            <p class="mb-0">Our staff are skilled, reliable, and committed to serving you with
                                excellence.
                            </p>
                        </div>
                        <div class="col-md-6 col-lg-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>24/7 Support</h4>
                            <p class="mb-0">award-winning staff provide 24-hour support with excellence and care.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100 p-4">
                        <img class="position-absolute rounded p-4  " data-wow-delay="0.1s"
                            src="{{ asset('assets/img/card.png') }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    {{-- what we offer --}}
    <div class="site-section" id="next">
        <div class="container">
            <h2 class="section-title mb-5 text-center" data-aos="fade-up" data-aos-delay="">What we offer</h2>

            <div class="row mb-5">
                <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="">
                    <img src="{{ asset('assets/img/001-wallet.svg') }}"
                        alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
                    <h3 class="card-title">Money Savings</h3>
                    <p>Ecobank helps you secure your future with flexible savings accounts, competitive interest rates,
                        and easy management tools. Whether you're planning for a goal or building a safety net, we make
                        saving simple and rewarding.
                    </p>
                </div>
                <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('assets/img/004-cart.svg') }}" alt="Free Website Template by Free-Template.co"
                        class="img-fluid w-25 mb-4">
                    <h3 class="card-title">Online Shoppings</h3>
                    <p>Ecobank makes online shopping secure and convenient. With our reliable payment solutions, you can
                        shop globally with confidence, enjoying fast and hassle-free transactions. Stay connected to
                        your finances while exploring a world of possibilities.
                    </p>
                </div>
                <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/img/006-credit-card.svg') }}"
                        alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
                    <h3 class="card-title">Credit / Debit Cards</h3>
                    <p>Ecobank offers secure and convenient credit and debit card solutions to simplify your everyday
                        transactions. Whether shopping online, paying bills, or accessing cash, our cards provide global
                        acceptance, enhanced security, and exclusive benefits tailored to your needs.
                    </p>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
                    <figure class="circle-bg">
                        <img src="{{ asset('assets/img/afri-8.jpg') }}"
                            alt="Free Website Template by Free-Template.co" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-4">
                        <h3 class="h3 mb-4 text-black">Banking Solutions Is Our Priority</h3>
                        <p>At Ecobank, we are dedicated to providing personalized and innovative banking solutions that
                            meet the unique needs of our customers.</p>

                    </div>

                    <div class="mb-4">
                        <ul class="list-unstyled ul-check success">
                            <li>Customer-Centric Approach: We prioritize your satisfaction, offering expert guidance and
                                exceptional support.</li>
                            <li>Empowering Growth: Whether for individuals, businesses, or communities, our solutions
                                drive progress and prosperity.</li>
                            <li>Tailored Financial Services: From savings accounts to investment opportunities, we offer
                                solutions designed to fit your goals.</li>
                        </ul>

                    </div>

                </div>
            </div>
            <div class="row p-5" style="background-color: #f5f5f5;">

                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-4">

                    </div>

                    <div class="mb-4 " style="padding-top: 80px;">
                        <ul class="list-unstyled ul-check success">
                            <li>
                                <h1>Making your plans a reality</h1>
                            </li>
                        </ul>

                    </div>

                </div>

                <div class="col-lg-6 mb-5 text-center " data-aos="fade-up" data-aos-delay="">
                    <figure class="circle-bg ">
                        <img src="{{ asset('assets/img/smiley_guy.jpg') }}"
                            alt="Free Website Template by Free-Template.co" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="row p-5" style="background-color: #fff;">



                <div class="col-lg-6 mb-5 text-center " data-aos="fade-up" data-aos-delay="">
                    <figure class="circle-bg ">
                        <img src="{{ asset('assets/img/eco_mob.jpg') }}"
                            alt="Free Website Template by Free-Template.co" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-4">

                    </div>

                    <div class="mb-4 " style="padding-top: 80px;">
                        <ul class="list-unstyled ul-check success">
                            <li>Mobile Banking</li>
                            <li>
                                <h1>Mobile Banking
                                    Bank on the go 24/7</h1>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </div>






    <!-- Service Start -->
    <div class="container">
 <section class="site-section border-bottom bg-light" id="services-section">
            <div class="container p-4">
                <div class="row mb-5">
                    <div class="col-12 text-center" data-aos="fade">
                        <h2 class="section-title mb-3">Our Services</h2>
                    </div>
                </div>
                <div class="row align-items-stretch">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                        <div class="unit-4">
                            <div class="unit-4-icon">
                                <img src="{{ asset('assets/img/001-wallet.svg') }}"
                                    alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
                            </div>
                            <div>
                                <h3>Business Consulting</h3>
                                <p>Empower your business with expert advice from Ghana Bank of Commerce. We provide tailored strategies to help you grow, manage finances, and achieve your business goals with confidence</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="unit-4">
                            <div class="unit-4-icon">
                                <img src="{{ asset('assets/img/006-credit-card.svg') }}"
                                    alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
                            </div>
                            <div>
                                <h3>Credit Card</h3>
                                <p>Enjoy flexibility and convenience with Ghana Bank of Commerce credit cards—secure payments, global acceptance, and exclusive benefits tailored to your lifestyle. Manage your finances with ease while accessing rewards and special offers.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="unit-4">
                            <div class="unit-4-icon">
                                <img src="{{ asset('assets/img/002-rich.svg') }}"
                                    alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
                            </div>
                            <div>
                                <h3>Income Monitoring</h3>
                                <p>Stay in control of your finances with Ghana Bank of Commerce's incoming monitoring service. Track deposits, transfers, and payments in real-time to ensure accuracy and security.</p>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
                        <div class="unit-4">
                            <div class="unit-4-icon">
                                <img src="{{ asset('assets/img/003-notes.svg') }}"
                                    alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
                            </div>
                            <div>
                                <h3>Insurance Consulting</h3>
                                <p>Protect what matters most with expert guidance from Ghana Bank of Commerce. Our insurance consulting services help you choose the right coverage for your needs, providing peace of mind and financial security.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="unit-4">
                            <div class="unit-4-icon">
                                <img src="{{ asset('assets/img/004-cart.svg') }}"
                                    alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
                            </div>
                            <div>
                                <h3>Financial Investment</h3>
                                <p>Grow your wealth with Ghana Bank of Commerce's expert financial investment services. We offer tailored solutions to help you achieve your goals and secure your financial future.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="unit-4">
                            <div class="unit-4-icon">
                                <img src="{{ asset('assets/img/005-megaphone.svg') }}"
                                    alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
                            </div>
                            <div>
                                <h3>Financial Management</h3>
                                <p>Take charge of your finances with Ghana Bank of Commerce. Our expert guidance and innovative tools help you plan, save, and invest for a secure and prosperous future.</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <!-- Service End -->


    <!-- Work Process Start -->

    <!-- Work Process End -->





    <!-- FAQs Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="section-title-1 position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">General FAQs</h5>
                        <h1 class="mb-0">Any Question? Check the FAQs or Contact Us</h1>
                    </div>
                    <p class="mb-4">We understand that banking can sometimes raise questions, and we are here to help
                        you every step of the way. For quick answers, you can explore our Frequently Asked Questions
                        (FAQs), where we’ve provided clear guidance on our services, products, and policies. If you need
                        more personalized assistance, our award-winning professional staff are available 24 hours a day
                        to provide reliable support. Whether it’s through a phone call, email, or visiting one of our
                        branches, we are committed to ensuring your banking experience is smooth, secure, and
                        convenient.</p>
                    <a href="/about" class="btn btn-primary py-3 px-5 me-3">Explore More FAQs</a>
                </div>
                <div class="col-lg-6">
                    <div class="accordion accordion-custom" id="accordionExample">
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button fw-semi-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    How do I open a bank account?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    You can open an account by visiting any of our branches with a valid ID, proof of
                                    address, and passport-sized photographs. Some accounts can also be opened online
                                    through our website.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fw-semi-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    What documents do I need to open an account?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A valid national ID (passport, voter’s ID, driver’s license, or national ID card)

                                    Proof of address (utility bill, tenancy agreement, or similar)

                                    Passport-sized photographs
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed fw-semi-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    What should I do if my ATM card is lost or stolen?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Immediately contact our customer support or visit the nearest branch to block the
                                    card. A replacement card will be issued upon request.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed fw-semi-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true"
                                    aria-controls="collapseFour">
                                    How do I check my account balance?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    You can check your balance via:

                                    Online banking

                                    Mobile banking app

                                    ATM

                                    Visiting any branch
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed fw-semi-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    Do you offer 24-hour customer support?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, our award-winning professional staff are available 24/7 to provide support through phone, email, and live chat.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->


    <!-- Testimonial Start -->

    <!-- Testimonial End -->


    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title-1 position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
                        <h1 class="mb-0">Need Assistance? Please Feel Free to Contact Us</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone
                                support</h5>
                        </div>
                    </div>
                    <p class="mb-4"></p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">024 385 6398</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn"
                        data-wow-delay="0.9s">
                        <form>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0"
                                        placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0"
                                        placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Request A Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->




    <!-- Team Start -->
    {{-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Team End -->


    <!-- Blog Start -->
    {{-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>
                <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/blog-1.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/blog-2.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/blog-3.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Blog Start -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/vendor-1.jpg" alt="">
                    <img src="img/vendor-2.jpg" alt="">
                    <img src="img/vendor-3.jpg" alt="">
                    <img src="img/vendor-4.jpg" alt="">
                    <img src="img/vendor-5.jpg" alt="">
                    <img src="img/vendor-6.jpg" alt="">
                    <img src="img/vendor-7.jpg" alt="">
                    <img src="img/vendor-8.jpg" alt="">
                    <img src="img/vendor-9.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div
                        class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>Startup</h1>
                        </a>
                        <p class="mt-3 mb-4">At Ecobank, we are committed to providing secure, reliable, and innovative financial solutions to meet your everyday needs. Our award-winning professional staff are dedicated to serving you with excellence and integrity, ensuring that your banking experience remains convenient and trustworthy.  Your security and satisfaction are our top priorities.</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-dark">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title-1 section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Stanbic Heights, Accra, Ghana</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="97fef9f1f8d7f2eff6fae7fbf2b9f4f8fa">[support@ecotrustinternational.com]</a>
                                </p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+233 024 061 5379</p>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title-1 section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="/"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="/about"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="/contact"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Contact us</a>
                                <a class="text-light mb-2" href="/loan"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Loan</a>
                                <a class="text-light mb-2" href="/mobile"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Ecobank Mobile </a>

                            </div>
                        </div>
                        {{-- <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title-1 section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Popular Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-light" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#"> <a
                                    class="text-white border-bottom" href="">Eco Bank</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" type="text/javascript">
    </script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/isotope/isotope.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}" type="text/javascript"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}" type="text/javascript"></script>

    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="|49" defer></script>
</body>
{{-- <script>
    var spinner = function () {
        setTimeout(function () {
            console.log('spinner');
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
</script> --}}

</html>
