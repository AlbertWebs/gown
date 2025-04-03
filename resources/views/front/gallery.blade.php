@extends('front.seo.master')

@section('content')
<main id="main">

    <!-- Home Section -->
    <section class="page-section bg-dark-alpha-50 light-content" style="background-image: url(images/demo-elegant/section-bg-1.jpg)" id="home">
        <div class="container position-relative pt-20 pt-sm-20 text-center">

            <h1 class="hs-title-3 mb-10 wow fadeInUpShort" data-wow-duration="0.6s">{{$Gown->title}}</h1>

            <div class="row wow fadeIn" data-wow-delay="0.2s">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <p class="section-title-tiny mb-0 opacity-075">{{$Gown->meta}}</p>
                </div>
            </div>

       </div>
    </section>
    <!-- End Home Section -->


    <!-- Portfolio Section -->
    <section class="page-section pb-0" id="portfolio">

        <div class="container">
            <div class="position-relative">

                <!-- Works Grid -->
                <ul class="works-grid work-grid-4 work-grid-gut-sm hide-titles" id="work-grid">

                    @foreach ($Gallery as $gallery)
                    <!-- Work Item (Lightbox) -->
                    <li class="work-item mix development">
                        <a href="{{$gallery->image}}" class="work-lightbox-link mfp-image">
                            <div class="work-img">
                                <div class="work-img-bg wow-p scalexIn" data-wow-offset="0"></div>
                                <img src="{{$gallery->image}}" alt="Work Description" class="wow-p fadeIn" data-wow-delay="1s" data-wow-offset="0">
                            </div>

                        </a>
                    </li>
                    <!-- End Work Item -->
                    @endforeach




                </ul>
                <!-- End Works Grid -->

            </div>
        </div>

    </section>
    <!-- End Portfolio Section -->



</main>
@endsection
