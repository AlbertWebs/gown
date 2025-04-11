@extends('front.master')

@section('content')
  <main id="main">



    <section>
        <div class="container py-5">
          <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-8">
              <div class="rounded card">
                <div class="card-body p-md-5 mb-4">
                  <div class="invoice-header pb-4">

                    <h3 class="float-start">Gownsea Store</h3>
                    <img src="{{url('/')}}/favicon/apple-touch-icon.png" class="float-end" height="30">

                  </div>
                  <div class="order-details text-muted rounded px-3 py-4 my-4">
                    <span class="fw-bold">Order #12345</span> <span class="fw-bold float-end">KES {{$Gown->price}}</span>
                    {{-- <h4 class="h6 fw-light">Demo invoice title</h4> --}}
                  </div>
                  <div class="form-outline" data-mdb-input-init="">
                    {{-- <label class="d-flex justify-content-center" for="formControlLg"></label>
                    <label class="display-6 d-flex justify-content-center" for="formControlLg">Select Payment Currency</label>
                    <input class="my-4 rounded form-control form-control-lg" id="formControlLg" placeholder="Search cryptocurrencies &rarr;" type="text"> --}}
                  </div><br>
                  <div class="shadow rounded px-3 py-4 border border-danger border-2 rounded mt-4 d-flex justify-content-between" style="border: 1px solid #c32728">
                    <div class="d-flex flex-row align-items-center">
                      <img class="rounded-3" src="{{$Gown->image}}" width="40">
                      <div class="d-flex flex-column ms-4">
                        <span class="h5 mb-1">{{$Gown->title}}</span> <span class="small text-muted"><?php $Category = DB::table('categories')->where('id',$Gown->category_id)->first(); echo $Category->title; ?></span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center d-none-mobile">
                      <sup class="btc fw-bold text-muted">KES</sup> <span class="h2 mx-1 mb-0">{{$Gown->price}}</span>
                    </div>
                  </div>
                  <form method="POST" action="{{route('mobile-stk-initiate-post')}}" id="stkForm">
                    @csrf

                    <div class="mt-4 pt-4">
                        <div class="d-grid gap-2">
                            <input name="name" class="rounded form-control form-control-lg" id="formControlLg" placeholder="Full Name" value="" type="text" required="This field is required">
                            <input name="phone" class="rounded form-control form-control-lg" id="formControlLg" placeholder="+254" value="" type="text" required="This field is required">
                            <input name="location" class="rounded form-control form-control-lg" id="formControlLg" placeholder="Nairobi" value="" type="text" required="This field is required">
                        </div>

                    </div>
                    <input type="hidden" name="amount" value="{{$Gown->price}}" required>
                    <div class="mt-4 pt-4">
                        <div class="d-grid gap-2">
                            <button class="h6 p-4 rounded btn-primaray btn-border-w" type="submit" style="background-color:#c32728; color:#ffffff;">Buy Now &nbsp; &nbsp; &nbsp; <img class="loading-img" src="{{url('/')}}/uploads/icon/ZKZg.gif"></button>
                        </div>
                    </div>
                    <p class="text-center stk-check text-success">

                    </p>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>


    <section class="page-section" id="about">
        <div class="container">
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
        </div>
    </section>





 </main>
@endsection
