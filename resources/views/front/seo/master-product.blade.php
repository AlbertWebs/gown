<!DOCTYPE html>
<!-- Change the value of lang="en" attribute if your website's language is not English.
You can find the code of your language here - https://www.w3schools.com/tags/ref_language_codes.asp -->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="https://designekta.com">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        {{--  --}}
        <meta name="developer" content="https://designekta.com">
        <meta name="author" content="Gownsea LTD">
        <meta name="robots" content="index,follow">
        <meta name="googlebot" content="index,follow"><!-- Google Specific -->
        <meta name="subject" content="Buy {{$Gown->title}} in Nairobi | Graduation Gowns for Hire | Gownsea LTD">
        <meta name="rating" content="General">
        <meta name="referrer" content="strict-origin-when-cross-origin">
        <meta name="theme-color" content="#c32728">

        {{--  --}}
        <title>Buy {{$Gown->title}} in Nairobi | Graduation Gowns for Hire | Gownsea LTD</title>
        <meta name="description" content="Gownsea LTD offers high-quality {{$Gown->title}} for sale and hire, covering preschool, certificate, diploma, degree, master's, and PhD levels. We also provide custom-stitched gowns tailored to your needs.">
        <meta name="keywords" content="{{$Category->title}} Kenya, buy graduation gown, rent graduation gown, custom {{$Gown->title}}, PhD gowns, master's gowns, degree gowns, diploma gowns, preschool gowns">
        <link rel="canonical" href="{{url('/')}}/our-products/{{$Gown->slung}}" />

        <!-- Open Graph Meta Tags (Facebook & Social Media) -->
        <meta property="og:title" content="Buy {{$Gown->title}} in Nairobi | Graduation Gowns for Hire | Gownsea LTD" />
        <meta property="og:description" content="We sell and rent high-quality {{$Gown->title}}, including preschool, certificate, diploma, degree, master's, and PhD gowns. Custom designs available, Order Now" />
        <meta property="og:type" content="product" />
        <meta property="og:url" content="{{url('/')}}/our-products/{{$Gown->slung}}" />
        <meta property="og:image" content="{{url('/')}}/uploads/products/{{$Gown->image}}" />
        <meta property="og:site_name" content="Gownsea LTD">
        <meta property="og:phone_number" content="+254 728 311537">
        <meta property="og:locale" content="en_KE">
        <meta property="fb:app_id" content="" />
        <meta property="og:id" content="{{$Gown->id}}" />
        <meta property="product:brand" content="Gownsea LTD" />
        <meta property="product:availability" content="in stock" />
        <meta property="product:condition" content="new" />
        <meta property="product:price:amount" content="KES {{$Gown->price}}.00" />
        <meta property="product:price:currency" content="KES" />
        <meta property="product:retailer_item_id" content="{{$Gown->id}}" />

         <!-- Twitter Meta Tags -->
        <meta name="twitter:title" content="Buy {{$Gown->title}} in Nairobi | Graduation Gowns for Hire | Gownsea LTD" />
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@gownsea">
        <meta name="twitter:url" content="{{url('/')}}/our-products/{{$Gown->slung}}">
        <meta name="twitter:description" content="We sell and rent high-quality {{$Gown->title}}, including preschool, certificate, diploma, degree, master's, and PhD gowns. Custom designs available, Order Now" />
        <meta name="twitter:image" content="{{url('/')}}/uploads/products/{{$Gown->image}}">
        <meta name="twitter:creator" content="@gownsea_ke">
        <meta name="twitter:image:alt" content="{{$Gown->title}}">

        <!-- Schema Markup (Google Rich Results) -->
        <script type="application/ld+json">
            {
            "@context": "https://schema.org",
            "@type": "Product",
            "name": "{{$Gown->title}}",
            "brand": {
                "@type": "Brand",
                "name": "Gownsea LTD"
            },
            "description": "We sell and rent high-quality {{$Gown->title}}, including preschool, certificate, diploma, degree, master's, and PhD gowns. Custom designs available, Order Now",
            "image": "{{url('/')}}/uploads/products/{{$Gown->image}}",
            "url": "{{url('/')}}/our-products/{{$Gown->slung}}",
            "sku": "GRAD-HOOD-KE",
            "offers": {
                "@type": "Offer",
                "priceCurrency": "KES",
                "price": "2500",
                "itemCondition": "https://schema.org/NewCondition",
                "availability": "https://schema.org/InStock",
                "seller": {
                "@type": "LocalBusiness",
                "name": "Gownsea LTD"
                }
            }
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
