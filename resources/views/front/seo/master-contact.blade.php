<!DOCTYPE html>
<!-- Change the value of lang="en" attribute if your website's language is not English.
You can find the code of your language here - https://www.w3schools.com/tags/ref_language_codes.asp -->
<html lang="en">
    <head>

        <!-- Standard Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="developer" content="https://designekta.com">
        <meta name="author" content="Gownsea LTD">
        <meta name="robots" content="index,follow">
        <meta name="googlebot" content="index,follow">
        <meta name="subject" content="Contact Gownsea LTD | Graduation Gowns, Legal Attire & Church Wear in Kenya">
        <meta name="rating" content="General">
        <meta name="referrer" content="strict-origin-when-cross-origin">
        <meta name="theme-color" content="#c32728">
        <meta name="expires" content="never">

        <title>Contact Gownsea LTD | Graduation Gowns, Legal Attire & Church Wear in Kenya</title>
        <meta name="description" content="Need graduation gowns, legal attire, or clergy wear? Contact Gownsea LTD today. Visit us at Valji Building, Moktar Daddah St, Nairobi, or call +254 728 311 537." />
        <link rel="canonical" href="https://gownsea.com/contact-us" />
        <meta name="keywords" content="contact Gownsea LTD, graduation gown supplier Kenya, legal attire Nairobi, clergy wear supplier, ceremonial robes Kenya, where to rent graduation gowns in Kenya" />

        <!-- Open Graph (OG) Tags for Social Media -->
        <meta property="og:title" content="Contact Gownsea LTD | Graduation Gowns, Legal Attire & Church Wear in Kenya" />
        <meta property="og:description" content="Get in touch with Gownsea LTD for high-quality graduation gowns, legal attire, and clergy wear. Visit us in Nairobi or call +254 728 311 537." />
        <meta property="og:image" content="https://gownsea.com/uploads/about-gownsea.webp" />
        <meta property="og:url" content="https://gownsea.com/contact-us" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Gownsea LTD">
        <meta property="og:phone_number" content="+254 728 311537">
        <meta property="og:locale" content="en_KE">

        <!-- Twitter Card Tags -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Contact Gownsea LTD | Graduation Gowns, Legal Attire & Church Wear in Kenya" />
        <meta name="twitter:description" content="Need premium ceremonial wear? Contact Gownsea LTD today. Call +254 728 311 537 or visit us at Valji Building, Moktar Daddah St, Nairobi." />
        <meta name="twitter:image" content="https://gownsea.com/uploads/about-gownsea.webp" />

        <!-- Structured Data (Schema Markup) for SEO -->
        <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "ContactPage",
        "name": "Contact Gownsea LTD",
        "url": "https://gownsea.com/contact-us",
        "image": "https://gownsea.com/uploads/about-gownsea.webp",
        "description": "Reach out to Gownsea LTD for premium ceremonial wear, including graduation gowns, legal robes, and clergy attire in Kenya.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Valji Building, Moktar Daddah St",
            "addressLocality": "Nairobi",
            "addressCountry": "KE"
        },
        "telephone": "+254728311537",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+254728311537",
            "contactType": "customer service",
            "areaServed": "KE",
            "availableLanguage": "en"
        }
        }
        </script>


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
         <nav class="main-nav dark transparent stick-fixed wow-menubar js-transparent small-height body-scrolled fadeInDown animated">
            <div class="main-nav-sub full-wrapper">

                <!-- Logo  (* Add your text or image to the link tag. Use SVG or PNG image format.
                If you use a PNG logo image, the image resolution must be equal 200% of the visible logo
                image size for support of retina screens. See details in the template documentation. *) -->
                <div class="nav-logo-wrap local-scroll">
                    <a href="{{url('/')}}" class="logo font-alt">
                        <img src="{{asset('theme/images/logs_g.webp')}}" alt="Gownsea Logo" class="logo-img">
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="mobile-nav" role="button" tabindex="0">
                    <i class="mobile-nav-icon"></i>
                    <span class="visually-hidden">Menu</span>
                </div>


                <!-- Main Menu -->
                @include('front.seo.menu')
                <!-- End Main Menu -->

            </div>
        </nav>
        <!-- End Navigation Panel -->

            @yield('content')

            <!-- Divider -->
            <hr class="mt-0 mb-0"/>
            <!-- End Divider -->

            <!-- Footer -->
           @include('front.footer')
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
				  position: "left" //Position: left | right

			  });
		  });
	  </script>
      <script>
        $("#stkForm").on('submit', (function(e) {
            e.preventDefault();
            $('.loading-img').show();

            $('.stk-check').html('Check your phone and enter your pin......');
            $.ajax({
                url: $(this).attr('action'),
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    $('.stk-check').html('');

                    var responses = response['response'];

                    $('.loading-img').hide();
                    $("#stkForm").trigger("reset");

                    if(responses == "success"){
                        $('.stk-check').html('Thank You For Choosing Gownsea, We are now redirecting you......');
                        setTimeout(function() {
                            $(location).attr('href', '{{route('mobile-payment-received')}}');
                        }, 5000);
                    }else{
                        $('.stk-check').html(responses);
                        $(location).attr('href', '{{route('mobile-payment-failed')}}');
                    }
                },
                error: function(e) {
                    console.log(e);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    })
                }
            });
        }));
      </script>

    </body>
</html>
