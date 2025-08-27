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
