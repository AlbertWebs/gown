@extends('front.master')

@section('content')
<main id="main">

    <!-- Fullwidth Slider -->
     <div class="home-section fullwidth-slider-fades bg-dark light-content" id="home">

         <!-- Slide Item -->
         <section class="home-section bg-scroll bg-dark-alpha-60 light-content" style="background-image: url('{{asset('uploads/bigstock-Priest-Wearing-Cassock-With-Cl-427132097.webp')}}')">
             <div class="container  d-flex align-items-center pt-100 pb-100 pt-sm-120 pb-sm-120 " style="min-height: 80vh">

                 <!-- Home Section Content -->
                 <div class="home-content">
                     <div class="row">

                         <!-- Home Section Text -->
                         <div class="col-md-6 mb-sm-0" style="margin: 0 auto;">



                             <h1 class="hs-title-12 mb-sm-30">
                                 <span class="owl-animate-chars" data-splitting="chars">Church Wear</span>
                             </h1>

                             <h2 class="hs-title-11  mb-xs-10 owl-animate-fadeInUp mb-sm-30">
                                Quality Church and Choral Attire.
                            </h2>




                         </div>
                         <!-- End Home Section Text -->
                         <div class="local-scroll pt-20">
                            <a href="{{route('shop-church-attires')}}" class="btn btn-mod btn-w btn-large circle btn-border-m"><span>Shop Now Church Wear</span></a>
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
                @foreach ($Gown as $gown)
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 product-img-home">
                    <div class="portfolio-1-image round prod-img">
                        <img style="" src="{{$gown->image}}" loading="lazy"  alt="Image Description">
                        <div class="bottom-left">
                           <h2>{{$gown->title}}</h2>

                           <a href="{{route('shop-church-attire',$gown->slung)}}" class="btn btn-mod btn-color btn-large circle btn-hover-anim btn-border-m" tabindex="0">
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
     <section class="page-section bg-scrolls light-content" style="background-image: url('{{asset('uploads/chox2.webp')}}'); background-size:contain cover; min-height:800px">

        <!-- Desktop Overlay -->
        <div class="bg-overlay bg-gradient-primary-alpha-111 d-none d-md-block"></div>
        <!-- End Desktop Overlay -->

        <!-- Mobile Overlay -->
        <div class="bg-overlay bg-primary-1 opacity-09 d-md-none"></div>
        <!-- End Mobile Overlay -->

        <div class="container position-relative perfection">

            <div class="row">
                <div class="col-md-12 col-lg-6 col-xl-6" style="margin: 0 auto">
                    <br><br><br>
                    <h3 class="section-title-perfection">Bespoke Choir Wear</h3>

                    <p class="descr">
                        Every community is different. Find your own voice and personalise your church and choir wear to suit any congregation.
                    </p>

                    <a href="corporate-contact.html" class="btn btn-mod btn-color btn-large btn-round btn-hover-anim btn-border-m">
                        <span>Shop Bespoke</span>
                    </a>

                </div>
            </div>



        </div>
    </section>
    <!-- End Call to Action Section -->
     <!-- Portfolio Section -->
     <section class="page-section" id="portfolio">
        <div class="container">
           <h2 class="section-title">Popular Products</h2>
        </div>
        <div class="container position-relative">




            <!-- Portfolio Grid -->
            <div class="row mt-n50 mt-sm-n40">

                @foreach ($Gown as $gown)
                <!-- Portfolio Item -->
                <div class="col-md-6 col-lg-3 mt-50 mt-sm-40">
                    <a href="#" class="portfolio-5-link">

                        <div class="portfolio-4-image prod-img">
                            <div class="portfolio-5-image-bg wow scalexIn"></div>
                            <div class="wow fadeIn product-img" data-wow-delay="1s">
                                <img src="{{$gown->image}}" alt="Academic Hood" />
                            </div>
                        </div>

                        <h3 class="card__title h5">
                            <a class="full-unstyled-link" href="{{route('our-products',$gown->slung)}}">{{$gown->title}}</a>
                        </h3>
                        {{--  --}}
                        <div class="price ">
                            <dl>
                                <div class="price__regular">
                                    <dt class="visually-hidden">
                                        <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                    </dt>
                                    <dd>
                                        <span class="price-item price-item--regular">
                                        <span class="money">kes {{$gown->price}}</span>
                                        </span>
                                    </dd>
                                </div>
                            </dl>
                        </div>
                        {{--  --}}

                    </a>
                </div>
                <!-- End Portfolio Item -->
                 @endforeach

            </div>
            <!-- End Portfolio Grid -->

        </div>
    </section>
    <!-- End Portfolio Section -->

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
