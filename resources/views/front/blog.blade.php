@extends('front.seo.master-blog')

@section('content')
    <main id="main">

          <!-- Home Section -->
  <section class="page-section bg-gradient-gray-light-1 bg-scroll overflow-hidden">

    <!-- Background Shape -->
    <div class="bg-shape-11 wow fadeIn">
        <img class="opacity-05s" src="{{asset('uploads/banner.jpg')}}" alt="" />
    </div>
    <!-- End Background Shape -->

    <div class="container position-relative pt-10 pt-sm-40 text-center">

        <div class="row">
            <div class="col-lg-10 offset-lg-1">

                <h1 class="hs-title-9 mb-10">
                    <span class="wow charsAnimIn" data-splitting="chars" style="color:#fff;">
                        News & Updates
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
            <div class="col-lg-8 mb-md-80">

                <!-- Blog Posts Grid -->
                <div class="row mt-n50 mb-60 mb-sm-40">

                    @foreach ($Blog as $blog)
                        <!-- Blog Post Item -->
                        <div class="post-prev-2 col-md-6 mt-50">

                            <div class="post-prev-2-img">
                                <a href="{{route('blog-single',$blog->slung)}}"><img style="width:100%; height:500px; object-fit:cover;" src="{{$blog->image_one}}" alt="{{$blog->title}}" /></a>
                            </div>

                            <h3 class="post-prev-2-title"><a href="{{route('blog-single',$blog->slung)}}">{{$blog->title}}</a></h3>

                            <p class="post-prev-2-text">
                                {{$blog->meta}}
                            </p>

                            <div class="post-prev-2-tags">
                                <span class="post-prev-2-tag">{{ \Carbon\Carbon::parse($blog->created_at)->format('F j, Y') }}</span>
                                <span class="post-prev-2-tag"><i class="mi-circle color-primary-1"></i> {{\App\Models\Category::find($blog->category)->title}}</span>
                            </div>

                        </div>
                        <!-- End Blog Post Item -->
                    @endforeach

                </div>
                <!-- End Blog Posts Grid -->

                <!-- Pagination -->
                {{-- <div class="pagination">
                    <a href="#"><i class="mi-chevron-left"></i><span class="visually-hidden">Previous page</span></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <span class="no-active">...</span>
                    <a href="#">9</a>
                    <a href="#"><i class="mi-chevron-right"></i><span class="visually-hidden">Next page</span></a>
                </div> --}}
                <!-- End Pagination -->

            </div>
            <!-- End Content -->

            <!-- Sidebar -->
            <div class="col-lg-4 col-xl-3 offset-xl-1">

                <!-- Search Widget -->
                <div class="widget">
                    <form class="form">
                        <div class="search-wrap">
                            <button class="search-button animate" type="submit" title="Start Search">
                                <i class="mi-search size-18"></i> <span class="visually-hidden">Start search</span>
                            </button>
                            <input type="text" class="form-control input-lg search-field round" placeholder="Search...">
                        </div>
                    </form>
                </div>
                <!-- End Search Widget -->

                <!-- Widget -->
                <div class="widget">

                    <h3 class="widget-title">Categories</h3>

                    <div class="widget-body">
                        <ul class="clearlist widget-menu">
                            <?php
                               $Categorgy = DB::table('categories')->get();
                            ?>
                            @foreach ($Categorgy as $category)
                            <li>
                                <a href="#" title="">{{$category->title}}</a>
                                <small>
                                    - {{count(DB::table('blogs')->where('category',$category->id)->get())}}
                                </small>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
                <!-- End Widget -->

                <!-- Widget -->
                <div class="widget">

                    <h3 class="widget-title">Tags</h3>

                    <div class="widget-body">
                        <div class="tags">
                            <a href="#">Choir</a>
                            <a href="#">Choralia</a>
                            <a href="#">Clirgy</a>
                            <a href="#">Branding</a>
                            <a href="#">Graduation</a>
                            <a href="#">Hire</a>
                            <a href="#">Buy</a>

                        </div>
                    </div>

                </div>
                <!-- End Widget -->

                <!-- Widget -->
                <div class="widget">

                    <h3 class="widget-title">Latest posts</h3>

                    <div class="widget-body">
                        <ul class="clearlist widget-posts">
                            <?php
                               $Latest = DB::table('blogs')->orderby('id','DESC')->limit(5)->get();
                            ?>
                            @foreach ($Latest as $latest)
                            <li class="clearfix">
                                <a href="#"><img src="{{$latest->image_one}}" alt="" width="100" class="widget-posts-img" /></a>
                                <div class="widget-posts-descr">
                                    <a href="#" title="">{{$latest->title}}</a>
                                    Posted by Admin
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
                <!-- End Widget -->



                <!-- Widget -->
                <div class="widget mb-0">

                    <h3 class="widget-title">Newsletter</h3>

                    <div class="widget-body">
                        <div class="widget-text clearfix">

                            <form class="form" id="mailchimp">

                                <div class="mb-20">Stay informed with our newsletter.</div>

                                <div class="mb-20">
                                    <input placeholder="Enter your email" class="newsletter-field form-control input-md round mb-10" type="email" pattern=".{5,100}" required aria-required="true">
                                    <button type="submit" class="btn btn-mod btn-color btn-medium btn-round btn-hover-anim form-control"><span>Subscribe</span></button>
                                </div>

                                <div>
                                    <i class="icon-info size-16" aria-hidden="true"></i>
                                    By subscribing you agree to the <a href="#">Terms &amp; Conditions</a> and <a href="#">Privacy Policy</a>.
                                </div>

                                <div id="subscribe-result" role="region" aria-live="polite" aria-atomic="true"></div>

                            </form>

                        </div>
                    </div>

                </div>
                <!-- End Widget -->

            </div>
            <!-- End Sidebar -->

        </div>

    </div>
</section>
<!-- End Section -->



    </main>
@endsection
