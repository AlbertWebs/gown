@extends('front.seo.master-products')

@section('content')
  <main id="main">
    <!-- About Section -->
    <section class="page-section pt-0 pb-0" id="about">
        <div class="container position-relative">

            <div class="row page-section relative z-index-1 wow fadeInUp" data-wow-offset="0">
                <div class="col-lg-7 col-md-12 col-sm-12">

                    <div >
                        <p class="section-descr">
                            {!!html_entity_decode($Category->content)!!}
                        </p>
                    </div>


                </div>
            </div>

            <!-- Image -->
            <div class="row section-image-1-wrap d-none-mobile" data-rellax-y="" data-rellax-speed="1" data-rellax-percentage="0.17">
                <div class="col-5 offset-7 col-sm-4 offset-sm-8">
                    <img src="{{$Category->image}}" class="section-image-1" alt="Image Description">
                </div>
            </div>
            <!-- End Image -->

        </div>
    </section>
    <!-- End About Section -->


      <!-- Portfolio Section -->
      <section class="page-section" id="portfolio">
        <div class="container ">

             <!-- Portfolio Grid -->
           <div class="row mt-n50 mt-sm-n40">
               <div class="col-md-12">
                   <div class="row">
                       @foreach ($Gowns as $gown)
                           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 product-img-home" style="margin-bottom: 20px;">
                               <div class="portfolio-1-image round product-img">
                                <div class="overlay"></div>
                                   <img style="" src="{{$gown->image}}" loading="lazy"  alt="Image Description">
                                   <div class="bottom-left btn-mobile-foot">
                                       <h2>{{$gown->title}}</h2>

                                       <a href="{{route('our-products',$gown->slung)}}" class="btn btn-mod btn-color btn-large circle btn-hover-anim btn-mobile" tabindex="0">
                                           <span data-btn-animate="y"><span class="btn-animate-y"><span class="btn-animate-y-1">Shop Now</span><span class="btn-animate-y-2" aria-hidden="true">Shop Graduation Attire</span></span></span>
                                       </a>
                                   </div>
                               </div>
                           </div>
                       @endforeach
                   </div>
               </div>
           </div>
           <!-- End Portfolio Grid -->

        </div>
    </section>
    <!-- End Portfolio Section -->

       <!-- Call to Action Section -->
        <section class="page-section bg-scrolls light-content wow fadeInUp" data-wow-duration="3s" style="background-image: url('{{asset('uploads/graduation-attire.jpg')}}'); background-size:contain cover; min-height:800px">

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

                        <a href="{{route('bulk-inquiry')}}" class="btn btn-mod btn-color btn-large btn-round btn-hover-anim">
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




 </main>
@endsection
