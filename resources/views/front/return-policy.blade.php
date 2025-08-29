@extends('front..seo.master-refund-policy')

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
                        Refund Policy
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
                <h2>Return & Refund Policy</h2>
                <p><strong>Effective Date:</strong> March 8, 2025</p>

                <div class="hired-gown-policy">
                    <h3>1. Return Policy for Hired Graduation Gowns</h3>

                    <h4>1.1 Return Deadline</h4>
                    <p>The return deadline for hired gowns will be specified in the individual <strong>hiring contract</strong>. Late returns will incur a <strong>late fee</strong> as outlined in the contract.</p>

                    <h4>1.2 Condition of Return</h4>
                    <p>All hired gowns must be returned in the same condition they were issued:</p>
                    <ul>
                        <li>No stains, tears, or damages</li>
                        <li>Complete set (gown, cap, and hood, if applicable)</li>
                        <li>Packed in the provided garment bag</li>
                    </ul>

                    <h4>1.3 Late Returns & Fees</h4>
                    <p>
                        Gowns returned <strong>after the agreed deadline</strong> will attract a <strong>late return fee</strong> as per the hiring contract.
                        If the gown is not returned within <strong>360 Days (For New Gowns)</strong>, it will be considered lost, and the full gown value will be charged.
                    </p>

                    <h4>1.4 Damaged or Lost Gowns</h4>
                    <p>
                        If a hired gown is returned damaged beyond normal wear and tear, the hirer will be required to pay the <strong>full replacement value</strong> of the gown.
                        Lost gowns will also be charged at their <strong>full replacement cost</strong>.
                    </p>

                    <h4>1.5 Refunds & Deposits</h4>
                    <p>
                        If a refundable security deposit was paid, it will be refunded <strong>only if the gown is returned on time and in acceptable condition</strong>.
                        Any deductions for damages or late returns will be communicated before processing refunds.
                    </p>
                </div>

                <div class="purchased-gown-policy">
                    <h3>2. Return Policy for Purchased Graduation Gowns</h3>

                    <h4>2.1 Eligibility for Returns</h4>
                    <p>We accept returns or exchanges for purchased gowns only under the following conditions:</p>
                    <ul>
                        <li>The gown must be <strong>unused</strong>, <strong>unworn</strong>, and <strong>in its original packaging</strong>.</li>
                        <li>Returns must be made within <strong>360 Days (For New Gowns)</strong> from the date of purchase.</li>
                    </ul>

                    <h4>2.2 Non-Returnable Items</h4>
                    <p>The following items are not eligible for returns:</p>
                    <ul>
                        <li>Custom-made or personalized gowns</li>
                        <li>Gowns that have been <strong>altered, worn, washed, or damaged</strong> after purchase</li>
                    </ul>

                    <h4>2.3 Refunds & Exchanges</h4>
                    <p>Approved returns will be eligible for a <strong>refund or exchange</strong>. Refunds will be processed via the original payment method within <strong>360 Days (For New Gowns)</strong>.</p>

                    <h4>2.4 Defective or Incorrect Items</h4>
                    <p>If you receive a <strong>damaged</strong> or <strong>incorrect</strong> gown, please notify us within <strong>360 Days (For New Gowns)</strong>, and we will arrange for a replacement or refund at no extra cost.</p>
                </div>

                <div class="contact-info">
                    <h3>3. Contact & Returns Address</h3>
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
