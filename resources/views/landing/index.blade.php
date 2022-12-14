<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="ASAN Webs Development">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ env('APP_DESC') }}">
    <meta name="keywords" content="{{ env('APP_KEYWORDS') }}">
    <link rel="shortcut icon" href="{{ asset('landing/assets/svg/favi.svg') }}">
    <title>{{ env('APP_NAME') }} | {{ env('APP_DESC') }}</title>
    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/materialdesignicons.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/magnific-popup.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('landing/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/colors/theme01.css') }}" id="option-color">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
        <div class="container">
            <div class="menu-overlay"></div>
            <div class="menu-close-btn"><i class="mdi mdi-close-circle-outline"></i></div>
            <a class="navbar-brand brand-logo mr-4" href="index-2.html">
                <img src="{{ asset('assets/svg/logo-light.svg') }}" class="img-fluid logo-light" alt="">
            </a>
            <div class="navbar-collapse collapse justify-content-center" id="navbarCollapse">
                <ul class="navbar-nav navbar-center" id="mySidenav">
                    <li class="nav-item active">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#aboutus" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Open Account</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Sign In</a>
                    </li>
                </ul>

            </div>
            <div class="contact_btn">
                <a href="{{ route('register') }}" class="btn btn-sm">Open Account Today</a>
                <button class="navbar-toggler ml-2 p-0" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
            </div>
        </div>

    </nav>

    <!-- End Navbar -->
    <!-- Home Start-->
    <section class="theme-bg overflow-hidden home-section" id="home">
        <div id="particles-js">
        </div>
        <div class="waves-bg-img home-bg">
            <div class="container">
                <div class="owl-carousel owl-theme main-slider">
                    <div class="item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="content-fadeInUp">
                                    <h2 class="heading">
                                        PROFESSIONAL TOOLS& STRATEGY
                                    </h2>
                                    <p class="para-txt">
                                        Make Profits Unaffected by Market Fluctuations
                                    </p>
                                    <div class="learn-more">
                                        <a href="{{ route('register') }}" class="btn btn-white rounded-pill text-white">Create Account</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="img-fadeInRight">
                                    <img src="{{ asset('assets/images/football.jpg') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home End -->
    <!-- Start About -->
    <section class="section features-section overflow-hidden" id="aboutus">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-5 d-flex">
                    <div class=" mb-30 m-md-0 position-relative wow fadeIn" data-wow-duration="1500ms">
                        <img src="{{ asset('assets/images/fireball.jpg') }}" class="w-100 shape-radius" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="wow fadeIn" data-wow-duration="1500ms">
                        <div class="section-title text-left">
                            <p>why choose us</p>
                            <h3>Service Guarantee Safe and Secure</h3>
                        </div>
                        <div class="box-wrap">
                            <h1 class=" font-20 mb-4">
                                Cryptocurrency investments made by {{ env('APP_NAME') }} are insured by RSA Insurance Group plc. If financial risks caused by various factors such as force majeure are encountered, user assets can apply for compensation to Seener.
                            </h1>
                            <div class="info-box">
                                <div class="ico-bg">
                                    <i class="icon mdi mdi-rocket"></i>
                                </div>
                                <div class="content-txt">
                                    <h3>Senior Asset Management Experience</h3>
                                    <p>

                                        {{ env('APP_NAME') }} is affiliated with Brookfield, Brookfield owner has hundreds of years of asset management experience, and manages $725 billion in assets for global users.

                                    </p>
                                </div>
                            </div>
                            <div class="info-box">
                                <div class="ico-bg">
                                    <i class="icon mdi mdi-collage"></i>
                                </div>
                                <div class="content-txt">
                                    <h3>
                                        Strictly Regulated </h3>
                                    <p>

                                        The investment you make is divided into two categories: arbitrage (no risk), quantitative trading (lower risk)

                                    </p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('register') }}" class="btn btn-sm theme-btn mt-5">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->
    <!-- Start Counter -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter-box mb-30 m-md-0">
                        <div class="counter-icons d-flex align-items-center justify-content-center">
                            <i class="mdi mdi-collage"></i>
                        </div>
                        <h3>
                            <span class="counter odometer" data-count="12">0</span>+
                        </h3>
                        <p>Project</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter-box mb-30 m-md-0">
                        <div class="counter-icons d-flex align-items-center justify-content-center">
                            <i class="mdi mdi-account-group"></i>
                        </div>
                        <h3><span class="counter odometer" data-count="2000">0</span>+</h3>
                        <p>Satisfied Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter-box mb-30 m-sm-0">
                        <div class="counter-icons d-flex align-items-center justify-content-center">
                            <i class="mdi mdi-trophy"></i>
                        </div>
                        <h3>
                            <span class="counter odometer" data-count="06">00</span>
                        </h3>
                        <p>Win Awards</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter-box">
                        <div class="counter-icons d-flex align-items-center justify-content-center">
                            <i class="mdi mdi-account-outline"></i>
                        </div>
                        <h3><span class="counter odometer" data-count="65">0</span>+</h3>
                        <p>Team Member</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter -->
    <!-- Start Price -->
    <!-- Start Contact Us -->
    <section class="section" id="contactus">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center ">
                        <p>Need Help</p>
                        <h3>
                            Quick Contact
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="contact-bg mb-30 m-lg-0 wow fadeIn" data-wow-duration="1500ms">
                        <div class="contact-box-inner">
                            <div>
                                <h3>Do You Have Any Questions?</h3>
                                <p>
                                    If you do not see an email from us, please search your spam email folder for
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <form class="contact-form wow fadeIn" data-wow-duration="1500ms">
                        <h3>Plase Fill Up The Form To Contact With Us</h3>
                        <p>
                            We'll be in touch as soon as possible
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="input-icons mdi mdi-account-outline"></i>
                                    <input type="text" class="form-control" name="name" placeholder="Your Full Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="input-icons mdi mdi-email-outline"></i>
                                    <input type="text" class="form-control" name="email" placeholder="Your Email " required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <i class="textarea-icons mdi mdi-pencil-outline"></i>
                                    <textarea placeholder="Write Message" class="form-control" name="message" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button class="btn theme-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Us -->
    <!-- Start Footer -->
    <footer class="footer theme-bg overflow-hidden pb-4">
        <div class="container footer-bottom">
            <div class="row">
                <div class="col-12">
                    <div class="mb-30">
                        <div class="text-center">
                            <img src="{{ asset('assets/svg/logo-light.svg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="foot_desc mt-4 pt-4">
                        <p class="mb-0 text-center">{{ date('Y') }} &copy; <span class="text-white font-weight-bold">{{ env('APP_NAME') }}.</span> All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" class="back_top"> <i class="mdi mdi-chevron-up"></i></a>
    <script src="{{ asset('landing/js/jquery.js') }}"></script>
    <script src="{{ asset('landing/js/popper.js') }}"></script>
    <script src="{{ asset('landing/js/bootstrap.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('landing/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('landing/js/wow.js') }}"></script>
    <script src="{{ asset('landing/js/particles.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('landing/js/main.js') }}"></script>
</body>

</html>