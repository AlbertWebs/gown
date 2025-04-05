@extends('front.seo.master-blog')

@section('content')
    <main id="main">

          <!-- Home Section -->
  <section class="page-section bg-gradient-gray-light-1 bg-scroll overflow-hidden">

    <!-- Background Shape -->
    <div class="bg-shape-11 wow fadeIn">
        <img class="opacity-05s" src="{{$Blog->image_one}}" alt="" />
    </div>
    <!-- End Background Shape -->

    <div class="container position-relative pt-10 pt-sm-40 text-center">

        <div class="row">
            <div class="col-lg-10 offset-lg-1">

                <h1 class="hs-title-9 mb-10">
                    <span class="wow charsAnimIn" data-splitting="chars" style="color:#fff;">
                        {{$Blog->title}}
                    </span>
                </h1>

            </div>
        </div>

    </div>

</section>
<!-- End Home Section -->

   <!-- Section -->
   <section class="page-section">
    <div class="container relative">

        <div class="row">

            <!-- Content -->
            <div class="col-lg-10 mb-md-80" style="margin: 0 auto">

                <!-- Blog Posts Grid -->
                <div class="row mt-n50 mb-60 mb-sm-40">

                    @foreach ($Blog as $blog)
                        <!-- Blog Post Item -->
                        <div class="post-prev-2 col-md-12 mt-50">

                            <div class="post-prev-2-img">
                                <a href="{{route('blog-single',$Blog->slung)}}"><img src="{{$Blog->image_one}}" alt="{{$Blog->title}}" /></a>
                            </div>


                            <p class="post-prev-2-text">
                                {{$Blog->meta}}
                            </p>
                            <p>
                                {!!html_entity_decode($Blog->content)!!}
                            </p>


                        </div>
                        <!-- End Blog Post Item -->
                    @endforeach

                </div>
                <!-- End Blog Posts Grid -->



            </div>
            <!-- End Content -->

        </div>

    </div>
</section>
<!-- End Section -->



    </main>
@endsection
