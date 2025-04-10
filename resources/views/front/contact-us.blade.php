@extends('front.seo.master-contact')

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
                        Contact Us
                    </span>
                </h1>
            </div>
        </div>

    </div>

</section>
<!-- End Home Section -->

 <!-- Contact Section -->
 <section class="page-section" id="contact">
    <div class="container position-relative wow fadeInUp" data-wow-delay="0">
        @if(Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif

        @if(Session::has('messageError'))
                        <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
        @endif

          <div class="row">

            <!-- Left Column -->
            <div class="col-lg-4 mb-md-50 mb-sm-30 position-relative z-index-1">

                <h2 class="section-caption-fancy mb-20 mb-xs-10">Let's Talk</h2>

                <h3 class="section-title mb-50 mb-sm-30">Let’s create something beautiful together.</h3>

                <!-- Contact Information -->
                <div class="row">
                    <div class="col-md-11">

                        <!-- Address -->
                        <div class="contact-item mb-30 mb-sm-20">
                            <div class="ci-icon">
                                <i class="mi-location"></i>
                            </div>
                            <h4 class="ci-title visually-hidden">
                                Our Address
                            </h4>
                            <div class="ci-text">
                                Valji Building, Moktar Daddah St, Nairobi
                            </div>
                            <div>
                                <a href="https://maps.app.goo.gl/vz1majS387Q5zvcdA" class="link-hover-anim" data-link-animate="y" rel="nofollow noopener" target="_blank">See Map <i class="mi-arrow-right size-18"></i></a>
                            </div>
                        </div>
                        <!-- End Address -->

                        <!-- Email -->
                        <div class="contact-item mb-30 mb-sm-20">
                            <div class="ci-icon">
                                <i class="mi-email"></i>
                            </div>
                            <h4 class="ci-title visually-hidden">
                                Our Email
                            </h4>
                            <div class="ci-text">
                                info@gownsea.com
                            </div>
                            <div>
                                <a href="mailto:info@gownsea.com" class="link-hover-anim" data-link-animate="y">Say Hello <i class="mi-arrow-right size-18"></i></a>
                            </div>
                        </div>
                        <!-- End Email -->

                        <!-- Phone -->
                        <div class="contact-item">
                            <div class="ci-icon">
                                <i class="mi-mobile"></i>
                            </div>
                            <h4 class="ci-title visually-hidden">
                                Call Us
                            </h4>
                            <div class="ci-text">
                                +254 728 311537
                                <div class="small">
                                    (Monday-Friday: 9am to 6pm)
                                </div>
                            </div>
                            <div>
                                <a href="tel:+254 728 311537" class="link-hover-anim" data-link-animate="y">Call now <i class="mi-arrow-right size-18"></i></a>
                            </div>
                        </div>
                        <!-- End Phone -->

                    </div>
                </div>
                <!-- End Contact Information -->

            </div>
            <!-- End Left Column -->

            <!-- Right Column -->
            <div class="col-lg-8 col-xl-7 offset-xl-1">
                <div class="position-relative">

                    <!-- Decorative Image -->
                    {{-- <div class="decoration-11 d-none d-xl-block">
                        <img src="images/demo-fancy/contact-section-image.png" width="225" height="250" alt="">
                    </div> --}}
                    <!-- End Decorative Image -->

                    <div class="box-shadow round p-4 p-sm-5">

                        <h4 class="h3 mb-30">Get in Touch</h4>

                        <!-- Contact Form -->
                        <form class="form contact-form" id="contact_form" method="post" action="{{route('contact-us.store')}}" role="form" novalidate="novalidate">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">

                                    <!-- Name -->
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="input-lg round form-control" placeholder="Enter your name" pattern=".{3,100}" required="" aria-required="true">
                                    </div>
                                    <!-- End Name -->

                                </div>

                                <div class="col-md-6">

                                    <!-- Email -->
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="input-lg round form-control" placeholder="Enter your email" pattern=".{5,100}" required="" aria-required="true">
                                    </div>
                                    <!-- End Email -->

                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-12">

                                    <!-- Email -->
                                    <div class="form-group">
                                        <label for="email">Mobile</label>
                                        <input type="email" name="phone" id="mobile" class="input-lg round form-control" placeholder="" required="" aria-required="true">
                                    </div>
                                    <!-- End Email -->

                                </div>
                            </div>

                            <!-- Message -->
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" class="input-lg round form-control" style="height: 130px;" placeholder="Enter your message"></textarea>
                            </div>
                            <?php
                                $ops = array('-', '+');
                                $answer = -1;

                                $num1 = rand(0, 50);
                                $num2 = rand(0, 15);

                                $answer = $num1 + $num2;

                            ?>
                            <hr>
                            <input type="hidden" name="correct_answer" id="correct_answer" value="{{$answer}}">
                            <input required class="form-control" value="{{$answer}}" type="hidden" id="verify_contact" name="verify_contact">
                                <div class="row">


                                    <div class="col-md-6">
                                        <label>Are you human? {{$num1}} + {{$num2}} =</label>
                                        <div class="form-grp">

                                            <input required class="form-control" type="text" id="verify_contact" name="verify_contact_input">
                                        </div>
                                    </div>
                                </div>
                            <hr>


                            <div class="row">
                                <div class="col-md-6 col-xl-5">

                                    <!-- Send Button -->
                                    <div class="pt-3">
                                        <button class="submit_btn btn btn-mod btn-color btn-large btn-round btn-hover-anim" id="submit_btn" aria-controls="result">
                                            <span>Send Message</span>
                                        </button>
                                    </div>
                                    <!-- End Send Button -->

                                </div>

                                <div class="col-md-6 col-xl-7 d-flex align-items-center">

                                    <!-- Inform Tip -->
                                    <div class="form-tip w-100 pt-3 mt-sm-20">
                                        <i class="icon-info size-16"></i>
                                        All the fields are required. By sending the form you agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>.
                                    </div>
                                    <!-- End Inform Tip -->

                                </div>
                            </div>

                           <div id="result" role="region" aria-live="polite" aria-atomic="true"></div>

                        </form>
                        <!-- End Contact Form -->

                    </div>

                </div>
            </div>
            <!-- End Right Column -->

        </div>

    </div>
</section>
<!-- End Contact Section -->


<!-- Contact Section -->
{{-- <section class="page-section" id="contact">
    <div class="container position-relative">

        <div class="row mb-80 mb-sm-60 wow fadeInUp" data-wow-offset="0">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">

                <p class="section-descr mb-0">
                    Get in touch with Gownsea for graduation gown rentals, bulk orders, and inquiries. We’re here to assist universities, colleges, and individuals with quality academic regalia. Contact us today!
                </p>

            </div>
        </div>

        <div class="row wow fadeInUp">

            <!-- Left Column -->
            <div class="col-lg-5 mb-md-50 mb-sm-30 d-flex align-items-strech">
                <div class="bg-color-primary-1 bg-color-alpha-90 bg-image bg-scroll light-content w-100 round overflow-hidden px-4 px-sm-5 py-5" style="background-image: url(images/demo-corporate/section-bg-4.jpg)">

                    <!-- Address -->
                    <div class="contact-item mb-40 mb-sm-20">
                        <div class="ci-icon">
                            <i class="mi-location"></i>
                        </div>
                        <h4 class="ci-title">
                            Address
                        </h4>
                        <div class="ci-text large">
                            Valji Building, Moktar Daddah St, Nairobi
                        </div>
                        <div class="ci-link">
                            <a href="https://maps.app.goo.gl/vz1majS387Q5zvcdA" rel="nofollow noopener" target="_blank">See Map</a>
                        </div>
                    </div>
                    <!-- End Address -->

                    <hr class="mt-0 mb-40 mb-sm-20 opacity-02"/>

                    <!-- Email -->
                    <div class="contact-item mb-40 mb-sm-20">
                        <div class="ci-icon">
                            <i class="mi-email"></i>
                        </div>
                        <h4 class="ci-title">
                            Email
                        </h4>
                        <div class="ci-text large">
                            info@gownsea.com
                        </div>
                        <div class="ci-link">
                            <a href="mailto:info@gownsea.com">Say Hello</a>
                        </div>
                    </div>
                    <!-- End Email -->

                    <hr class="mt-0 mb-40 mb-sm-20 opacity-02"/>

                    <!-- Phone -->
                    <div class="contact-item">
                        <div class="ci-icon">
                            <i class="mi-mobile"></i>
                        </div>
                        <h4 class="ci-title">
                            Phone
                        </h4>
                        <div class="ci-text large">
                            +254 728 311537
                        </div>
                        <div class="ci-link">
                            <a href="tel:+254728311537">Call now</a>
                        </div>
                    </div>
                    <!-- End Phone -->

                </div>
            </div>
            <!-- End Left Column -->

            <!-- Right Column -->
            <div class="col-lg-7 d-flex align-items-strech">
                <div class="border-color-primary-1 round w-100 px-4 px-sm-5 py-5">

                    <h3 class="section-title-small mt-n10 mb-40 mb-sm-30">We Would Love To Hear From You</h3>

                    <!-- Contact Form -->
                    <form class="form contact-form" id="contact_form">

                        <div class="row">
                            <div class="col-md-6">

                                <!-- Name -->
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="input-lg round form-control" placeholder="Enter your name" pattern=".{3,100}" required aria-required="true">
                                </div>
                                <!-- End Name -->

                            </div>

                            <div class="col-md-6">

                                <!-- Email -->
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="input-lg round form-control" placeholder="Enter your email" pattern=".{5,100}" required aria-required="true">
                                </div>
                                <!-- End Email -->

                            </div>
                        </div>

                        <!-- Message -->
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" class="input-lg round form-control" style="height: 132px;" placeholder="Enter your message"></textarea>
                        </div>

                        <div class="row">

                            <div class="col-md-6 col-xl-7 d-flex align-items-center">

                                <!-- Inform Tip -->
                                <div class="form-tip w-100 pt-3">
                                    <i class="icon-info size-16"></i>
                                    All the fields are required. By sending the form you agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>.
                                </div>
                                <!-- End Inform Tip -->

                            </div>

                            <div class="col-md-6 col-xl-5 mt-sm-20">

                                <!-- Send Button -->
                                <div class="pt-3 text-md-end">
                                    <button type="submit" class="submit_btn btn btn-mod btn-color btn-large btn-round btn-hover-anim" id="submit_btn" aria-controls="result">
                                        <span>Send Message</span>
                                    </button>
                                </div>
                                <!-- End Send Button -->

                            </div>

                        </div>

                       <div id="result" role="region" aria-live="polite" aria-atomic="true"></div>

                    </form>
                    <!-- End Contact Form -->

                </div>
            </div>
            <!-- End Right Column -->

        </div>

    </div>
</section> --}}
<!-- End Contact Section -->


<!-- Google Map -->
<div class="google-map">

    <a href="#" class="map-section">
        <div class="map-toggle wow fadeInUpShort" aria-hidden="true">
            <div class="mt-icon">
                <i class="mi-location"></i>
            </div>
            <div class="mt-text">
                <div class="mt-open">Open the map <i class="mt-open-icon"></i></div>
                <div class="mt-close">Close the map <i class="mt-close-icon"></i></div>
            </div>
        </div>
    </a>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8201559111217!2d36.8200614!3d-1.2816551000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f116d69ae0cf1%3A0xd5afcb025a37d2dd!2sGownsea%20Ltd!5e0!3m2!1sen!2ske!4v1740553322946!5m2!1sen!2ske" width="600" height="450" loading="lazy" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div>
<!-- End Google Map -->

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
                <?php
                   $Faq = DB::table('faq')->get();
                ?>



                <!-- Accordion -->
                <dl class="toggle">

                    @foreach ($Faq as $faq)
                    <dt>
                        <a href="#" >{{$faq->title}}</a>
                    </dt>
                    <dd class="blacks" >
                        {!!html_entity_decode($faq->content)!!}
                    </dd>
                    @endforeach

                </dl>
                <!-- End Accordion -->

            </div>

        </div>
    </div>
</section>
<!-- End FAQ Section -->

 </main>
@endsection
