@extends('front.master')

@section('content')
<main id="main">

    <!-- Fullwidth Slider -->
     <div class="home-section fullwidth-slider-fades bg-dark light-content" id="home">

         <!-- Slide Item -->
         <section class="home-section bg-scroll bg-dark-alpha-30 light-content" style="background-image: url('{{asset('uploads/barrister-wig.jpg')}}')">
             <div class="container  d-flex align-items-center pt-100 pb-100 pt-sm-120 pb-sm-120 " style="min-height: 80vh">

                 <!-- Home Section Content -->
                 <div class="home-content">
                     <div class="row">

                         <!-- Home Section Text -->
                         <div class="col-md-6 mb-sm-0" style="margin: 0 auto;">



                             <h1 class="hs-title-12 mb-sm-30">
                                 <span class="owl-animate-chars" data-splitting="chars">Legal Attire</span>
                             </h1>

                             <h2 class="hs-title-11  mb-xs-10 owl-animate-fadeInUp mb-sm-30">
                                Shop our collection.
                            </h2>

                             {{-- <div class="local-scroll owl-animate-fadeInUp owl-delay-700 wch-unset mt-20">
                                 <a href="{{route('shop-legal-attire', $Gown->slung)}}" class="btn btn-mod btn-w btn-large btn-round ms-1 me-1 mt-2 align-middle btn-theme" data-btn-animate="y"><i class="fa-shoppping-cart"></i> Shop Graduation</a>
                             </div> --}}


                         </div>
                         <!-- End Home Section Text -->
                         <div class="local-scroll pt-20">
                            <a href="{{route('shop-graduation-attires')}}" class="btn btn-mod btn-w btn-large circle btn-border-b"><span>Shop Now</span></a>
                         </div>


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
         <!-- End Slide Item -->


     </div>
     <!-- End Fullwidth Slider -->





     <!-- About Section -->
     <section class="page-sections" id="about">



         <div class="containers" style="padding-left: 50px; padding-right: 50px">

             <div class="row">
                <?php
                   $count = 0;
                ?>
                @foreach ($Gowns as $gown)
                  @if($count == "0")
                    <div class="col-lg-6 col-md-6 product-img-home">
                        <div class="portfolio-1-image round legal-img">
                            <img style="" src="{{$gown->image}}" loading="lazy"  alt="{{$gown->title}}">
                            <div class="bottom-left">
                            <h2>{{$gown->title}}</h2>

                            <a href="{{route('shop-legal-attire',$gown->slung)}}" class="btn btn-mod btn-color btn-large circle btn-hover-anim btn-border-b" tabindex="0">
                                <span data-btn-animate="y"><span class="btn-animate-y"><span class="btn-animate-y-1">Shop Now</span><span class="btn-animate-y-2" aria-hidden="true">Shop Graduation Attire</span></span></span>
                            </a>
                        </div>
                        </div>
                    </div>
                  @else
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 product-img-home">
                        <div class="portfolio-1-image round legal-img">
                            <img style="" src="{{$gown->image}}" loading="lazy"  alt="{{$gown->title}}">
                            <div class="bottom-left">
                            <h2>{{$gown->title}}</h2>
                            <a href="{{route('shop-legal-attire',$gown->slung)}}" class="btn btn-mod btn-color btn-large circle btn-hover-anim btn-border-b" tabindex="0">
                                <span data-btn-animate="y"><span class="btn-animate-y"><span class="btn-animate-y-1">Shop Now</span><span class="btn-animate-y-2" aria-hidden="true">Shop Graduation Attire</span></span></span>
                            </a>
                        </div>
                        </div>
                    </div>
                  @endif
                  <?php $count++; ?>
                @endforeach
             </div>
         </div>
     </section>
     <!-- End About Section -->


     <!-- Call to Action Section -->
     <section class="page-section bg-scrolls light-content" style="background-image: url('{{asset('uploads/theleaflet_2024-12-02_0hkoihx5_Senior-Advocate.avif')}}'); background-position: top; min-height:700px">

        <!-- Desktop Overlay -->
        <div class="bg-overlay bg-gradient-primary-alpha-111 d-none d-md-block"></div>
        <!-- End Desktop Overlay -->

        <!-- Mobile Overlay -->
        <div class="bg-overlay  opacity-09 d-md-none"></div>
        <!-- End Mobile Overlay -->

        <div class="container position-relative perfection">

            <div class="row">
                <div class="col-md-12 col-lg-6 col-xl-6" style="margin: 0 auto">
                    <br><br><br>

                    <h3 class="section-title-perfection">Tailored to perfection.</h3>

                    <p class="descr">
                        Expertly crafted to the highest standards, our wigs are handmade from 100% horsehair. Explore our premium collection of legal wigs.
                    </p>

                    <a href="{{route('shop-legal-attires')}}" class="btn btn-mod btn-color btn-large btn-round btn-hover-anim btn-border-b">
                        <span>Shop Legal Attire</span>
                    </a>

                </div>
            </div>



        </div>
    </section>
    <!-- End Call to Action Section -->


      <!-- About Section -->
      <section class="page-section" id="about">
        <div class="container">
            <!-- Grid -->
            <div class="row flexrow">


                <!-- Feature Item -->
                <div class="col-md-4 col-lg-4 col-sm-12 h mb-sm-30 bg-gray">
                    <div class="alt-features-item  mt-0">
                        <div class="alt-features-icon why-icon">
                            <svg class="why-icon" width="34" height="34" viewBox="0 0 24 24" fill="white" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                <path d="M21.62 20.196c1.055-.922 1.737-2.262 1.737-3.772 0-1.321-.521-2.515-1.357-3.412v-6.946l-11.001-6.066-11 6v12.131l11 5.869 5.468-2.917c.578.231 1.205.367 1.865.367.903 0 1.739-.258 2.471-.676l2.394 3.226.803-.596-2.38-3.208zm-11.121 2.404l-9.5-5.069v-10.447l9.5 4.946v10.57zm1-.001v-10.567l5.067-2.608.029.015.021-.04 4.384-2.256v5.039c-.774-.488-1.686-.782-2.668-.782-2.773 0-5.024 2.252-5.024 5.024 0 1.686.838 3.171 2.113 4.083l-3.922 2.092zm6.833-2.149c-2.219 0-4.024-1.808-4.024-4.026s1.805-4.025 4.024-4.025c2.22 0 4.025 1.807 4.025 4.025 0 2.218-1.805 4.026-4.025 4.026zm-.364-3.333l-1.306-1.147-.66.751 2.029 1.782 2.966-3.12-.725-.689-2.304 2.423zm-16.371-10.85l4.349-2.372 9.534 4.964-4.479 2.305-9.404-4.897zm9.4-5.127l9.404 5.186-3.832 1.972-9.565-4.98 3.993-2.178z"/>
                            </svg>
                        </div>
                        <h4 class="alt-features-title">Gownsea represents these moment</h4>
                        <div class="alt-features-descr">
                            Specialists in occasion, performance, and ceremony supplies, Gownsea understands that ceremonial garments are more than just fabric and accessories—they carry deep meaning and significance.
                        </div>
                    </div>
                </div>
                <!-- End Feature Item -->

                <!-- Feature Item -->
                <div class="col-md-4 col-lg-4  h mb-sm-30 bg-gray">
                    <div class="alt-features-item  mt-0">
                        <div class="alt-features-icon ">
                            <svg class="why-icon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                <path d="M12 0c-3.371 2.866-5.484 3-9 3v11.535c0 4.603 3.203 5.804 9 9.465 5.797-3.661 9-4.862 9-9.465v-11.535c-3.516 0-5.629-.134-9-3zm0 1.292c2.942 2.31 5.12 2.655 8 2.701v10.542c0 3.891-2.638 4.943-8 8.284-5.375-3.35-8-4.414-8-8.284v-10.542c2.88-.046 5.058-.391 8-2.701zm5 7.739l-5.992 6.623-3.672-3.931.701-.683 3.008 3.184 5.227-5.878.728.685z"/>
                            </svg>
                        </div>
                        <h4 class="alt-features-title">Free delivery around Nairobi</h4>
                        <div class="alt-features-descr">
                            We are committed to convenience, delivering straight to your doorstep with free delivery services available throughout Nairobi and its surrounding areas.
                        </div>
                    </div>
                </div>
                <!-- End Feature Item -->

                <!-- Feature Item -->
                <div class="col-md-4 col-lg-4  h bg-gray">
                    <div class="alt-features-item mt-0">
                        <div class="alt-features-icon">
                            <svg class="why-icon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                <path d="M6.514 24.015h-3v-3.39c-2.08-.638-3.5-2.652-3.5-5.04 0-1.19.202-1.693 1.774-5.603.521-1.294 1.195-2.97 2.068-5.179.204-.518.67-.806 1.17-.802.482.004.941.284 1.146.802.718 1.817 1.302 3.274 1.777 4.454.26-.596.567-1.288.928-2.103.694-1.565 1.591-3.592 2.754-6.265.258-.592.881-.906 1.397-.888.572.015 1.126.329 1.369.888 1.163 2.673 2.06 4.7 2.754 6.265 2.094 4.727 2.363 5.334 2.363 6.764 0 2.927-2.078 5.422-5 6.082v4.015h-3v-4.015c-.943-.213-1.797-.617-2.523-1.165-.612.845-1.466 1.48-2.477 1.79v3.39zm14.493-6c1.652 0 2.993 1.341 2.993 2.993s-1.341 2.993-2.993 2.993-2.993-1.341-2.993-2.993 1.341-2.993 2.993-2.993zm.007.993c1.104 0 2 .896 2 2s-.896 2-2 2-2-.896-2-2 .896-2 2-2zm-7.5 3.993v-3.839c4.906-.786 5-4.751 5-5.244 0-1.218-.216-1.705-2.277-6.359-2.134-4.82-2.721-6.198-2.755-6.261-.079-.145-.193-.292-.455-.297-.238 0-.37.092-.481.297-.034.063-.621 1.441-2.755 6.261-2.061 4.654-2.277 5.141-2.277 6.359 0 .493.094 4.458 5 5.244v3.839h1zm-6.123-12.448l-.08-.198c-1.589-3.957-2.04-5.116-2.067-5.171-.072-.151-.15-.226-.226-.228-.109 0-.188.13-.235.228-.028.05-.316.818-2.066 5.171-1.542 3.833-1.703 4.233-1.703 5.23 0 1.988 1.076 3.728 3.5 4.25v3.166h1v-3.166c1.266-.273 2.159-.876 2.725-1.666-1.078-1.12-1.725-2.619-1.725-4.251 0-.979.126-1.572.877-3.365z"/>
                            </svg>
                        </div>
                        <h4 class="alt-features-title">We are Sustainable</h4>
                        <div class="alt-features-descr">
                            Gownsea is committed to reducing its environmental impact while ensuring you look impeccable for life’s most significant and memorable occasions.
                        </div>
                    </div>
                </div>
                <!-- End Feature Item -->

            </div>
            <!-- End Grid -->
            <!-- End Grid -->
        </div>

     </section>
     <!-- End About Section -->

       <!-- Divider -->
     <div class="container">
         <hr class="white mt-0 mb-0">
     </div>
     <!-- End Divider -->


            <!-- Logotypes Section -->
     <section class="small-section  pb-20 bg-gradient-darks">
        <h3 class="section-title-small mb-40 text-center" style="font-weight:600">Our Clients</h3>
        <div class="container relative">
            <div class="row wow fadeInUpShort">
                <div class="col-md-12" >

                    <div class="small-item-carousel black owl-carousel mb-0">

                        <!-- Logo Item -->
                        <div class="logo-item bg-grays">
                            <img src="{{asset('theme/images/clients-logos/client-7.png')}}" width="150" height="90" alt="Company Name">
                        </div>
                        <!-- End Logo Item -->

                        <!-- Logo Item -->
                        <div class="logo-item bg-grays">
                            <img src="{{asset('theme/images/clients-logos/client-8.png')}}" width="150" height="90" alt="Company Name">
                        </div>
                        <!-- End Logo Item -->

                        <!-- Logo Item -->
                        <div class="logo-item bg-grays">
                            <img src="{{asset('theme/images/clients-logos/client-9.png')}}" width="150" height="90" alt="Company Name">
                        </div>
                        <!-- End Logo Item -->

                        <!-- Logo Item -->
                        <div class="logo-item bg-grays">
                            <img src="{{asset('theme/images/clients-logos/client-10.png')}}" width="150" height="90" alt="Company Name">
                        </div>
                        <!-- End Logo Item -->

                        <!-- Logo Item -->
                        <div class="logo-item bg-grays">
                            <img src="{{asset('theme/images/clients-logos/client-11.png')}}" width="150" height="90" alt="Company Name">
                        </div>
                        <!-- End Logo Item -->

                        <!-- Logo Item -->
                        <div class="logo-item bg-grays">
                            <img src="{{asset('theme/images/clients-logos/client-13.png')}}" width="150" height="90" alt="Company Name">
                        </div>
                        <!-- End Logo Item -->

                        <!-- Logo Item -->
                        <div class="logo-item bg-grays">
                            <img src="{{asset('theme/images/clients-logos/client-14.jpg')}}" width="150" height="90" alt="Company Name">
                        </div>
                        <!-- End Logo Item -->

                        <!-- Logo Item -->
                        <div class="logo-item bg-grays">
                            <img src="{{asset('theme/images/clients-logos/client-15.png')}}" width="150" height="90" alt="Company Name">
                        </div>
                        <!-- End Logo Item -->

                    </div>

                </div>
             </div>
         </div>
    </section>
    <!-- End Logotypes -->


     <!-- FAQ Section -->
     <section class="page-section">
         <div class="container position-relative">

             <div class="row mb-70 mb-sm-50">
                 <div class="col-md-8 offset-md-2 text-center">

                     <h2 class="section-title mb-40 mb-xs-30">FAQs</h2>

                 </div>
             </div>

         </div>
         <div class="container position-relative">

             <div class="row position-relative">

                 <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">



                     <!-- Accordion -->
                     <dl class="toggle">

                         <dt>
                             <a href="#" >How do I hire a graduation gown?</a>
                         </dt>
                         <dd class="blacks" >
                             Head to our Private Hire request form and we'll respond as soon as we can.
                         </dd>

                         <dt>
                             <a  href="#">How much is it to rent a gown?</a>
                         </dt>
                        <dd class="blacks" >
                             It can vary depending on the quantity and award level but starts from £25.

                             For an accurate quote head to our Private Hire request form and we'll respond as soon as we can.
                         </dd>

                         <dt>
                             <a  href="#">What do you wear under a university graduation gown?</a>
                         </dt>
                         <dd class="blacks" >
                             Typically you should dress smart for a formal occasion.

                             Head to our Journal Article for a full guide!
                         </dd>

                         <dt>
                             <a  href="#">How much are graduation gowns in Kenya</a>
                         </dt>
                         <dd class="blacks" >
                             Prices can vary depending on the level of your award but our gowns start from £25.

                             Head to our Gown Collection for a full list.
                         </dd>



                     </dl>
                     <!-- End Accordion -->

                 </div>

             </div>
         </div>
     </section>
     <!-- End FAQ Section -->

 </main>
@endsection
