@extends('front.master')

@section('content')
<main id="main">

    <!-- Fullwidth Slider -->
     <div class="home-section fullwidth-slider-fades bg-dark light-content" id="home">

         <!-- Slide Item -->
         <section class="home-section bg-scroll bg-dark-alpha-60 light-content" style="background-image: url('{{asset('uploads/pexels-olia-danilevich-8093039.jpg')}}')">
             <div class="container  d-flex align-items-center pt-100 pb-100 pt-sm-120 pb-sm-120 " style="min-height: 80vh">

                 <!-- Home Section Content -->
                 <div class="home-content">
                     <div class="row">

                         <!-- Home Section Text -->
                         <div class="col-md-6 mb-sm-0" style="margin: 0 auto;">



                             <h1 class="hs-title-12 mb-sm-30">
                                 <span class="owl-animate-chars" data-splitting="chars">Graduation Gown For Hire</span>
                             </h1>

                             <h2 class="hs-title-11  mb-xs-10 owl-animate-fadeInUp mb-sm-30">
                                Quality Gown Hire for your Graduation
                            </h2>




                         </div>
                         <!-- End Home Section Text -->
                         <div class="local-scroll pt-20">
                            <a href="{{route('bulk-inquiry')}}" class="btn btn-mod btn-color btn-large circle btn-hover-anim"><span>Buy Instead?</span></a>
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



        <div class="containers" style="padding-left:10px; padding-right:10px;">

            <div class="row">
               @foreach ($Gowns as $gown)
                   <div class="col-md-3">
                       <div class="portfolio-1-image round  prod-img">
                           <img src="{{$gown->image}}" loading="lazy"  alt="{{$gown->title}}">
                           <div class="bottom-left">
                                <h2>{{$gown->title}}</h2>

                                <a href="{{route('our-products',$gown->slung)}}" class="btn btn-mod btn-color btn-large circle btn-hover-anim" tabindex="0">
                                    <span data-btn-animate="y"><span class="btn-animate-y"><span class="btn-animate-y-1">Shop Now</span><span class="btn-animate-y-2" aria-hidden="true">Shop Graduation Attire</span></span></span>
                                </a>

                            </div>
                       </div>
                   </div>
               @endforeach
            </div>
        </div>
    </section>
    <!-- End About Section -->






     <!-- Call to Action Section -->
     <section class="page-section bg-scrolls light-content" style="background-image: url('{{asset('uploads/graduation-attire.jpg')}}'); background-size:contain cover; min-height:800px">

        <!-- Desktop Overlay -->
        <div class="bg-overlay bg-gradient-primary-alpha-111 d-none d-md-block"></div>
        <!-- End Desktop Overlay -->

        <!-- Mobile Overlay -->
        <div class="bg-overlay bg-gradient-primary-alpha-111 opacity-09 d-md-none"></div>
        <!-- End Mobile Overlay -->

        <div class="container position-relative perfection">

            <div class="row">
                <div class="col-md-12 col-lg-6 col-xl-6" style="margin: 0 auto">
                    <br><br><br>
                    <h3 class="section-title-perfection">Are you an institution?</h3>

                    <p class="descr">
                        Gownsea LTD invites institutions to bulk hire or purchase high-quality graduation gowns at discounted rates. Ensure your graduates look their best with our premium, comfortable, and customizable gowns. Order in bulk today for cost savings and timely delivery!
                    </p>

                    <a href="corporate-contact.html" class="btn btn-mod btn-color btn-large btn-round btn-hover-anim">
                        <span>Bulk Request</span>
                    </a>

                </div>
            </div>



        </div>
    </section>
    <!-- End Call to Action Section -->

    <!-- Logotypes Section -->
     <section class="small-section  pb-20 bg-gradient-darks">
        <h3 class="section-title-small mb-40 text-center" style="font-weight:500">Our Clients</h3>
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
