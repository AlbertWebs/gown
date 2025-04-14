@extends('front.master')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .checkout-container {
      max-width: 1200px;
      margin: 30px auto;
    }
    .order-summary {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    .form-section {
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
  </style>
<div class="container checkout-container">
  <div class="row">

    <!-- Left form section -->
    <div class="col-md-7 form-section">
        <form method="POST" action="{{route('mobile-stk-initiate-post')}}" id="stkForm">
        <h5>Contact</h5>
        <input type="email" class="form-control mb-3" placeholder="Email or mobile phone number">
        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" id="emailOffers">
            <label class="form-check-label" for="emailOffers">Email me with news and offers</label>
        </div>

        <h5>Delivery</h5>
        <div class="row g-3">
            <div class="col-md-6">
            <label class="form-label">Country/Region</label>
            <select class="form-select">
                <option selected>Kenya</option>
            </select>
            </div>
            <div class="col-md-6">
            <label class="form-label">Phone</label>
            <input placeholder="+254720000000" name="phone" type="text" class="form-control" required>
            </div>
            <div class="col-md-12">
            <input name="name" type="text" class="form-control" placeholder="First name" required>
            </div>

            <div class="col-12">
            <input name="location" type="text" class="form-control" placeholder="Address" required>
            </div>
            <div class="col-md-6">
            <input type="text" class="form-control" placeholder="City" required>
            </div>
            <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Postal code (optional)">
            </div>
            <div class="col-12">
            <div class="form-check mt-2 mb-4">
                <input class="form-check-input" type="checkbox" checked id="saveInfo">
                <label class="form-check-label" for="saveInfo">Save this information for next time</label>
            </div>
            </div>
        </div>

        <h5>Shipping method</h5>
        <div class="border rounded p-3 mb-3">
            <p class="mb-1">
                Once your order is confirmed, our team will reach out to you directly with all the shipping details. We’ll provide updates on the delivery timeline and any relevant tracking information to ensure a smooth and timely arrival.
            </p>
            {{-- <strong>Ksh 150.00</strong> --}}
        </div>

        <label class="form-label">Package Size</label>
        <select class="form-select mb-2">
            <option value="sm" selected>sm</option>
            <option value="M" >M</option>
            <option value="L" >L</option>
            <option value="XL">XL</option>
            <option value="XXL" >XXL</option>
            <option value="custom" >Custom</option>
        </select>
        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" id="confirmSize">
            <label class="form-check-label" for="confirmSize">
            I confirm that the package size provided above is accurate and courier/shipping pricing will be charged if the package is a different size
            </label>
        </div>

        <h5>Payment</h5>
        <div class="border rounded p-3 mb-3">
            <p>All transactions are secure and encrypted.</p>
            <div class="mb-2">
            <img style="width:300px; object-fit:cover" src="{{url('/')}}/uploads/ef623caaf9e27d3cc25080d6ef1c3edf.jpg" alt="Payment logos" >
            </div>
            <div class="bg-light p-3 rounded text-center">
            <p>After clicking "Pay now", you will receive a prompt to complete your purchase securely.</p>
            </div>
        </div>

        <h5>Billing address</h5>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="billing" id="sameAddress" checked>
            <label class="form-check-label" for="sameAddress">
            Same as shipping address
            </label>
        </div>
        {{-- <div class="form-check mb-4">
            <input class="form-check-input" type="radio" name="billing" id="differentAddress">
            <label class="form-check-label" for="differentAddress">
            Use a different billing address
            </label>
        </div> --}}

        {{-- <h5>Add tip</h5>
        <div class="d-flex gap-2 mb-3">
            <button class="btn btn-outline-secondary">5%<br><small>Ksh 50.00</small></button>
            <button class="btn btn-outline-secondary">10%<br><small>Ksh 100.00</small></button>
            <button class="btn btn-outline-secondary">15%<br><small>Ksh 150.00</small></button>
            <button class="btn btn-outline-secondary">None</button>
        </div>
        <div class="input-group mb-4">
            <input type="text" class="form-control" placeholder="Custom tip">
            <button class="btn btn-outline-secondary" type="button">Add tip</button>
        </div> --}}
        <br><br>

        {{-- <button class="btn btn-primary w-100" style="background-color:#c32728; border:3px solid #0F3567">Pay now</button> --}}

            @csrf

            {{-- <div class="mt-4 pt-4">
                <div class="d-grid gap-2">
                    <input name="name" class="rounded form-control form-control-lg" id="formControlLg" placeholder="Full Name" value="" type="text" required="This field is required">
                    <input name="phone" class="rounded form-control form-control-lg" id="formControlLg" placeholder="+254" value="" type="text" required="This field is required">
                    <input name="location" class="rounded form-control form-control-lg" id="formControlLg" placeholder="Nairobi" value="" type="text" required="This field is required">
                </div>

            </div> --}}
            <input type="hidden" name="amount" value="{{$Gown->price}}" required>
            <div class="mt-4 pt-4">
                <div class="d-grid gap-2">
                    {{-- <button class="h6 p-4 rounded btn-primaray btn-border-w" type="submit" style="background-color:#c32728; color:#ffffff;">Buy Now &nbsp; &nbsp; &nbsp; <img class="loading-img" src="{{url('/')}}/uploads/icon/ZKZg.gif"></button> --}}
                    <button class="btn btn-primary w-100" style="background-color:#c32728; border:3px solid #0F3567">Pay now &nbsp; &nbsp; &nbsp; <img class="loading-img" src="{{url('/')}}/uploads/icon/ZKZg.gif"></button>
                </div>
            </div>
            <p class="text-center stk-check text-success">

            </p>
        </form>

      <div class="mt-3 text-muted text-center">
        <a target="new" href="{{route('return-policy')}}">Refund policy</a> | <a target="new" href="{{route('privacy-policy')}}">Privacy policy</a> | <a target="new" href="{{route('terms-and-conditions')}}">Terms of service</a>
      </div>
    </div>

    <!-- Right order summary -->
    <div class="col-md-5 ps-md-4 mt-4 mt-md-0">
      <div class="order-summary">
        <div class="d-flex align-items-center mb-3">
          <img src="{{$Gown->image}}" width="70" alt="Product" class="me-3">
          <div>
            <p class="mb-1 fw-bold">{{$Gown->title}}</p>
            <span class="text-muted">
                {{\App\Models\Category::find($Gown->category_id)->title}}
            </span>
          </div>
          <div class="ms-auto fw-bold">Ksh {{$Gown->price}}</div>
        </div>

        <input type="text" class="form-control mb-3" placeholder="Discount code or gift card">
        <button class="btn btn-outline-secondary w-100 mb-4">Apply</button>

        <div class="d-flex justify-content-between">
          <span>Subtotal</span>
          <span>Ksh {{$Gown->price}}</span>
        </div>
        <div class="d-flex justify-content-between mb-2">
          {{-- <span>Shipping</span> --}}
          {{-- <span>Ksh 150.00</span> --}}
        </div>
        <hr>
        <div class="d-flex justify-content-between fw-bold">
          <span>Total</span>
          <span>Ksh {{$Gown->price}}</span>
        </div>
        <small class="text-muted d-block mt-2">Including in taxes</small>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
