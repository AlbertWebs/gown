<!DOCTYPE html>
<!-- Change the value of lang="en" attribute if your website's language is not English.
You can find the code of your language here - https://www.w3schools.com/tags/ref_language_codes.asp -->
<html lang="en">
    <head>

        <title>Gownsea - Graduation Gown For Hire</title>
        <meta name="description" content="Gownsea - Graduation Gown For Hire">
        <meta charset="utf-8">
        <meta name="author" content="https://themeforest.net/user/bestlooker/portfolio">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Favicon -->
        <link rel="icon" href="images/favicon.png" type="image/png" sizes="any">
        <link rel="icon" href="images/favicon.svg" type="image/svg+xml">

        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/style-responsive.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/vertical-rhythm.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/splitting.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/YTPlayer.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/demo-corporate/demo-corporate.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/demo-brutalist/demo-brutalist.css')}}">

    </head>
    <body class="appear-animate">

        <!-- Page Loader -->
        <div class="page-loader color">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->

        <!-- Skip to Content -->
        <a href="#main" class="btn skip-to-content">Skip to Content</a>
        <!-- End Skip to Content -->

        <!-- Page Wrap -->
        <div class="page" id="top">

            {{-- <nav class="main-nav dark transparent stick-fixed wow-menubar">
                <div class="main-nav-sub full-wrapper"> --}}

         <!-- Navigation Panel -->
         <nav class="main-nav dark transparent stick-fixed wow-menubar">
            <div class="main-nav-sub full-wrapper">

                <!-- Logo  (* Add your text or image to the link tag. Use SVG or PNG image format.
                If you use a PNG logo image, the image resolution must be equal 200% of the visible logo
                image size for support of retina screens. See details in the template documentation. *) -->
                <div class="nav-logo-wrap local-scroll">
                    <a href="index.html" class="logo font-alt">
                        <img src="{{asset('theme/images/logs_g.webp')}}" alt="Your Company Logo" width="205" height="34">
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="mobile-nav" role="button" tabindex="0">
                    <i class="mobile-nav-icon"></i>
                    <span class="visually-hidden">Menu</span>
                </div>

                <!-- Main Menu -->
                <div class="inner-nav desktop-nav">
                    <ul class="clearlist local-scroll">
                        <li><a href="bold-multi-page.html" class="active">Home</a></li>
                        <li><a href="bold-about.html">About Us</a></li>
                        <li><a href="bold-services.html">Products</a></li>
                        <li><a href="bold-portfolio.html">Portfolio</a></li>
                        <li><a href="bold-blog.html">Blog</a></li>
                        <li><a href="bold-contact.html">Contact</a></li>
                    </ul>

                    <ul class="items-end clearlist local-scroll">
                        <li>
                            <a href="bold-contact.html" class="opacity-1 no-hover">
                                <span class="btn btn-mod btn-small btn-border-w btn-circle" data-btn-animate="y">
                                    Let’s talk
                                    <i class="icon-arrow-right1 size-16"></i>
                                </span>
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- End Main Menu -->

            </div>
        </nav>
        <!-- End Navigation Panel -->

            <main id="main">

                <!-- Home Section -->
                <section class="home-section light-content" id="home">
                    <div class="container min-height-100vh d-flex align-items-center pt-100 pb-100 pt-sm-120 pb-sm-120">

                        <!-- Background Video -->
                        <!-- Please replace the video file in folder "video" with your own file -->
                        <div class="bg-video-wrapper">
                            <video class="bg-video" preload="auto" autoplay loop muted playsinline>
                                <source src="{{asset('theme/videos/video-9.mp4')}}" type="video/mp4">
                            </video>
                            <div class="bg-video-overlay bg-dark-alpha-60"></div>
                        </div>
                        <a href="#" role="button" class="bg-video-button-muted"><i class="mi-volume-off"></i> <span class="visually-hidden">Volume On</span></a>
                        <a href="#" role="button" class="bg-video-button-pause"><i class="mi-pause"></i> <span class="visually-hidden">Pause</span></a>
                        <!-- End Background Video -->

                        <!-- Top Dark Gradient Overlay -->
                        <div class="position-absolute top-0 bottom-0 start-0 end-0 bg-gradient-dark-1 opacity-05"></div>
                        <!-- End Top Dark Gradient Overlay -->


                        <!-- Home Section Content -->
                        <div class="home-content">
                            <div class="row">

                                <!-- Home Section Text -->
                                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">

                                    <h1 class="hs-title-9 mb-40 mb-sm-20 wow fadeInUp">
                                        Step into elegance with our exclusive collection
                                    </h1>

                                    <div class="row">
                                        <div class="col-lg-10 offset-lg-1">
                                            <p class="hs-descr mb-50 mb-sm-40 wow fadeInUp" data-wow-delay="0.2s">
                                                Perfect for any occasion – rent, hire, or own the gown of your dreams.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="local-scroll wow fadeInUp wch-unset" data-wow-delay="0.4s">
                                        <a href="corporate-contact.html" class="btn btn-mod btn-color btn-large btn-round btn-hover-anim">
                                            <span>Get a Consultation</span>
                                        </a>
                                    </div>

                                </div>
                                <!-- End Home Section Text -->

                            </div>
                        </div>
                        <!-- End Home Section Content -->

                        <!-- Scroll Down -->
                        <div class="local-scroll scroll-down-wrap wow fadeInUp" data-wow-offset="0">
                            <a href="#about" class="scroll-down"><i class="mi-chevron-down"></i><span class="visually-hidden">Scroll to the next section</span></a>
                        </div>
                        <!-- End Scroll Down -->

                    </div>
                </section>
                <!-- End Home Section -->


                <!-- About Section -->
                <section class="page-section" id="about">

                    <!-- Decorative Line -->
                    <div class="bg-line-1 opacity-025">
                        <img src="images/demo-corporate/decoration-2.svg" alt="" class="wow fadeIn" data-wow-delay="0.4s" />
                    </div>
                    <!-- End Decorative Line -->

                    <div class="container position-relative">

                        <div class="row mb-70 mb-sm-50">
                            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">

                                <h2 class="section-title mb-40 mb-xs-30">High-rated Online Marketing Agency Based in New York</h2>

                                <p class="section-descr mb-0">
                                    Marketing is the activity, set of institutions, and processes for creating, communicating, delivering, and exchanging offerings that have value for customers partners, and society at large. However, the definition of marketing has evolved over the years.
                                </p>

                            </div>
                        </div>

                        <!-- Testimonials Grid -->
                        <div class="row mt-n50 mb-70 mb-sm-50">

                            <!-- Testimonials Item -->
                            <div class="col-md-4 mt-50 wow fadeInLeft" data-wow-delay="0s">
                                <div class="text-center px-lg-4">

                                    <div class="testimonials-5-stars">
                                        <i class="icon-star-rate"></i>
                                        <i class="icon-star-rate"></i>
                                        <i class="icon-star-rate"></i>
                                        <i class="icon-star-rate"></i>
                                        <i class="icon-star-rate-a"></i>
                                    </div>

                                    <div class="testimonials-5-text">
                                        “Really impresseda with the service and the results!”
                                    </div>

                                    <div class="testimonials-5-caption">
                                        Rated 4.5 on Trustpilot
                                    </div>

                                </div>
                            </div>
                            <!-- End Testimonials Item -->

                            <!-- Testimonials Item -->
                            <div class="col-md-4 mt-50 wow fadeInLeft" data-wow-delay="0.15s">
                                <div class="text-center px-lg-4">

                                    <div class="testimonials-5-stars">
                                        <i class="icon-star-rate"></i>
                                        <i class="icon-star-rate"></i>
                                        <i class="icon-star-rate"></i>
                                        <i class="icon-star-rate"></i>
                                        <i class="icon-star-rate-a"></i>
                                    </div>

                                    <div class="testimonials-5-text">
                                        “Excellent service for targeted lead generation.”
                                    </div>

                                    <div class="testimonials-5-caption">
                                        Rated 4.5 on Trustpilot
                                    </div>

                                </div>
                            </div>
                            <!-- End Testimonials Item -->

                            <!-- Testimonials Item -->
                            <div class="col-md-4 mt-50 wow fadeInLeft" data-wow-delay="0.3s">
                                <div class="text-center px-lg-4">

                                    <div class="testimonials-5-stars">
                                        <i class="icon-star-rate"></i>
                                        <i class="icon-star-rate"></i>
                                        <i class="icon-star-rate"></i>
                                        <i class="icon-star-rate"></i>
                                        <i class="icon-star-rate-a"></i>
                                    </div>

                                    <div class="testimonials-5-text">
                                        “I have super enjoyed working with Resonance.”
                                    </div>

                                    <div class="testimonials-5-caption">
                                        Rated 4.5 on Trustpilot
                                    </div>

                                </div>
                            </div>
                            <!-- End Testimonials Item -->

                        </div>
                        <!-- End Testimonials Grid -->

                        <div class="local-scroll text-center">
                            <a href="corporate-about.html" class="btn btn-mod btn-w btn-with-icon btn-circle"><span class="btn-icon color-3"><i class="mi-favorite"></i></span> <span data-btn-animate="y">Read More About Us <i class="mi-arrow-right"></i></span></a>
                        </div>

                    </div>

                </section>
                <!-- End About Section -->


                <!-- Call to Action Section -->
                <section class="page-section bg-scroll light-content" style="background-image: url(images/demo-corporate/section-bg-1.jpg)">

                    <!-- Desktop Overlay -->
                    <div class="bg-overlay bg-gradient-primary-alpha-1 d-none d-md-block"></div>
                    <!-- End Desktop Overlay -->

                    <!-- Mobile Overlay -->
                    <div class="bg-overlay bg-primary-1 opacity-09 d-md-none"></div>
                    <!-- End Mobile Overlay -->

                    <div class="container position-relative">

                        <div class="row">
                            <div class="col-md-7 col-lg-6 col-xl-5">

                                <h2 class="section-title mb-40 mb-xs-30">Get <span class="mark-decoration-5">free</span> marketing consultation online</h2>

                                <p class="section-descr mb-50 mb-sm-40">Contact us and get free marketing consultation for your business.</p>

                                <div class="local-scroll mb-70 mb-sm-50">
                                    <a href="corporate-contact.html" class="btn btn-mod btn-w-c btn-large btn-round btn-hover-anim opacity-09"><span>Get a Consultation</span></a>
                                </div>

                            </div>
                        </div>

                        <!-- Logotypes -->
                        <div class="row">
                            <div class="col-md-6">

                                <h2 class="section-title-tiny opacity-09 mb-30">Trusted by leading companies</h2>

                                <div class="logo-grid">
                                    <img class="logo-grid-img" src="images/clients-logos/logo-grid-dark/logo-1.png" width="110" height="33" alt="Image description is here" />
                                    <img class="logo-grid-img" src="images/clients-logos/logo-grid-dark/logo-2.png" width="119" height="33" alt="Image description is here" />
                                    <img class="logo-grid-img" src="images/clients-logos/logo-grid-dark/logo-3.png" width="79" height="33" alt="Image description is here" />
                                    <img class="logo-grid-img" src="images/clients-logos/logo-grid-dark/logo-4.png" width="122" height="33" alt="Image description is here" />
                                </div>

                            </div>
                        </div>
                        <!-- End Logotypes -->

                    </div>
                </section>
                <!-- End Call to Action Section -->


                <!-- Services Section -->
                <section class="page-section pb-0" id="services">

                    <div class="container position-relative">

                        <div class="row mb-70 mb-sm-50">
                            <div class="col-md-8 offset-md-2 text-center">

                                <h2 class="section-title mb-40 mb-xs-30">Providing the Best Marketing Solutions for Our Clients</h2>

                                <p class="section-descr mb-0">
                                    The marketing mix represents the basic tools that marketers can use to bring their products or services to the market.
                                </p>

                            </div>
                        </div>

                    </div>

                    <!-- Services Grid -->
                    <div class="row g-0 mb-70 mb-sm-50">

                        <!-- Services Item -->
                        <div class="col-md-6 col-xl-3 d-flex">
                            <div class="services-8-item p-4 p-sm-5 wow fadeIn" data-wow-duration="1.2s">

                                <div class="services-8-icon color-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M7 22v-16h14v7.543c0 4.107-6 2.457-6 2.457s1.518 6-2.638 6h-5.362zm16-7.614v-10.386h-18v20h8.189c3.163 0 9.811-7.223 9.811-9.614zm-10 1.614h-4v-1h4v1zm6-4h-10v1h10v-1zm0-3h-10v1h10v-1zm1-7h-17v19h-2v-21h19v2z"/>
                                    </svg>
                                </div>

                                <h3 class="services-8-title">
                                    Marketing Consulting
                                </h3>

                                <p class="services-8-text">
                                    The product aspects of marketing deal with the specifications of the actual relevant products, goods or services, and how it relates to the end-user's needs and wants.
                                </p>

                                <div class="pb-1">
                                    <div class="services-8-category">
                                        Search Engine Optimization
                                    </div>
                                </div>

                                <div class="pb-1">
                                    <div class="services-8-category">
                                        Marketing Strategy
                                    </div>
                                </div>

                                <div class="pb-1">
                                    <div class="services-8-category">
                                        Partnerships
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Services Item -->

                        <!-- Services Item -->
                        <div class="col-md-6 col-xl-3 d-flex">
                            <div class="services-8-item p-4 p-sm-5 wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.15s">

                                <div class="services-8-icon color-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M18 10.031v-6.423l-6.036-3.608-5.964 3.569v6.499l-6 3.224v7.216l6.136 3.492 5.864-3.393 5.864 3.393 6.136-3.492v-7.177l-6-3.3zm-1.143.036l-4.321 2.384v-4.956l4.321-2.539v5.111zm-4.895-8.71l4.272 2.596-4.268 2.509-4.176-2.554 4.172-2.551zm-10.172 12.274l4.778-2.53 4.237 2.417-4.668 2.667-4.347-2.554zm4.917 3.587l4.722-2.697v5.056l-4.722 2.757v-5.116zm6.512-3.746l4.247-2.39 4.769 2.594-4.367 2.509-4.649-2.713zm9.638 6.323l-4.421 2.539v-5.116l4.421-2.538v5.115z"/>
                                    </svg>
                                </div>

                                <h3 class="services-8-title">
                                    Media Relations
                                </h3>

                                <p class="services-8-text">
                                    The price need not be monetary it can simply be what is exchanged for the product or services energy or any sacrifices consumers make in order to acquire a product or service.
                                </p>

                                <div class="pb-1">
                                    <div class="services-8-category">
                                        Seasonal Campaigns
                                    </div>
                                </div>

                                <div class="pb-1">
                                    <div class="services-8-category">
                                        Digital Marketing
                                    </div>
                                </div>

                                <div class="pb-1">
                                    <div class="services-8-category">
                                        Sponsorships
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Services Item -->

                        <!-- Services Item -->
                        <div class="col-md-6 col-xl-3 d-flex">
                            <div class="services-8-item p-4 p-sm-5 wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.3s">

                                <div class="services-8-icon color-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M6.676 9.18c-1.426-.009-3.217.764-4.583 2.13-.521.521-.979 1.129-1.333 1.812 1.232-.933 2.547-1.225 4.086-.361.453-1.199 1.056-2.418 1.83-3.581zm8.154 8.143c-1.264.826-2.506 1.422-3.581 1.842.863 1.54.571 2.853-.361 4.085.684-.353 1.291-.812 1.812-1.334 1.37-1.369 2.144-3.165 2.13-4.593zm5.127-13.288c-.344-.024-.681-.035-1.011-.035-7.169 0-11.249 5.465-12.733 9.86l3.939 3.94c4.525-1.62 9.848-5.549 9.848-12.642 0-.366-.014-.74-.043-1.123zm-8.24 8.258c-.326-.325-.326-.853 0-1.178.325-.326.853-.326 1.178 0 .326.326.326.853 0 1.178-.326.326-.853.326-1.178 0zm2.356-2.356c-.651-.65-.651-1.706 0-2.357s1.706-.651 2.356 0c.651.651.651 1.706 0 2.357-.65.65-1.704.65-2.356 0zm-12.432 10.378l-.755-.755 4.34-4.323.755.755-4.34 4.323zm4.149 1.547l-.755-.755 3.029-3.054.755.755-3.029 3.054zm-5.035 2.138l-.755-.755 5.373-5.364.756.755-5.374 5.364zm21.083-14.291c-.188.618-.673 1.102-1.291 1.291.618.188 1.103.672 1.291 1.291.189-.619.673-1.103 1.291-1.291-.618-.188-1.102-.672-1.291-1.291zm-14.655-6.504c-.247.81-.881 1.443-1.69 1.69.81.247 1.443.881 1.69 1.69.248-.809.881-1.443 1.69-1.69-.81-.247-1.442-.88-1.69-1.69zm-1.827-3.205c-.199.649-.706 1.157-1.356 1.355.65.199 1.157.707 1.356 1.355.198-.649.706-1.157 1.354-1.355-.648-.198-1.155-.706-1.354-1.355zm5.387 0c-.316 1.035-1.127 1.846-2.163 2.163 1.036.316 1.847 1.126 2.163 2.163.316-1.036 1.127-1.846 2.162-2.163-1.035-.317-1.845-1.128-2.162-2.163zm11.095 13.64c-.316 1.036-1.127 1.846-2.163 2.163 1.036.316 1.847 1.162 2.163 2.197.316-1.036 1.127-1.881 2.162-2.197-1.035-.317-1.846-1.127-2.162-2.163z"/>
                                    </svg>
                                </div>

                                <h3 class="services-8-title">
                                    Online Advertising
                                </h3>

                                <p class="services-8-text">
                                    This refers to how the product gets to the custome and intermediaries such as wholesalers and retailers who enable customers to access products or services in a convenient manner.
                                </p>

                                <div class="pb-1">
                                    <div class="services-8-category">
                                        Experiential Marketing
                                    </div>
                                </div>

                                <div class="pb-1">
                                    <div class="services-8-category">
                                        Event Marketing
                                    </div>
                                </div>

                                <div class="pb-1">
                                    <div class="services-8-category">
                                        Seasonal Campaigns
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Services Item -->

                        <!-- Services Item -->
                        <div class="col-md-6 col-xl-3 d-flex">
                            <div class="services-8-item p-4 p-sm-5 wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.3s">

                                <div class="services-8-icon color-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" aria-hidden="true">
                                        <path d="M24 20h-3v4l-5.333-4h-7.667v-4h2v2h6.333l2.667 2v-2h3v-8.001h-2v-2h4v12.001zm-6-6h-9.667l-5.333 4v-4h-3v-14.001h18v14.001zm-9-4.084h-5v1.084h5v-1.084zm5-2.916h-10v1h10v-1zm0-3h-10v1h10v-1z"/>
                                    </svg>
                                </div>

                                <h3 class="services-8-title">
                                    Social Media
                                </h3>

                                <p class="services-8-text">
                                    In response to environmental and technological changes in marketing, as well as criticisms towards the 4Ps approach, the 4Cs has emerged as a modern marketing mix model.
                                </p>

                                <div class="pb-1">
                                    <div class="services-8-category">
                                        Content Generation
                                    </div>
                                </div>

                                <div class="pb-1">
                                    <div class="services-8-category">
                                        Copywriting
                                    </div>
                                </div>

                                <div class="pb-1">
                                    <div class="services-8-category">
                                        SMO Strategy
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Services Item -->

                    </div>
                    <!-- End Services Grid -->

                    <!-- Call to Action Block -->
                    <div class="container position-relative z-index-1">
                        <div class="row text-center">
                            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                                <div class="text-center mb-40 mb-sm-30">
                                    <img src="images/demo-corporate/section-image-1.png" width="100" height="100" alt="Image Description" />
                                </div>
                                <p class="section-descr-medium mb-50 mb-sm-40">
                                    Looking for exclusive marketing services? Contact us and get free online consultation for your brand or your client's brand.
                                </p>
                                <div class="local-scroll text-center">
                                    <a href="corporate-contact.html" class="btn btn-mod btn-w btn-with-icon btn-circle"><span class="btn-icon color-1"><i class="mi-heart"></i></span> <span data-btn-animate="y">Get Free Consultation <i class="mi-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Call to Action Block -->

                    <!-- Decorative Line -->
                    <div class="bg-line-2 mt-n10 mt-md-20 opacity-025">
                        <img src="images/demo-corporate/decoration-3.svg" alt="" />
                    </div>
                    <!-- End Decorative Line -->

                </section>
                <!-- End Services Section -->


                <!-- Portfolio Section -->
                <section class="page-section" id="portfolio">
                    <div class="container position-relative">

                        <div class="row mb-70 mb-sm-50">

                            <div class="col-lg-6 col-xl-5 mb-md-40">

                                <h2 class="section-title mb-40 mb-xs-30">Case Studies</h2>

                                <p class="section-descr mb-0">
                                    We help brands and businesses stand out in the changing digital landscape.
                                </p>

                            </div>

                            <div class="col-lg-6 offset-xl-1 d-flex align-items-end pb-10">

                                <!-- Features List -->
                                <div class="row mt-n10">

                                    <!-- Features List Item -->
                                    <div class="col-sm-6 d-flex mt-10">
                                        <div class="features-list-icon features-list-color-1">
                                            <i class="mi-check"></i>
                                        </div>
                                        <div class="features-list-text">
                                            Business to business
                                        </div>
                                    </div>
                                    <!-- End Features List Item -->

                                    <!-- Features List Item -->
                                    <div class="col-sm-6 d-flex mt-10">
                                        <div class="features-list-icon features-list-color-1">
                                            <i class="mi-check"></i>
                                        </div>
                                        <div class="features-list-text">
                                            Non-profit business
                                        </div>
                                    </div>
                                    <!-- End Features List Item -->

                                    <!-- Features List Item -->
                                    <div class="col-sm-6 d-flex mt-10">
                                        <div class="features-list-icon features-list-color-1">
                                            <i class="mi-check"></i>
                                        </div>
                                        <div class="features-list-text">
                                            Business to customer
                                        </div>
                                    </div>
                                    <!-- End Features List Item -->

                                    <!-- Features List Item -->
                                    <div class="col-sm-6 d-flex mt-10">
                                        <div class="features-list-icon features-list-color-1">
                                            <i class="mi-check"></i>
                                        </div>
                                        <div class="features-list-text">
                                            Ecommerce
                                        </div>
                                    </div>
                                    <!-- End Features List Item -->

                                </div>
                                <!-- End Features List -->

                            </div>

                        </div>

                        <!-- Portfolio Grid -->
                        <div class="row mt-n50 mt-sm-n40 mb-70 mb-sm-50">

                            <!-- Portfolio Item -->
                            <div class="col-md-6 col-lg-4 mt-50 mt-sm-40">
                                <a href="corporate-portfolio-single.html" class="portfolio-5-link">

                                    <div class="portfolio-5-image">
                                        <div class="portfolio-5-image-bg wow scalexIn"></div>
                                        <div class="wow fadeIn" data-wow-delay="1s">
                                            <img src="images/demo-corporate/portfolio/project-1.jpg" alt="Image Description" />
                                        </div>
                                    </div>

                                    <h3 class="portfolio-5-title"><span>How Marketing Wire Support Increased Data Accuracy by 70%</span></h3>

                                    <div class="portfolio-5-number">
                                        70%
                                    </div>

                                    <div class="portfolio-5-number-descr">
                                        growth with Resonance
                                    </div>

                                </a>
                            </div>
                            <!-- End Portfolio Item -->

                            <!-- Portfolio Item -->
                            <div class="col-md-6 col-lg-4 mt-50 mt-sm-40">
                                <a href="corporate-portfolio-single.html" class="portfolio-5-link">

                                    <div class="portfolio-5-image">
                                        <div class="portfolio-5-image-bg wow scalexIn"></div>
                                        <div class="wow fadeIn" data-wow-delay="1s">
                                            <img src="images/demo-corporate/portfolio/project-2.jpg" alt="Image Description" />
                                        </div>
                                    </div>

                                    <h3 class="portfolio-5-title"><span>How Surface Mobility Increased Sales 3X During the Latest Six Months</span></h3>

                                    <div class="portfolio-5-number">
                                        3x
                                    </div>

                                    <div class="portfolio-5-number-descr">
                                        sales increased with Resonance
                                    </div>

                                </a>
                            </div>
                            <!-- End Portfolio Item -->

                            <!-- Portfolio Item -->
                            <div class="col-md-6 col-lg-4 mt-50 mt-sm-40">
                                <a href="corporate-portfolio-single.html" class="portfolio-5-link">

                                    <div class="portfolio-5-image">
                                        <div class="portfolio-5-image-bg wow scalexIn"></div>
                                        <div class="wow fadeIn" data-wow-delay="1s">
                                            <img src="images/demo-corporate/portfolio/project-3.jpg" alt="Image Description" />
                                        </div>
                                    </div>

                                    <h3 class="portfolio-5-title"><span>How Gen Machine Uses Automations to Grow Their Subscriber Base</span></h3>

                                    <div class="portfolio-5-number">
                                        Zero
                                    </div>

                                    <div class="portfolio-5-number-descr">
                                        negative reviews with Resonance
                                    </div>

                                </a>
                            </div>
                            <!-- End Portfolio Item -->

                        </div>
                        <!-- End Portfolio Grid -->

                        <div class="local-scroll text-center">
                            <a href="corporate-portfolio.html" class="btn btn-mod btn-w btn-with-icon btn-circle"><span class="btn-icon color-3"><i class="mi-link-alt"></i></span> <span data-btn-animate="y">Read All Case Studies <i class="mi-arrow-right"></i></span></a>
                        </div>

                    </div>
                </section>
                <!-- End Portfolio Section -->


                <!-- Steps Section -->
                <section class="page-section bg-primary-1 bg-color-alpha-90 bg-scroll light-content" style="background-image: url(images/demo-corporate/section-bg-2.jpg)">
                    <div class="container position-relative">

                        <div class="row">
                            <div class="col-md-10 offset-md-1 col-lg-6 offset-lg-3">

                                <h2 class="section-title mb-70 mb-sm-50 text-center">Three Simple Steps to Succeed at Investing</h2>

                                <!-- Steps Grid -->
                                <div class="mb-n20">

                                    <!-- Steps Item -->
                                    <div class="steps-2-item d-block d-sm-flex mb-20">

                                        <div class="steps-2-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true">
                                                <path d="M17.492 15.432c-.433 0-.855-.087-1.253-.259l.467-1.082c.25.107.514.162.786.162.222 0 .441-.037.651-.11l.388 1.112c-.334.118-.683.177-1.039.177zm-10.922-.022c-.373 0-.741-.066-1.093-.195l.407-1.105c.221.081.451.122.686.122.26 0 .514-.05.754-.148l.447 1.09c-.382.157-.786.236-1.201.236zm8.67-.783l-1.659-.945.583-1.024 1.66.945-.584 1.024zm-6.455-.02l-.605-1.011 1.639-.981.605 1.011-1.639.981zm3.918-1.408c-.243-.101-.5-.153-.764-.153-.23 0-.457.04-.674.119l-.401-1.108c.346-.125.708-.188 1.075-.188.42 0 .83.082 1.217.244l-.453 1.086zm7.327-.163c-.534 0-.968.433-.968.968 0 .535.434.968.968.968.535 0 .969-.434.969-.968 0-.535-.434-.968-.969-.968zm-16.061 0c-.535 0-.969.433-.969.968 0 .535.434.968.969.968s.969-.434.969-.968c0-.535-.434-.968-.969-.968zm18.031-.832v6.683l-4 2.479v-4.366h-1v4.141l-4-2.885v-3.256h-2v3.255l-4 2.885v-4.14h-1v4.365l-4-2.479v-13.294l4 2.479v3.929h1v-3.927l4-2.886v4.813h2v-4.813l1.577 1.138c-.339-.701-.577-1.518-.577-2.524l.019-.345-2.019-1.456-5.545 4-6.455-4v18l6.455 4 5.545-4 5.545 4 6.455-4v-11.618l-.039.047c-.831.982-1.614 1.918-1.961 3.775zm2-8.403c0-2.099-1.9-3.801-4-3.801s-4 1.702-4 3.801c0 3.121 3.188 3.451 4 8.199.812-4.748 4-5.078 4-8.199zm-5.5.199c0-.829.672-1.5 1.5-1.5s1.5.671 1.5 1.5-.672 1.5-1.5 1.5-1.5-.671-1.5-1.5zm-.548 8c-.212-.992-.547-1.724-.952-2.334v2.334h.952z"/>
                                            </svg>
                                        </div>

                                        <div class="steps-2-intro pb-xs-30">
                                            <h3 class="steps-2-title">Planning the Roadmap</h3>
                                            <p class="steps-2-text mb-0">
                                                Businesses buy products in large volumes to distribute to consumers.
                                            </p>
                                        </div>

                                        <div class="steps-2-number">
                                            Step 1
                                        </div>

                                    </div>
                                    <!-- End Steps Item -->

                                    <!-- Steps Item -->
                                    <div class="steps-2-item d-block d-sm-flex mb-20">

                                        <div class="steps-2-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true">
                                                <path d="M23 0l-4.5 16.5-6.097-5.43 5.852-6.175-7.844 5.421-5.411-1.316 18-9zm-11 12.501v5.499l2.193-3.323-2.193-2.176zm-2.789 3.857l.94.934c-.875.885-1.773 1.933-2.125 3.375l-1.286-.314c.434-1.774 1.491-3.004 2.471-3.995zm-1.565 7.642c-.715 0-1.353-.279-1.887-.83-1.458.515-2.844-.044-3.576-1.084-.575-.817-.703-1.853-.353-2.845-.552-.534-.83-1.166-.83-1.884 0-1.562 1.16-2.803 3.24-2.586l.195 1.117c-.664.062-1.277.097-1.674.494-.668.668-.467 2.063.787 2.433-.832.836-.751 2.037-.127 2.696.654.69 1.903.799 2.765-.059.385 1.305 1.798 1.422 2.433.787.392-.392.431-.995.492-1.649l1.125.229c.2 1.979-1.009 3.181-2.59 3.181zm-3.318-7.032l.314 1.287c1.755-.43 2.953-1.45 3.989-2.471l-.938-.931c-.876.866-1.927 1.764-3.365 2.115z"/>
                                            </svg>
                                        </div>

                                        <div class="steps-2-intro pb-xs-30">
                                            <h3 class="steps-2-title">Strategy Implementation</h3>
                                            <p class="steps-2-text mb-0">
                                                Consumers buy products in smaller volumes suitable for personal use.
                                            </p>
                                        </div>

                                        <div class="steps-2-number">
                                            Step 2
                                        </div>

                                    </div>
                                    <!-- End Steps Item -->

                                    <!-- Steps Item -->
                                    <div class="steps-2-item d-block d-sm-flex mb-20">

                                        <div class="steps-2-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true">
                                                <path d="M21 3c0-1.657-1.343-3-3-3s-3 1.343-3 3c0 1.323.861 2.433 2.05 2.832.168 4.295-2.021 4.764-4.998 5.391-1.709.36-3.642.775-5.052 2.085v-7.492c1.163-.413 2-1.511 2-2.816 0-1.657-1.343-3-3-3s-3 1.343-3 3c0 1.305.837 2.403 2 2.816v12.367c-1.163.414-2 1.512-2 2.817 0 1.657 1.343 3 3 3s3-1.343 3-3c0-1.295-.824-2.388-1.973-2.808.27-3.922 2.57-4.408 5.437-5.012 3.038-.64 6.774-1.442 6.579-7.377 1.141-.425 1.957-1.514 1.957-2.803zm-16.8 0c0-.993.807-1.8 1.8-1.8s1.8.807 1.8 1.8-.807 1.8-1.8 1.8-1.8-.807-1.8-1.8zm3.6 18c0 .993-.807 1.8-1.8 1.8s-1.8-.807-1.8-1.8.807-1.8 1.8-1.8 1.8.807 1.8 1.8zm10.2-16.2c-.993 0-1.8-.807-1.8-1.8s.807-1.8 1.8-1.8 1.8.807 1.8 1.8-.807 1.8-1.8 1.8z"/>
                                            </svg>
                                        </div>

                                        <div class="steps-2-intro pb-xs-30">
                                            <h3 class="steps-2-title">Optimizing Through Empowerment</h3>
                                            <p class="steps-2-text mb-0">
                                                There are relatively fewer businesses to market to than direct consumers.
                                            </p>
                                        </div>

                                        <div class="steps-2-number">
                                            Step 3
                                        </div>

                                    </div>
                                    <!-- End Steps Item -->

                                </div>
                                <!-- End Steps Grid -->

                            </div>
                        </div>

                    </div>
                </section>
                <!-- End Steps Section -->


                <!-- Testimonials Section -->
                <section class="page-section" id="clients-stories">
                    <div class="container position-relative">

                        <div class="row">
                            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                                <h2 class="section-title mb-70 mb-sm-50 text-center">Clients Stories</h2>
                            </div>
                        </div>

                        <!-- Testimonial -->
                        <div class="row mb-80 mb-sm-60">

                            <div class="col-md-5 col-lg-4 offset-lg-1 mb-sm-40">
                                <div class="overflow-hidden round">
                                    <img src="images/demo-corporate/testimonial-1.jpg" alt="Image Description" class="wow scaleOutIn" />
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-1 col-lg-5 offset-lg-1 d-flex align-items-center wow fadeInUp">
                                <blockquote class="testimonials-6-item">

                                    <div class="testimonials-6-icon" aria-hidden="true">“</div>

                                    <p class="testimonials-6-text mb-40">
                                        This is template is so beautiful and has such wonderful new options. It is updated often which gives me even more quality. The support is the absolute best I've ever had the pleasure of interacting with. Quick, courteous, premium and extremely helpful!
                                    </p>

                                    <div class="section-line mb-10"></div>

                                    <footer>
                                        <div class="testimonials-6-author">
                                            Adam Peterson
                                        </div>
                                        <div class="testimonials-6-position">
                                            Marketing Consultant
                                        </div>
                                    </footer>

                                </blockquote>
                            </div>

                        </div>
                        <!-- End Testimonial -->

                        <!-- Testimonial -->
                        <div class="row">

                            <div class="col-md-5 offset-md-1 col-lg-4 offset-lg-1 order-md-last mb-sm-40">
                                <div class="overflow-hidden round">
                                    <img src="images/demo-corporate/testimonial-2.jpg" alt="Image Description" class="wow scaleOutIn" />
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5 offset-lg-1 d-flex align-items-center wow fadeInUp">
                                <blockquote class="testimonials-6-item">

                                    <div class="testimonials-6-icon" aria-hidden="true">“</div>

                                    <p class="testimonials-6-text mb-40">
                                        Optimization and structure are verry good for SEO basics. A remarkable model, everything has been thought out with talent, the design, the various adaptations. Beautifull template, nice code and easy to customize.
                                    </p>

                                    <div class="section-line mb-10"></div>

                                    <footer>
                                        <div class="testimonials-6-author">
                                            Jordan Harvey
                                        </div>
                                        <div class="testimonials-6-position">
                                            SEO/SMO Expert
                                        </div>
                                    </footer>

                                </blockquote>
                            </div>

                        </div>
                        <!-- End Testimonial -->

                    </div>
                </section>
                <!-- End Testimonials Section -->


                <!-- Call to Action Section -->
                <section class="page-section bg-scroll light-content" style="background-image: url(images/demo-corporate/section-bg-3.jpg)">

                    <!-- Desktop Overlay -->
                    <div class="bg-overlay bg-gradient-primary-alpha-2 d-none d-md-block"></div>
                    <!-- End Desktop Overlay -->

                    <!-- Mobile Overlay -->
                    <div class="bg-overlay bg-primary-1 opacity-09 d-md-none"></div>
                    <!-- End Mobile Overlay -->

                    <div class="container position-relative">
                        <div class="row">
                            <div class="col-md-7 offset-md-5 col-lg-6 offset-lg-6 col-xl-5 offset-xl-7">

                                <h2 class="section-title mb-40 mb-xs-30">Marketing <span class="mark-decoration-5">Jumpstart</span> for Your Business</h2>

                                <p class="section-descr mb-50 mb-sm-40">The marketing audit is generally conducted by a third person, not a member of an organization.</p>

                                <div class="local-scroll mb-70 mb-sm-50">
                                    <a href="corporate-contact.html" class="btn btn-mod btn-w-c btn-large btn-round btn-hover-anim opacity-09"><span>Get a Consultation</span></a>
                                </div>

                                <!-- Features List -->
                                <div class="row mt-n10">

                                    <!-- Features List Item -->
                                    <div class="col-lg-6 d-flex mt-10">
                                        <div class="features-list-icon features-list-color-2">
                                            <i class="mi-check"></i>
                                        </div>
                                        <div class="features-list-text">
                                            Business to business
                                        </div>
                                    </div>
                                    <!-- End Features List Item -->

                                    <!-- Features List Item -->
                                    <div class="col-lg-6 d-flex mt-10">
                                        <div class="features-list-icon features-list-color-2">
                                            <i class="mi-check"></i>
                                        </div>
                                        <div class="features-list-text">
                                            Non-profit business
                                        </div>
                                    </div>
                                    <!-- End Features List Item -->

                                    <!-- Features List Item -->
                                    <div class="col-lg-6 d-flex mt-10">
                                        <div class="features-list-icon features-list-color-2">
                                            <i class="mi-check"></i>
                                        </div>
                                        <div class="features-list-text">
                                            Business to customer
                                        </div>
                                    </div>
                                    <!-- End Features List Item -->

                                    <!-- Features List Item -->
                                    <div class="col-lg-6 d-flex mt-10">
                                        <div class="features-list-icon features-list-color-2">
                                            <i class="mi-check"></i>
                                        </div>
                                        <div class="features-list-text">
                                            Ecommerce
                                        </div>
                                    </div>
                                    <!-- End Features List Item -->

                                </div>
                                <!-- End Features List -->

                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Call to Action Section -->


                <!-- Blog Section -->
                <section class="page-section" id="blog">
                    <div class="container position-relative">

                        <div class="row">

                            <div class="col-lg-5 col-xl-4 mb-md-70 mb-sm-50">

                                <h2 class="section-title mb-40 mb-xs-30">Our Blog</h2>

                                <p class="section-descr mb-50 mb-sm-40">
                                    Check the best marketing resources and the latest news about our company.
                                </p>

                                <div class="local-scroll">
                                    <a href="corporate-blog.html" class="btn btn-mod btn-w btn-with-icon btn-circle"><span class="btn-icon color-3"><i class="mi-link-alt"></i></span> <span data-btn-animate="y">Read All Articles <i class="mi-arrow-right"></i></span></a>
                                </div>

                            </div>

                            <div class="col-lg-7 col-xl-8">
                                <div class="row mt-n50">

                                    <!-- Blog Post Item -->
                                    <div class="post-prev-2 col-md-6 mt-50 wow fadeInLeft">

                                        <div class="post-prev-2-img">
                                            <a href="corporate-blog-single.html"><img src="images/demo-corporate/blog/post-prev-1.jpg" alt="Image Description" /></a>
                                        </div>

                                        <h3 class="post-prev-2-title"><a href="corporate-blog-single.html">Content Marketing Steps That Will Help You to Grow Your Business</a></h3>

                                        <p class="post-prev-2-text">
                                            The macro-environment, over which a firm holds little control, consists of a variety of external factors that manifest on a large scale.
                                        </p>

                                        <div class="post-prev-2-tags">
                                            <span class="post-prev-2-tag">February 13, 2022</span>
                                            <span class="post-prev-2-tag"><i class="mi-circle color-primary-1"></i> Articles</span>
                                        </div>

                                    </div>
                                    <!-- End Blog Post Item -->

                                    <!-- Blog Post Item -->
                                    <div class="post-prev-2 col-md-6 mt-50 wow fadeInLeft" data-wow-delay="0.12s">

                                        <div class="post-prev-2-img">
                                            <a href="corporate-blog-single.html"><img src="images/demo-corporate/blog/post-prev-2.jpg" alt="Image Description" /></a>
                                        </div>

                                        <h3 class="post-prev-2-title"><a href="corporate-blog-single.html">Top Five Trends for Small Investment Companies Marketing</a></h3>

                                        <p class="post-prev-2-text">
                                            The micro-environment, over which a firm holds a greater amount control, typically includes Employees, Suppliers and the Media.
                                        </p>

                                        <div class="post-prev-2-tags">
                                            <span class="post-prev-2-tag">February 11, 2023</span>
                                            <span class="post-prev-2-tag"><i class="mi-circle color-primary-2"></i> Tutorials</span>
                                        </div>

                                    </div>
                                    <!-- End Blog Post Item -->

                                </div>
                            </div>

                        </div>

                    </div>
                </section>
                <!-- End Blog Section -->


                <!-- Newsletter Section -->
                <section class="container">
                    <div class="page-section px-4 px-md-0 bg-gradient-primary-light-1 round">

                        <div class="row">
                            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 wow fadeInUp">

                                <div class="row">
                                    <div class="col-md-10 col-xl-8 d-flex mb-50 mb-sm-30">
                                        <div class="flex-sm-shrink-0 me-3 me-sm-4">
                                            <img src="images/demo-corporate/section-image-1.png" width="100" height="100" alt="Image Description" />
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <h2 class="section-title-small w-100 mb-0">Stay informed with our weekly newsletter.</h2>
                                        </div>
                                    </div>
                                </div>

                                <form id="mailchimp" class="form">

                                    <div class="d-sm-flex justify-content-between mb-3">
                                        <label for="newsletter-email" class="visually-hidden">Your email</label>
                                        <input placeholder="Enter your email" class="newsletter-field input-lg round" id="newsletter-email" name="newsletter-email" type="email" pattern=".{5,100}" required aria-required="true">
                                        <button type="submit" aria-controls="subscribe-result" class="newsletter-button btn btn-mod btn-color btn-large btn-round btn-hover-anim">
                                            <span>Subscribe <span class="d-none d-md-inline-block">Now</span></span>
                                        </button>
                                    </div>

                                    <div class="form-tip">
                                        <i class="icon-info size-16"></i>
                                        By sending the form you agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>.
                                    </div>

                                    <div id="subscribe-result" role="region" aria-live="polite" aria-atomic="true"></div>

                                </form>

                            </div>
                        </div>

                    </div>
                </section>
                <!-- End Newsletter Section -->


                <!-- Contact Section -->
                <section class="page-section" id="contact">

                    <!-- Decorative Line -->
                    <div class="bg-line-3 opacity-025 mb-n90 mb-lg-n70 mb-md-n60 mb-sm-n40">
                        <img src="images/demo-corporate/decoration-4.svg" alt="" />
                    </div>
                    <!-- End Decorative Line -->

                    <div class="container position-relative">

                        <div class="row mb-80 mb-sm-60">
                            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">

                                <h2 class="section-title mb-40 mb-xs-30">Let’s have a conversation</h2>

                                <p class="section-descr mb-0">
                                    We’re open to talking to good people. Just say hello, and we’ll start productive cooperation. Start your own success story.
                                </p>

                            </div>
                        </div>

                        <div class="row wow fadeInUp">

                            <!-- Left Column -->
                            <div class="col-lg-5 mb-md-50 mb-sm-30 d-flex align-items-strech">
                                <div class="bg-color-primary-1 bg-color-alpha-90 bg-image bg-scroll light-content w-100 round overflow-hidden px-4 px-sm-5 py-5" style="background-image: url(images/demo-corporate/section-bg-4.jpg)">

                                    <!-- Address -->
                                    <div class="contact-item mb-40 mb-sm-20">
                                        <div class="ci-icon">
                                            <i class="mi-location"></i>
                                        </div>
                                        <h4 class="ci-title">
                                            Address
                                        </h4>
                                        <div class="ci-text large">
                                            Envato Pty Ltd, PO Box 16122 Collins Street, West Victoria.
                                        </div>
                                        <div class="ci-link">
                                            <a href="https://goo.gl/maps/7Vw1PBhxx5BaXStr8" rel="nofollow noopener" target="_blank">See Map</a>
                                        </div>
                                    </div>
                                    <!-- End Address -->

                                    <hr class="mt-0 mb-40 mb-sm-20 opacity-02"/>

                                    <!-- Email -->
                                    <div class="contact-item mb-40 mb-sm-20">
                                        <div class="ci-icon">
                                            <i class="mi-email"></i>
                                        </div>
                                        <h4 class="ci-title">
                                            Email
                                        </h4>
                                        <div class="ci-text large">
                                            support@bestlooker.pro
                                        </div>
                                        <div class="ci-link">
                                            <a href="mailto:support@bestlooker.pro">Say Hello</a>
                                        </div>
                                    </div>
                                    <!-- End Email -->

                                    <hr class="mt-0 mb-40 mb-sm-20 opacity-02"/>

                                    <!-- Phone -->
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="mi-mobile"></i>
                                        </div>
                                        <h4 class="ci-title">
                                            Phone
                                        </h4>
                                        <div class="ci-text large">
                                            +1 837 652 8800
                                        </div>
                                        <div class="ci-link">
                                            <a href="tel:+61383767284">Call now</a>
                                        </div>
                                    </div>
                                    <!-- End Phone -->

                                </div>
                            </div>
                            <!-- End Left Column -->

                            <!-- Right Column -->
                            <div class="col-lg-7 d-flex align-items-strech">
                                <div class="border-color-primary-1 round w-100 px-4 px-sm-5 py-5">

                                    <h3 class="section-title-small mt-n10 mb-40 mb-sm-30">We'd love to hear from you</h3>

                                    <!-- Contact Form -->
                                    <form class="form contact-form" id="contact_form">

                                        <div class="row">
                                            <div class="col-md-6">

                                                <!-- Name -->
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" name="name" id="name" class="input-lg round form-control" placeholder="Enter your name" pattern=".{3,100}" required aria-required="true">
                                                </div>
                                                <!-- End Name -->

                                            </div>

                                            <div class="col-md-6">

                                                <!-- Email -->
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" id="email" class="input-lg round form-control" placeholder="Enter your email" pattern=".{5,100}" required aria-required="true">
                                                </div>
                                                <!-- End Email -->

                                            </div>
                                        </div>

                                        <!-- Message -->
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea name="message" id="message" class="input-lg round form-control" style="height: 132px;" placeholder="Enter your message"></textarea>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-6 col-xl-7 d-flex align-items-center">

                                                <!-- Inform Tip -->
                                                <div class="form-tip w-100 pt-3">
                                                    <i class="icon-info size-16"></i>
                                                    All the fields are required. By sending the form you agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>.
                                                </div>
                                                <!-- End Inform Tip -->

                                            </div>

                                            <div class="col-md-6 col-xl-5 mt-sm-20">

                                                <!-- Send Button -->
                                                <div class="pt-3 text-md-end">
                                                    <button type="submit" class="submit_btn btn btn-mod btn-color btn-large btn-round btn-hover-anim" id="submit_btn" aria-controls="result">
                                                        <span>Send Message</span>
                                                    </button>
                                                </div>
                                                <!-- End Send Button -->

                                            </div>

                                        </div>

                                       <div id="result" role="region" aria-live="polite" aria-atomic="true"></div>

                                    </form>
                                    <!-- End Contact Form -->

                                </div>
                            </div>
                            <!-- End Right Column -->

                        </div>

                    </div>

                </section>
                <!-- End Contact Section -->

            </main>

            <!-- Divider -->
            <hr class="mt-0 mb-0"/>
            <!-- End Divider -->

            <!-- Footer -->
            <footer class="footer-2 pb-50">
                <div class="container position-relative">

                    <!-- Back to Top Link -->
                    <div class="local-scroll position-relative z-index-1">
                        <a href="#top" class="link-to-top color position-absolute top-0 end-0 translate-middle-y">
                            <i class="mi-arrow-up size-24"></i>
                            <span class="visually-hidden">Scroll to top</span>
                        </a>
                    </div>
                    <!-- End Back to Top Link -->

                    <div class="page-section">
                        <div class="row">

                            <div class="col-lg-6 mb-md-60">

                                <h2 class="section-title mb-60 mb-sm-40">Ready to get started with Resonance Template?</h2>

                                <div class="local-scroll">
                                    <a href="corporate-contact.html" class="btn btn-mod btn-color btn-large btn-round btn-hover-anim">
                                        <span>Get a Consultation</span>
                                    </a>
                                </div>

                            </div>

                            <div class="col-lg-5 offset-lg-1 pt-10">
                                <div class="row">

                                    <div class="col-md-6 mb-sm-40">
                                        <ul class="fw-menu-large clearlist">
                                            <li>
                                                <a href="#">About us</a>
                                            </li>
                                            <li>
                                                <a href="#">Services</a>
                                            </li>
                                            <li>
                                                <a href="#">Portfolio</a>
                                            </li>
                                            <li>
                                                <a href="#">Blog</a>
                                            </li>
                                            <li>
                                                <a href="#">Contact</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-6">
                                        <ul class="fw-menu-large clearlist">
                                            <li>
                                                <a href="#">Privacy Policy</a>
                                            </li>
                                            <li>
                                                <a href="#">Terms & Conditions</a>
                                            </li>
                                            <li>
                                                <a href="#">Presskit</a>
                                            </li>
                                            <li>
                                                <a href="#">Credits</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Footer Text -->
                    <div class="row">

                        <div class="col-md-6 mb-sm-40">
                            Made with love for great people. <br>
                            © Bestlooker 2023.
                        </div>

                        <!-- Social Links -->
                        <div class="col-md-6 footer-2-social-links text-md-end mb-md-40">
                            <a href="#" title="Facebook" rel="noopener nofollow" target="_blank">
                                <span class="visually-hidden">Facebook</span>
                                <i class="fa-facebook-f"></i>
                            </a>
                            <a href="#" title="Twitter" rel="noopener nofollow" target="_blank">
                                <span class="visually-hidden">Skype</span>
                                <i class="fa-skype"></i>
                            </a>
                            <a href="#" title="Pinterest" rel="noopener nofollow" target="_blank">
                                <span class="visually-hidden">Pinterest</span>
                                <i class="fa-pinterest"></i>
                            </a>
                            <a href="#" title="Behance" rel="noopener nofollow" target="_blank">
                                <span class="visually-hidden">Behance</span>
                                <i class="fa-behance"></i>
                             </a>
                            <a href="#" title="Dribbble" rel="noopener nofollow" target="_blank">
                                <span class="visually-hidden">Dribbble</span>
                                <i class="fa-dribbble"></i>
                            </a>
                        </div>
                        <!-- End Social Links -->

                    </div>
                    <!-- End Footer Text -->

                 </div>
            </footer>
            <!-- End Footer -->

        </div>
        <!-- End Page Wrap -->

        <!-- JS -->
        <script src="{{asset('theme/js/jquery.min.js')}}"></script>
        <script src="{{asset('theme/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('theme/js/plugins.js')}}"></script>
        <script src="{{asset('theme/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('theme/js/contact-form.js')}}"></script>
        <script src="{{asset('theme/js/all.js')}}"></script>
        <!-- End JS -->

    </body>
</html>