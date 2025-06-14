@extends('front.seo.master')

@section('content')
<main id="main">

    <!-- Fullwidth Slider -->
     <div class="home-section fullwidth-slider-fades bg-dark light-content" id="home">

         <!-- Slide Item -->
         <section class="home-section bg-scroll bg-dark-alpha-60 light-content home-banner" style="background-image: url('{{asset('uploads/hero.webp')}}')">
             <div class="container min-height-100vh d-flexs align-items-center correct">

                    <!-- Home Section Text -->
                    <div class="herotext text-center">

                        <h2 class="hs-title-11  mb-xs-10 owl-animate-fadeInUp text-center">
                            University-standard Graduation Attire for Hire/Sale
                        </h2>

                        <h2 class="hs-title-12 mb-sm-30">
                            <span>Graduation Attire.</span>
                        </h2>

                        <div class="local-scroll owl-animate-fadeInUp owl-delay-700 wch-unset">
                            <a href="{{url('/')}}/shop-attire/graduation-attire" class="btn btn-mod btn-large btn-round ms-1 me-1 mt-2 align-middle btn-border-w" data-btn-animate="y" style="font-weight:700 !important;">
                                Purchase Now
                            </a>
                            <a href="{{route('gown-for-hire')}}" class="btn btn-mod btn-w btn-large btn-round ms-1 me-1 mt-2 align-middle" data-btn-animate="y" style="font-weight:700 !important;">
                                Hire Now
                            </a>
                        </div>

                    </div>
                    <!-- End Home Section Text -->

             </div>
         </section>
         <!-- End Slide Item -->
         <section class="home-section bg-scroll bg-dark-alpha-60 light-content home-banner" style="background-image: url('{{asset('uploads/Amazon-seller-lawyer-renaldo-matamoro-86JiKaHF4I8-unsplash.jpg')}}')">
            <div class="container min-height-100vh d-flexs align-items-center correct">

                   <!-- Home Section Text -->
                   <div class="herotext text-center">

                       <h2 class="hs-title-11  mb-xs-10 owl-animate-fadeInUp text-center">
                           Courtroom-standard Attire
                       </h2>

                       <h2 class="hs-title-12 mb-sm-30">
                           <span>Legal Wear</span>
                       </h2>

                       <div class="local-scroll owl-animate-fadeInUp owl-delay-700 wch-unset">
                           <a href="{{route('legal-attire')}}" class="btn btn-mod btn-border-w btn-large btn-round ms-1 me-1 mt-2 align-middle btn-border-b" data-btn-animate="y">Purchase Now</a>
                       </div>

                   </div>
                   <!-- End Home Section Text -->

            </div>
         </section>

         <!-- End Slide Item -->
         <section class="home-section bg-scroll bg-dark-alpha-60 light-content home-banner" style="background-image: url('{{asset('uploads/clergy-wear.webp')}}')">
            <div class="container min-height-100vh d-flexs align-items-center correct">

                   <!-- Home Section Text -->
                   <div class="herotext text-center">

                       <h2 class="hs-title-11  mb-xs-10 owl-animate-fadeInUp text-center">
                        Be the heart of your community
                       </h2>

                       <h2 class="hs-title-12 mb-sm-30">
                           <span>Church Wear</span>
                       </h2>

                       <div class="local-scroll owl-animate-fadeInUp owl-delay-700 wch-unset">
                           <a href="{{route('church-wear')}}" class="btn btn-mod btn-border-w btn-large btn-round ms-1 me-1 mt-2 align-middle btn-border-m" data-btn-animate="y">Purchase Now</a>
                       </div>

                   </div>
                   <!-- End Home Section Text -->

            </div>
         </section>


     </div>
     <!-- End Fullwidth Slider -->



     <!-- About Section -->
     <section class="page-sections" id="about">



         <div class="container position-relative">

            <div class="row mb-70 mb-sm-50">

                <div class="col-md-6 mb-sm-30 wow fadeInUp" data-wow-duration="3s">
                    <div class="portfolio-1-image round">
                        <a href="#" ><img style="max-height:700px; object-fit:cover" src="{{asset('uploads/celebrate-in-stye.webp')}}" loading="lazy" width="700" height="848" alt="Image Description"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 middle-center-section wow fadeInUp" data-wow-duration="3s">

                    <h2 class="section-title mb-40 mb-xs-30">Celebrate in  <span class="mark-decoration-graduation">style</span> </h2>

                    <p class="section-descr mb-0">
                        {{-- Your Graduation Gown, Barrister's Wig, Clergy Shirt, and more are crafted to traditional standards for the perfect fit. At Gownsea, we stand out by combining sustainability with style, using recycled plastic fibers and British-made certification frames to reduce environmental impact while perfecting your look for special occasions. --}}
                        Gownsea Ltd is your trusted graduation gown specialist. 
                        We provide high-quality academic regalia for hire and sale — tailored to your brand, delivered on time, and ready for the ceremony. 
                        From bulk orders to custom designs, we ensure a seamless and dignified graduation experience.
                        <br>
                        Partner with us to give your graduates the ceremony they deserve
                    </p>

                    <br>

                    <div class="local-scroll ">

                        <a href="{{route('gown-for-hire')}}" class="btn btn-mod btn-color btn-medium btn-round btn-hover-anim">
                           <span data-btn-animate="y">Shop Graduation Attire</span>
                       </a>
                    </div>

                </div>
            </div>



             {{--  --}}
              <!-- Grid -->
            <div class="row flexrow">


                <!-- Feature Item -->
                <div class="col-md-4 col-lg-4 col-sm-12 h mb-sm-30 bg-gray wow fadeInUp" data-wow-duration="1s">
                    <div class="alt-features-item  mt-0">
                        <div class="alt-features-icon why-icon">
                            <svg class="why-icon" width="34" height="34" viewBox="0 0 24 24" fill="white" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                <path d="M21.62 20.196c1.055-.922 1.737-2.262 1.737-3.772 0-1.321-.521-2.515-1.357-3.412v-6.946l-11.001-6.066-11 6v12.131l11 5.869 5.468-2.917c.578.231 1.205.367 1.865.367.903 0 1.739-.258 2.471-.676l2.394 3.226.803-.596-2.38-3.208zm-11.121 2.404l-9.5-5.069v-10.447l9.5 4.946v10.57zm1-.001v-10.567l5.067-2.608.029.015.021-.04 4.384-2.256v5.039c-.774-.488-1.686-.782-2.668-.782-2.773 0-5.024 2.252-5.024 5.024 0 1.686.838 3.171 2.113 4.083l-3.922 2.092zm6.833-2.149c-2.219 0-4.024-1.808-4.024-4.026s1.805-4.025 4.024-4.025c2.22 0 4.025 1.807 4.025 4.025 0 2.218-1.805 4.026-4.025 4.026zm-.364-3.333l-1.306-1.147-.66.751 2.029 1.782 2.966-3.12-.725-.689-2.304 2.423zm-16.371-10.85l4.349-2.372 9.534 4.964-4.479 2.305-9.404-4.897zm9.4-5.127l9.404 5.186-3.832 1.972-9.565-4.98 3.993-2.178z"/>
                            </svg>
                        </div>
                        <h4 class="alt-features-title">Wide Selection</h4>
                        <div class="alt-features-descr">
                            Over 5,000 clean, high-quality gowns in various sizes and academic colors—perfect for universities, colleges, TVETs, churches, and individuals.
                        </div>
                    </div>
                </div>
                <!-- End Feature Item -->

                <!-- Feature Item -->
                <div class="col-md-4 col-lg-4  h mb-sm-30 bg-gray wow fadeInUp" data-wow-duration="2s">
                    <div class="alt-features-item  mt-0">
                        <div class="alt-features-icon ">
                            <svg class="why-icon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                <path d="M12 0c-3.371 2.866-5.484 3-9 3v11.535c0 4.603 3.203 5.804 9 9.465 5.797-3.661 9-4.862 9-9.465v-11.535c-3.516 0-5.629-.134-9-3zm0 1.292c2.942 2.31 5.12 2.655 8 2.701v10.542c0 3.891-2.638 4.943-8 8.284-5.375-3.35-8-4.414-8-8.284v-10.542c2.88-.046 5.058-.391 8-2.701zm5 7.739l-5.992 6.623-3.672-3.931.701-.683 3.008 3.184 5.227-5.878.728.685z"/>
                            </svg>
                        </div>
                        <h4 class="alt-features-title">Affordable & Reliable</h4>
                        <div class="alt-features-descr">
                            Competitive hire rates with timely delivery, flexible packages, and consistent service you can count on.
                        </div>
                    </div>
                </div>
                <!-- End Feature Item -->

                <!-- Feature Item -->
                <div class="col-md-4 col-lg-4  h bg-gray wow fadeInUp" data-wow-duration="3s">
                    <div class="alt-features-item mt-0">
                        <div class="alt-features-icon">
                            <svg class="why-icon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                <path d="M6.514 24.015h-3v-3.39c-2.08-.638-3.5-2.652-3.5-5.04 0-1.19.202-1.693 1.774-5.603.521-1.294 1.195-2.97 2.068-5.179.204-.518.67-.806 1.17-.802.482.004.941.284 1.146.802.718 1.817 1.302 3.274 1.777 4.454.26-.596.567-1.288.928-2.103.694-1.565 1.591-3.592 2.754-6.265.258-.592.881-.906 1.397-.888.572.015 1.126.329 1.369.888 1.163 2.673 2.06 4.7 2.754 6.265 2.094 4.727 2.363 5.334 2.363 6.764 0 2.927-2.078 5.422-5 6.082v4.015h-3v-4.015c-.943-.213-1.797-.617-2.523-1.165-.612.845-1.466 1.48-2.477 1.79v3.39zm14.493-6c1.652 0 2.993 1.341 2.993 2.993s-1.341 2.993-2.993 2.993-2.993-1.341-2.993-2.993 1.341-2.993 2.993-2.993zm.007.993c1.104 0 2 .896 2 2s-.896 2-2 2-2-.896-2-2 .896-2 2-2zm-7.5 3.993v-3.839c4.906-.786 5-4.751 5-5.244 0-1.218-.216-1.705-2.277-6.359-2.134-4.82-2.721-6.198-2.755-6.261-.079-.145-.193-.292-.455-.297-.238 0-.37.092-.481.297-.034.063-.621 1.441-2.755 6.261-2.061 4.654-2.277 5.141-2.277 6.359 0 .493.094 4.458 5 5.244v3.839h1zm-6.123-12.448l-.08-.198c-1.589-3.957-2.04-5.116-2.067-5.171-.072-.151-.15-.226-.226-.228-.109 0-.188.13-.235.228-.028.05-.316.818-2.066 5.171-1.542 3.833-1.703 4.233-1.703 5.23 0 1.988 1.076 3.728 3.5 4.25v3.166h1v-3.166c1.266-.273 2.159-.876 2.725-1.666-1.078-1.12-1.725-2.619-1.725-4.251 0-.979.126-1.572.877-3.365z"/>
                            </svg>
                        </div>
                        <h4 class="alt-features-title">Professional Support</h4>
                        <div class="alt-features-descr">
                            Friendly, responsive team offering personalized assistance to ensure a smooth and stress-free graduation experience.
                        </div>
                    </div>
                </div>
                <!-- End Feature Item -->

            </div>
            <!-- End Grid -->
             {{--  --}}

         </div>

     </section>
     <!-- End About Section -->

      <!-- About Section -->
      <section class="page-sections" id="about">



         <div class="container position-relative">

             <div class="row mb-70 mb-sm-50">
                <div class="col-md-6 mb-sm-30 d-none-desktop">
                    <div class="portfolio-1-image round">
                        <a href="#"><img style="max-height:700px; object-fit:cover" src="{{asset('uploads/ce3e6d015e368db7efd118676dd2ff22.jpg')}}" loading="lazy" width="700" height="848" alt="Image Description"></a>
                    </div>
                </div>
                 <div class="col-md-6 col-lg-6 middle-center-section wow fadeInUp" data-wow-duration="3s" >

                     <h2 class="section-title mb-40 mb-xs-30">Be the <span class="mark-decoration-church">heart</span> of your community.</h2>

                     <p class="section-descr mb-0">
                         Your church serves as the heart of your community, offering peace, comfort, and hope to all who enter. Ensure it reflects the warm and welcoming sanctuary it is meant to be with our beautifully crafted Church and Choral Wear, designed to inspire reverence and unity.
                     </p>

                     <br>

                     <div class="local-scroll ">

                         <a href="{{route('church-wear')}}" class="btn btn-mod btn-color btn-medium btn-round btn-hover-anim btn-border-m">
                            <span data-btn-animate="y">Shop Church Wear</span>
                        </a>
                     </div>

                 </div>
                 <div class="col-md-6 mb-sm-30 d-none-mobile wow fadeInUp" data-wow-duration="3s">
                     <div class="portfolio-1-image round">
                         <a href="#"><img style="max-height:700px; object-fit:cover" src="{{asset('uploads/clergywear.webp')}}" loading="lazy" width="700" height="848" alt="Image Description"></a>
                     </div>
                 </div>
             </div>



         </div>


         <div class="container position-relative">


             {{--  --}}
             <div class="row mb-70 mb-sm-50">
                <div class="col-md-6 col-lg-6 col-sm-12 mb-sm-30">
                    <div class="portfolio-1-image round wow fadeInUp" data-wow-duration="3s">
                        <a class="abt-img" href="#"><img src="{{asset('uploads/2143ac7d-e37d-48f5-b488-e6c735d75c29_a54b3def-4fa2-4842-a0bf-3a23080731e3.jpg')}}" loading="lazy" alt="Gownsea LTD Legal Wear"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                   <div class="middle-center wow fadeInUp" data-wow-duration="3s">

                       <h2 class="section-title mb-40 mb-xs-30">Making a <span class="mark-decoration-legal">difference</span> in the world while looking great doing it!</h2>

                       <p class="section-descr mb-0">
                           You’re taking on cases, advocating for your clients, and striving to make a meaningful difference in the pursuit of justice.

                           Elevate your courtroom presence with our meticulously crafted legal gowns and accessories, designed to ensure you look confident and professional while championing fairness and integrity.
                       </p>

                       <br>

                       <div class="local-scroll ">

                           <a href="{{route('legal-attire')}}" class="btn btn-mod btn-color btn-medium btn-round btn-hover-anim btn-border-b">
                               <span data-btn-animate="y">Shop Legal Wear</span>
                           </a>
                       </div>
                   </div>

                </div>
            </div>



         </div>

     </section>
     <!-- End About Section -->




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

      <!-- Portfolio Section -->
      <section class="page-section" id="portfolio">
         <div class="container ">
            <!-- Add CSS for overlay -->

              <!-- Portfolio Grid -->
            <div class="row mt-n50 mt-sm-n40">
                <div class="col-md-12">
                    <div class="row wow fadeInUp" data-wow-duration="3s">
                        @foreach ($Random as $gown)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 product-img-home">

                            <div class="portfolio-1-image round product-img">
                                <div class="overlay"></div>
                                <!-- Dark Overlay -->
                                <img src="{{$gown->image}}" loading="lazy" alt="{{$gown->title}}">

                                <div class="bottom-left btn-mobile-foot">
                                    <h2 class="product-title-h2">{{$gown->title}}</h2>

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

     <?php
     $Blog = DB::table('blogs')->orderby('id','DESC')->limit('2')->get();
  ?>
    <!-- Blog Section -->
    <section class="page-section" id="blog">
     <div class="container position-relative">

         <div class="row">

             <div class="col-lg-5 col-xl-4 mb-md-70 mb-sm-50 wow fadeInUp" data-wow-duration="3s">

                 <h2 class="section-title mb-40 mb-xs-30">The Gown Journal</h2>

                 <p class="section-descr mb-50 mb-sm-40">
                     Crafting Confidence, One Gown at a Time
                 </p>

                 <div class="local-scroll">
                     <a href="{{url('/')}}/the-gown-journal" class="btn btn-mod btn-w btn-with-icon btn-circle"><span class="btn-icon color-3"><i class="mi-link-alt"></i></span> <span data-btn-animate="y">Read All Articles <i class="mi-arrow-right"></i></span></a>
                 </div>

             </div>

             <div class="col-lg-7 col-xl-8 wow fadeInUp" data-wow-duration="3s">
                 <div class="row mt-n50">

                     <!-- Blog Post Item -->
                     @foreach ($Blog as $blog)
                         <!-- Blog Post Item -->
                         <div class="post-prev-2 col-md-6 mt-50">

                             <div class="post-prev-2-img">
                                 <a href="{{route('blog-single',$blog->slung)}}"><img style="width:100%; height:500px; object-fit:cover;" src="{{$blog->image_one}}" alt="{{$blog->title}}" /></a>
                             </div>

                             <h3 class="post-prev-2-title"><a href="{{route('blog-single',$blog->slung)}}">{{$blog->title}}</a></h3>

                             {{-- <p class="post-prev-2-text">
                                 {{$blog->meta}}
                             </p> --}}

                             <div class="post-prev-2-tags">
                                 <span class="post-prev-2-tag">{{ \Carbon\Carbon::parse($blog->created_at)->format('F j, Y') }}</span>
                                 <span class="post-prev-2-tag"><i class="mi-circle color-primary-1"></i> {{\App\Models\Category::find($blog->category)->title}}</span>
                             </div>

                         </div>
                         <!-- End Blog Post Item -->
                     @endforeach
                     <!-- End Blog Post Item -->



                 </div>
             </div>

         </div>

     </div>
 </section>
 <!-- End Blog Section -->





 </main>
@endsection
