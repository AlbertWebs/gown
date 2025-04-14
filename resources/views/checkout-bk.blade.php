<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Checkout - HIII-STYLE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
</head>
<body>

<div class="container checkout-container">
  <div class="row">
    <!-- Left form section -->
    <div class="col-md-7 form-section">
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
          <input type="text" class="form-control">
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" placeholder="First name">
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" placeholder="Last name">
        </div>
        <div class="col-12">
          <input type="text" class="form-control" placeholder="Address">
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" placeholder="City">
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" placeholder="Postal code (optional)">
        </div>
        <div class="col-12">
          <div class="form-check mt-2 mb-4">
            <input class="form-check-input" type="checkbox" id="saveInfo">
            <label class="form-check-label" for="saveInfo">Save this information for next time</label>
          </div>
        </div>
      </div>

      <h5>Shipping method</h5>
      <div class="border rounded p-3 mb-3">
        <p class="mb-1">Please select your shipping method below.</p>
        <strong>Ksh 150.00</strong>
      </div>

      <label class="form-label">Package Size</label>
      <select class="form-select mb-2">
        <option selected>Select Your Package Size</option>
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
          <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" alt="Payment logos" width="180">
        </div>
        <div class="bg-light p-3 rounded text-center">
          <p>After clicking "Pay now", you will be redirected to PayPal to complete your purchase securely.</p>
        </div>
      </div>

      <h5>Billing address</h5>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="billing" id="sameAddress" checked>
        <label class="form-check-label" for="sameAddress">
          Same as shipping address
        </label>
      </div>
      <div class="form-check mb-4">
        <input class="form-check-input" type="radio" name="billing" id="differentAddress">
        <label class="form-check-label" for="differentAddress">
          Use a different billing address
        </label>
      </div>

      <h5>Add tip</h5>
      <div class="d-flex gap-2 mb-3">
        <button class="btn btn-outline-secondary">5%<br><small>Ksh 50.00</small></button>
        <button class="btn btn-outline-secondary">10%<br><small>Ksh 100.00</small></button>
        <button class="btn btn-outline-secondary">15%<br><small>Ksh 150.00</small></button>
        <button class="btn btn-outline-secondary">None</button>
      </div>
      <div class="input-group mb-4">
        <input type="text" class="form-control" placeholder="Custom tip">
        <button class="btn btn-outline-secondary" type="button">Add tip</button>
      </div>

      <button class="btn btn-primary w-100">Pay now</button>
      <div class="mt-3 text-muted text-center">
        <a href="#">Refund policy</a> | <a href="#">Privacy policy</a> | <a href="#">Terms of service</a>
      </div>
    </div>

    <!-- Right order summary -->
    <div class="col-md-5 ps-md-4 mt-4 mt-md-0">
      <div class="order-summary">
        <div class="d-flex align-items-center mb-3">
          <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/2c03fa9a-8db2-4024-8299-b4db41b14262/samba-og-shoes.png" width="70" alt="Product" class="me-3">
          <div>
            <p class="mb-1 fw-bold">Adidas Samba Sneakers (White/Brown)</p>
            <span class="text-muted">41</span>
          </div>
          <div class="ms-auto fw-bold">Ksh 1,000.00</div>
        </div>

        <input type="text" class="form-control mb-3" placeholder="Discount code or gift card">
        <button class="btn btn-outline-secondary w-100 mb-4">Apply</button>

        <div class="d-flex justify-content-between">
          <span>Subtotal</span>
          <span>Ksh 1,000.00</span>
        </div>
        <div class="d-flex justify-content-between mb-2">
          <span>Shipping</span>
          <span>Ksh 150.00</span>
        </div>
        <hr>
        <div class="d-flex justify-content-between fw-bold">
          <span>Total</span>
          <span>Ksh 1,150.00</span>
        </div>
        <small class="text-muted d-block mt-2">Including Ksh 137.39 in taxes</small>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
