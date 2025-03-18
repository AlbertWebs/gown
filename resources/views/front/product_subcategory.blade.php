@extends('front.seo.master-products-subcategory')

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
                           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 product-img-home">
                               <div class="portfolio-1-image round product-img">
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


 </main>
@endsection
