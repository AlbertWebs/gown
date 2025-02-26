<!DOCTYPE html>
<!-- Change the value of lang="en" attribute if your website's language is not English.
You can find the code of your language here - https://www.w3schools.com/tags/ref_language_codes.asp -->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="https://themeforest.net/user/bestlooker/portfolio">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        {{--  --}}
        <title>Gownsea LTD | Graduation Gowns for Sale & Rent in Kenya</title>
        <meta name="description" content="Gownsea LTD offers high-quality graduation gowns for sale and hire, covering preschool, certificate, diploma, degree, master's, and PhD levels. We also provide custom-stitched gowns tailored to your needs.">
        <meta name="keywords" content="graduation gowns Kenya, buy graduation gown, rent graduation gown, custom graduation gowns, PhD gowns, master's gowns, degree gowns, diploma gowns, preschool gowns">
        <meta name="author" content="Gownsea LTD">
        <meta name="robots" content="index, follow">

        <!-- Open Graph (Facebook, LinkedIn, etc.) -->
        <meta property="og:title" content="Gownsea LTD | Graduation Gowns for Sale & Rent in Kenya">
        <meta property="og:description" content="We sell and rent high-quality graduation gowns, including preschool, certificate, diploma, degree, master's, and PhD gowns. Custom designs available!">
        <meta property="og:image" content="https://gownsea.designekta.com/public/theme/images/logs_g.webp">
        <meta property="og:url" content="https://gownsea.com/">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Gownsea LTD">
        <meta property="og:phone_number" content="+254 728 311537">
        <meta property="og:locale" content="en_KE">

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Gownsea LTD | Graduation Gowns for Sale & Rent in Kenya">
        <meta name="twitter:description" content="We offer premium graduation gowns for sale and hire, with custom stitching options. Find the perfect gown for your special day!">
        <meta name="twitter:image" content="https://gownsea.designekta.com/public/theme/images/logs_g.webp">
        <meta name="twitter:site" content="@gownsea_ke">
        <meta name="twitter:creator" content="@gownsea_ke">

        <!-- Schema Markup (Google Rich Results) -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "LocalBusiness",
          "name": "Gownsea LTD",
          "url": "https://gownsea.com/",
          "logo": "https://gownsea.designekta.com/public/theme/images/logs_g.webp",
          "description": "We offer high-quality graduation gowns for sale and hire, covering preschool to PhD levels, plus custom stitching services for unique designs.",
          "telephone": "+254 728 311537",
          "image": "https://gownsea.designekta.com/public/theme/images/logs_g.webp",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Valji Building, Moktar Daddah St",
            "addressLocality": "Nairobi",
            "addressCountry": "KE"
          },
          "openingHours": "Mo-Fr 08:00-17:00",
          "sameAs": [
            "https://www.facebook.com/GownseaLtd/",
            "https://www.instagram.com/gownsea_ke/",
            "https://www.google.com/maps/place/Gownsea+Ltd/data=!4m2!3m1!1s0x0:0xd5afcb025a37d2dd?sa=X&ved=1t:2428&ictx=111"
          ]
        }
        </script>
        {{--  --}}

        <!-- Favicon -->
        @include('favicon')

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
        <!--Floating WhatsApp css-->
        <link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">


    </head>
    <body class="appear-animate">
        <div style="z-index:100000;" id="WAButton"></div>

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
                    <a href="{{url('/')}}" class="logo font-alt">
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
                        <li><a href="#" class="@if($Page_title=="home") active @endif">Home</a></li>
                        <li>
                            <a href="#" class="mn-has-sub @if($Page_title=="gown-for-hire") active @endif" role="button" aria-expanded="false" aria-haspopup="true">Graduation Attire <i class="mi-chevron-down"></i></a>

                            <!-- Sub -->
                            <ul class="mn-sub" style="display: none;">
                                <?php
                                    $Gowns = DB::table('gowns')->get();
                                ?>

                                @foreach ($Gowns as $Gown)
                                <li>
                                    <a href="{{route('gown-for-hire-single', $Gown->slung)}}" role="button" aria-expanded="false" aria-haspopup="true">{{$Gown->title}} </a>
                                </li>
                                @endforeach




                            </ul>
                            <!-- End Sub -->

                        </li>

                        <li><a class="@if($Page_title=="legal-attire") active @endif" href="{{route('legal-attire')}}">Legal Attire</a></li>
                        <li><a  class="@if($Page_title=="church-wear") active @endif" href="{{route('church-wear')}}">Church Wear</a></li>
                        <li><a class="@if($Page_title=="about-us") active @endif" href="{{route('about-us')}}">About Us</a></li>
                        <li><a class="@if($Page_title=="blog") active @endif" href="{{route('blog')}}" href="#">Blog</a></li>
                        <li><a class="@if($Page_title=="blog") active @endif" href="{{route('blog')}}" href="#">Bulk Hire</a></li>
                        <li><a class="@if($Page_title=="contact-us") active @endif" href="{{route('contact-us')}}">Contact Us</a></li>
                    </ul>



                    <ul class="items-end clearlist local-scroll">
                        <li>
                            <a href="{{route('contact-us')}}" class="opacity-1 no-hover">
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

            @yield('content')

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

                                <h2 class="section-title mb-60 mb-sm-40">Need Graduation Attire?</h2>

                                <div class="local-scroll">
                                    <a href="corporate-contact.html" class="btn btn-mod btn-color btn-large btn-round btn-hover-anim">
                                        <span>Hire a Gown</span>
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
                                                <a href="#">What We Do</a>
                                            </li>
                                            <li>
                                                <a href="#">Hire a Gown</a>
                                            </li>
                                            <li>
                                                <a href="#">FAQ</a>
                                            </li>
                                            <li>
                                                <a href="#">Contact Us</a>
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
                                                <a href="#">Return Policy</a>
                                            </li>
                                            <li>
                                                <a href="#">Copyright</a>
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
                           Powered By Gownsea <br>
                            © Gownsea 2023.
                        </div>

                        <!-- Social Links -->
                        <div class="col-md-6 footer-2-social-links text-md-end mb-md-40">
                            <a href="#" title="Facebook" rel="noopener nofollow" target="_blank">
                                <span class="visually-hidden">Facebook</span>
                                <i class="fa-facebook-f"></i>
                            </a>
                            <a href="#" title="Twitter" rel="noopener nofollow" target="_blank">
                                <span class="visually-hidden">Instagram</span>
                                <i class="fa-instagram"></i>
                            </a>
                            <a href="#" title="Pinterest" rel="noopener nofollow" target="_blank">
                                <span class="visually-hidden">Pinterest</span>
                                <i class="fa-pinterest"></i>
                            </a>
                            <a href="#" title="Behance" rel="noopener nofollow" target="_blank">
                                <span class="visually-hidden">Twitter</span>
                                <i class="fa-twitter"></i>
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
        <script src="{{asset('theme/js/all.js')}}"></script>
        <!-- End JS -->
        <!--Floating WhatsApp javascript-->
	  <script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>

	  <script type="text/javascript">
		  $(function () {
			  $('#WAButton').floatingWhatsApp({
				  phone: '+254728311537', //WhatsApp Business phone number
				  headerTitle: 'Chat with us on WhatsApp!', //Popup Title
				  popupMessage: 'Hello, how can we help you?', //Popup Message
				  showPopup: true, //Enables popup display
				  buttonImage: '<img  src="{{url('/')}}/uploads/icon/whatsapp.svg" />', //Button Image
				  //headerColor: 'crimson', //Custom header color
				  //backgroundColor: 'crimson', //Custom background button color
				  position: "right" //Position: left | right

			  });
		  });
	  </script>

    </body>
</html>
