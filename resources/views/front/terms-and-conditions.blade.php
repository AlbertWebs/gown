@extends('front..seo.master-terms-and-conditions')

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
                        Terms and Conditions
                    </span>
                </h1>

            </div>
        </div>

    </div>

</section>
<!-- End Home Section -->


    <!-- About Section -->
    <section class="page-section" id="about">
        <div class="container">

            <div class="return-policy">
                <h2> Terms and Conditions</h2>
                <p><strong>Effective Date:</strong> March 8, 2025</p>

                <?php $Privacy = DB::table('terms')->get(); ?>
                <div class="hired-gown-policy">


                    @foreach ($Privacy as $privacy)
                        <h4>{{$privacy->title}}</h4>
                        <p>{!!html_entity_decode($privacy->content)!!}</p>

                    @endforeach



                </div>


                <hr>
                <div class="contact-info">
                    <h3>Contact & Returns Address</h3>
                    <p>For all returns and inquiries, please contact:</p>
                    <p><strong>📍 Return Address:</strong> Valji Building, Moktar Daddah St, Nairobi</p>
                    <p><strong>📞 Phone:</strong> 0728 311537</p>
                    <p><strong>📧 Email:</strong> hello@gownsea.com</p>
                </div>
            </div>

        </div>


    </section>
    <!-- End About Section -->




 </main>
@endsection
