@extends('layouts.app')

@section('title', 'Modals - UI elements')

@push('styles')
<link rel="stylesheet" href="{{ asset('sneat/vendor/libs/select2/select2.css') }}"" />
<link rel="stylesheet" href="{{ asset('sneat/vendor/libs/@form-validation/form-validation.css') }}"" />
<link rel="stylesheet" href="{{ asset('sneat/vendor/libs/bs-stepper/bs-stepper.css') }}"" />
@endpush

@section('content')
<div class="row mb-6">
    <!--  Pricing -->
    <div class="col-12 col-sm-6 col-lg-4 mb-6">
      <div class="card">
        <div class="card-body text-center">
          <i class="mb-6 bx icon-md bx-bar-chart-alt-2"></i>
          <h5>Pricing</h5>
          <p>Elegant pricing options modal popup example, easy to use in any page.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pricingModal">Show</button>
        </div>
      </div>
    </div>
    <!--/  Pricing -->

    <!--  Add New Credit Card -->
    <div class="col-12 col-sm-6 col-lg-4 mb-6">
      <div class="card">
        <div class="card-body text-center">
          <i class="mb-6 bx icon-md bx-credit-card"></i>
          <h5>Add New Credit Card</h5>
          <p>Quickly collect the credit card details, built in input mask and form validation support.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewCCModal">Show</button>
        </div>
      </div>
    </div>
    <!--/  Add New Credit Card -->

    <!--  Add New Address -->
    <div class="col-12 col-sm-6 col-lg-4 mb-6">
      <div class="card">
        <div class="card-body text-center">
          <i class="mb-6 bx icon-md bx-buildings"></i>
          <h5>Add New Address</h5>
          <p>Ready to use form to collect user address data with validation and custom input support.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewAddress">Show</button>
        </div>
      </div>
    </div>
    <!--/  Add New Address -->

    <!--  Refer & Earn -->
    <div class="col-12 col-sm-6 col-lg-4 mb-6">
      <div class="card">
        <div class="card-body text-center">
          <i class="mb-6 bx icon-md bx-gift"></i>
          <h5>Refer & Earn</h5>
          <p>Use Refer & Earn modal to encourage your exiting customers refer their friends & colleague.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#referAndEarn">Show</button>
        </div>
      </div>
    </div>
    <!--/  Refer & Earn -->

    <!--  Edit User -->
    <div class="col-12 col-sm-6 col-lg-4 mb-6">
      <div class="card">
        <div class="card-body text-center">
          <i class="mb-6 bx icon-md bx-user"></i>
          <h5>Edit User</h5>
          <p>Easily update the user data on the go, built in form validation and custom controls.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUser">Show</button>
        </div>
      </div>
    </div>
    <!--/  Edit User -->

    <!--  Enable OTP -->
    <div class="col-12 col-sm-6 col-lg-4 mb-md-0 mb-6">
      <div class="card">
        <div class="card-body text-center">
          <i class="mb-6 bx icon-md bx-mobile-alt"></i>
          <h5>Enable OTP</h5>
          <p>Use this modal to enhance your application security by enabling authentication with OTP.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enableOTP">Show</button>
        </div>
      </div>
    </div>
    <!--/  Enable OTP -->

    <!--  Share Project -->
    <div class="col-12 col-sm-6 col-lg-4 mb-6">
      <div class="card">
        <div class="card-body text-center">
          <i class="mb-6 bx icon-md bx-file"></i>
          <h5>Share Project</h5>
          <p>Elegant Share Project options modal popup example, easy to use in any page.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#shareProject">Show</button>
        </div>
      </div>
    </div>
    <!--/  Share Project -->

    <!--  Create App -->
    <div class="col-12 col-sm-6 col-lg-4 mb-6">
      <div class="card">
        <div class="card-body text-center">
          <i class="mb-6 bx icon-md bx-cube"></i>
          <h5>Create App</h5>
          <p>Provide application data with this form to create your app, easy to use in page.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createApp">Show</button>
        </div>
      </div>
    </div>
    <!--/  Create App -->

    <!--  Two Factor Auth -->
    <div class="col-12 col-sm-6 col-lg-4 mb-6">
      <div class="card">
        <div class="card-body text-center">
          <i class="mb-4 icon-base bx bx-lock icon-md"></i>
          <h5>Two Factor Auth</h5>
          <p>Enhance your application security by enabling two factor authentication.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#twoFactorAuth">Show</button>
        </div>
      </div>
    </div>
    <!--/  Two Factor Auth -->

    <!--  Payment providers -->
    <div class="col-12 col-sm-6 col-lg-4 mb-6 mb-sm-0">
      <div class="card">
        <div class="card-body text-center">
          <i class="mb-4 icon-base bx bx-credit-card-alt icon-md"></i>
          <h5>Payment providers</h5>
          <p>Elegant payment options modal popup example, easy to use in any page.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentProvider">Show</button>
        </div>
      </div>
    </div>
    <!--/  Payment providers -->

    <!--  Payment methods -->
    <div class="col-12 col-sm-6 col-lg-4">
      <div class="card">
        <div class="card-body text-center">
          <i class="mb-4 icon-base bx bxs-credit-card icon-md"></i>
          <h5>Add Payment Method</h5>
          <p>Elegant payment methods modal popup example, easy to use in any page.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentMethods">Show</button>
        </div>
      </div>
    </div>
    <!--/  Payment methods -->
  </div>

  <!-- All Modals -->
  <!-- Pricing Modal -->
<div class="modal fade" id="pricingModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-simple modal-pricing">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <!-- Pricing Plans -->
        <div class="rounded-top">
          <h4 class="text-center mb-2">Pricing Plans</h4>
          <p class="text-center mb-0">All plans include 40+ advanced tools and features to boost your product. Choose the best plan to fit your needs.</p>
          <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 pt-12 pb-4">
            <label class="switch switch-sm ms-sm-12 ps-sm-12 me-0">
              <span class="switch-label fs-6 text-body">Monthly</span>
              <input type="checkbox" class="switch-input price-duration-toggler" checked />
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label fs-6 text-body">Annually</span>
            </label>
            <div class="mt-n5 ms-n10 ml-2 mb-10 d-none d-sm-flex align-items-center gap-1">
              <img src="{{ asset('sneat/img/pages/pricing-arrow-light.png') }}"" alt="arrow img" class="scaleX-n1-rtl pt-1" data-app-dark-img="pages/pricing-arrow-dark.png" data-app-light-img="pages/pricing-arrow-light.png" />
              <span class="badge badge-sm bg-label-primary rounded-1 mb-2 ">Save up to 10%</span>
            </div>
          </div>

          <div class="row gy-6">
            <!-- Basic -->
            <div class="col-xl mb-md-0 px-3">
              <div class="card border rounded shadow-none">
                <div class="card-body pt-12">
                  <div class="mt-3 mb-5 text-center">
                    <img src="{{ asset('sneat/img/icons/unicons/bookmark.png') }}"" alt="Basic Image" width="120" />
                  </div>
                  <h4 class="card-title text-center text-capitalize mb-1">Basic</h4>
                  <p class="text-center mb-5">A simple start for everyone</p>
                  <div class="text-center h-px-50">
                    <div class="d-flex justify-content-center">
                      <sup class="h6 text-body pricing-currency mt-2 mb-0 me-1">$</sup>
                      <h1 class="mb-0 text-primary">0</h1>
                      <sub class="h6 text-body pricing-duration mt-auto mb-1">/month</sub>
                    </div>
                  </div>

                  <ul class="list-group my-5 pt-9">
                    <li class="mb-4 d-flex align-items-center">
                      <span class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="icon-base bx bx-check icon-xs"></i></span><span>100 responses a month</span>
                    </li>
                    <li class="mb-4 d-flex align-items-center">
                      <span class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="icon-base bx bx-check icon-xs"></i></span><span>Unlimited forms and surveys</span>
                    </li>
                    <li class="mb-4 d-flex align-items-center">
                      <span class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="icon-base bx bx-check icon-xs"></i></span><span>Unlimited fields</span>
                    </li>
                    <li class="mb-4 d-flex align-items-center">
                      <span class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="icon-base bx bx-check icon-xs"></i></span><span>Basic form creation tools</span>
                    </li>
                    <li class="mb-0 d-flex align-items-center">
                      <span class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="icon-base bx bx-check icon-xs"></i></span><span>Up to 2 subdomains</span>
                    </li>
                  </ul>

                  <button type="button" class="btn btn-label-success d-grid w-100" data-bs-dismiss="modal">Your Current Plan</button>
                </div>
              </div>
            </div>

            <!-- Pro -->
            <div class="col-xl mb-md-0 px-3">
              <div class="card border-primary border shadow-none">
                <div class="card-body position-relative pt-4">
                  <div class="position-absolute end-0 me-5 top-0 mt-4">
                    <span class="badge bg-label-primary rounded-1">Popular</span>
                  </div>
                  <div class="my-5 pt-6 text-center">
                    <img src="{{ asset('sneat/img/icons/unicons/wallet-round.png') }}"" alt="Pro Image" width="120" />
                  </div>
                  <h4 class="card-title text-center text-capitalize mb-1">Standard</h4>
                  <p class="text-center mb-5">For small to medium businesses</p>
                  <div class="text-center h-px-50">
                    <div class="d-flex justify-content-center">
                      <sup class="h6 text-body pricing-currency mt-2 mb-0 me-1">$</sup>
                      <h1 class="price-toggle price-yearly text-primary mb-0">7</h1>
                      <h1 class="price-toggle price-monthly text-primary mb-0 d-none">9</h1>
                      <sub class="h6 text-body pricing-duration mt-auto mb-1">/month</sub>
                    </div>
                    <small class="price-yearly price-yearly-toggle text-body-secondary">USD 480 / year</small>
                  </div>

                  <ul class="list-group my-5 pt-9">
                    <li class="mb-4 d-flex align-items-center">
                      <span class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="icon-base bx bx-check icon-xs"></i></span><span>Unlimited responses</span>
                    </li>
                    <li class="mb-4 d-flex align-items-center">
                      <span class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="icon-base bx bx-check icon-xs"></i></span><span>Unlimited forms and surveys</span>
                    </li>
                    <li class="mb-4 d-flex align-items-center">
                      <span class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="icon-base bx bx-check icon-xs"></i></span><span>Instagram profile page</span>
                    </li>
                    <li class="mb-4 d-flex align-items-center">
                      <span class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="icon-base bx bx-check icon-xs"></i></span><span>Google Docs integration</span>
                    </li>
                    <li class="mb-0 d-flex align-items-center">
                      <span class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="icon-base bx bx-check icon-xs"></i></span><span>Custom “Thank you” page</span>
                    </li>
                  </ul>

                  <button type="button" class="btn btn-primary d-grid w-100" data-bs-dismiss="modal">Upgrade</button>
                </div>
              </div>
            </div>

            <!-- Enterprise -->
            <div class="col-xl px-3">
              <div class="card border rounded shadow-none">
                <div class="card-body pt-12">
                  <div class="mt-3 mb-5 text-center">
                    <img src="{{ asset('sneat/img/icons/unicons/briefcase-round.png') }}"" alt="Pro Image" width="120" />
                  </div>
                  <h4 class="card-title text-center text-capitalize mb-1">Enterprise</h4>
                  <p class="text-center mb-5">Solution for big organizations</p>

                  <div class="text-center h-px-50">
                    <div class="d-flex justify-content-center">
                      <sup class="h6 text-body pricing-currency mt-2 mb-0 me-1">$</sup>
                      <h1 class="price-toggle price-yearly text-primary mb-0">16</h1>
                      <h1 class="price-toggle price-monthly text-primary mb-0 d-none">19</h1>
                      <sub class="h6 text-body pricing-duration mt-auto mb-1">/month</sub>
                    </div>
                    <small class="price-yearly price-yearly-toggle text-body-secondary">USD 960 / year</small>
                  </div>

                  <ul class="list-group my-5 pt-9">
                    <li class="mb-4 d-flex align-items-center">
                      <span class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="icon-base bx bx-check icon-xs"></i></span><span>PayPal payments</span>
                    </li>
                    <li class="mb-4 d-flex align-items-center">
                      <span class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="icon-base bx bx-check icon-xs"></i></span><span>Logic Jumps</span>
                    </li>
                    <li class="mb-4 d-flex align-items-center">
                      <span class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="icon-base bx bx-check icon-xs"></i></span><span>File upload with 5GB storage</span>
                    </li>
                    <li class="mb-4 d-flex align-items-center">
                      <span class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="icon-base bx bx-check icon-xs"></i></span><span>Custom domain support</span>
                    </li>
                    <li class="mb-0 d-flex align-items-center">
                      <span class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="icon-base bx bx-check icon-xs"></i></span><span>Stripe integration</span>
                    </li>
                  </ul>

                  <button type="button" class="btn btn-label-primary d-grid w-100" data-bs-dismiss="modal">Upgrade</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Pricing Plans -->
    </div>
  </div>
</div>
<!--/ Pricing Modal --><script src="{{ asset('sneat//js/pages-pricing.js') }}""></script>
  <!-- Add New Credit Card Modal -->
<div class="modal fade" id="addNewCCModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="mb-2">Add New Card</h4>
          <p>Add new card to complete payment</p>
        </div>
        <form id="addNewCCForm" class="row g-6" onsubmit="return false">
          <div class="col-12 form-control-validation">
            <label class="form-label w-100" for="modalAddCard">Card Number</label>
            <div class="input-group input-group-merge">
              <input id="modalAddCard" name="modalAddCard" class="form-control credit-card-mask" type="text" placeholder="1356 3215 6548 7898" aria-describedby="modalAddCard2" />
              <span class="input-group-text cursor-pointer" id="modalAddCard2"><span class="card-type me-n2"></span></span>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddCardName">Name</label>
            <input type="text" id="modalAddCardName" class="form-control" placeholder="John Doe" />
          </div>
          <div class="col-6 col-md-3">
            <label class="form-label" for="modalAddCardExpiryDate">Exp. Date</label>
            <input type="text" id="modalAddCardExpiryDate" class="form-control expiry-date-mask" placeholder="MM/YY" />
          </div>
          <div class="col-6 col-md-3">
            <label class="form-label" for="modalAddCardCvv">CVV Code</label>
            <div class="input-group input-group-merge">
              <input type="text" id="modalAddCardCvv" class="form-control cvv-code-mask" maxlength="3" placeholder="654" />
              <span class="input-group-text cursor-pointer ps-0" id="modalAddCardCvv2"><i class="icon-base bx bx-help-circle text-body-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
            </div>
          </div>
          <div class="col-12">
            <div class="form-check form-switch my-2 ms-2">
              <input type="checkbox" class="form-check-input" id="futureAddress" />
              <label for="futureAddress" class="switch-label">Save card for future billing?</label>
            </div>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Credit Card Modal -->

  <!-- Add New Address Modal -->
<div class="modal fade" id="addNewAddress" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="address-title mb-2">Add New Address</h4>
          <p class="address-subtitle">Add new address for express delivery</p>
        </div>
        <form id="addNewAddressForm" class="row g-6" onsubmit="return false">
          <div class="col-12 form-control-validation">
            <div class="row">
              <div class="col-md mb-md-0 mb-4">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioHome">
                    <span class="custom-option-body">
                      <i class="icon-base bx bx-home"></i>
                      <span class="custom-option-title">Home</span>
                      <small> Delivery time (9am – 9pm) </small>
                    </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioHome" checked />
                  </label>
                </div>
              </div>
              <div class="col-md mb-md-0 mb-4">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioOffice">
                    <span class="custom-option-body">
                      <i class="icon-base bx bx-briefcase"></i>
                      <span class="custom-option-title"> Office </span>
                      <small> Delivery time (9am – 5pm) </small>
                    </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioOffice" />
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 form-control-validation col-md-6">
            <label class="form-label" for="modalAddressFirstName">First Name</label>
            <input type="text" id="modalAddressFirstName" name="modalAddressFirstName" class="form-control" placeholder="John" />
          </div>
          <div class="col-12 form-control-validation col-md-6">
            <label class="form-label" for="modalAddressLastName">Last Name</label>
            <input type="text" id="modalAddressLastName" name="modalAddressLastName" class="form-control" placeholder="Doe" />
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressCountry">Country</label>
            <select id="modalAddressCountry" name="modalAddressCountry" class="select2 form-select" data-allow-clear="true">
              <option value="">Select</option>
              <option value="Australia">Australia</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Belarus">Belarus</option>
              <option value="Brazil">Brazil</option>
              <option value="Canada">Canada</option>
              <option value="China">China</option>
              <option value="France">France</option>
              <option value="Germany">Germany</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Israel">Israel</option>
              <option value="Italy">Italy</option>
              <option value="Japan">Japan</option>
              <option value="Korea">Korea, Republic of</option>
              <option value="Mexico">Mexico</option>
              <option value="Philippines">Philippines</option>
              <option value="Russia">Russian Federation</option>
              <option value="South Africa">South Africa</option>
              <option value="Thailand">Thailand</option>
              <option value="Turkey">Turkey</option>
              <option value="Ukraine">Ukraine</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
            </select>
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressAddress1">Address Line 1</label>
            <input type="text" id="modalAddressAddress1" name="modalAddressAddress1" class="form-control" placeholder="12, Business Park" />
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressAddress2">Address Line 2</label>
            <input type="text" id="modalAddressAddress2" name="modalAddressAddress2" class="form-control" placeholder="Mall Road" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressLandmark">Landmark</label>
            <input type="text" id="modalAddressLandmark" name="modalAddressLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressCity">City</label>
            <input type="text" id="modalAddressCity" name="modalAddressCity" class="form-control" placeholder="Los Angeles" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressLandmark">State</label>
            <input type="text" id="modalAddressState" name="modalAddressState" class="form-control" placeholder="California" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressZipCode">Zip Code</label>
            <input type="number" id="modalAddressZipCode" name="modalAddressZipCode" class="form-control" placeholder="99950" />
          </div>
          <div class="col-12">
            <div class="form-check form-switch my-2 ms-2">
              <input type="checkbox" class="form-check-input" id="billingAddress" />
              <label for="billingAddress" class="switch-label">Use as a billing address?</label>
            </div>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Address Modal -->

  <!-- Refer & Earn Modal -->
<div class="modal fade" id="referAndEarn" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-refer-and-earn">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="mb-2">Refer & Earn</h4>
          <p class="text-center mb-12 m-auto">Invite your friend to sneat, if they sign up, you and your friend will get 30 days free trial.</p>
        </div>
        <div class="row row-gap-6">
          <div class="col-12 col-lg-4 px-6">
            <div class="d-flex justify-content-center mb-4">
              <div class="modal-refer-and-earn-step bg-label-primary">
                <i class="icon-base bx bx-message-square-dots"></i>
              </div>
            </div>
            <div class="text-center">
              <h5 class="mb-2">Send Invitation 👍🏻</h5>
              <p class="mb-lg-0">Send your referral link to your friend</p>
            </div>
          </div>
          <div class="col-12 col-lg-4 px-6">
            <div class="d-flex justify-content-center mb-4">
              <div class="modal-refer-and-earn-step bg-label-primary">
                <i class="icon-base bx bx-detail"></i>
              </div>
            </div>
            <div class="text-center">
              <h5 class="mb-2">Registration 😎</h5>
              <p class="mb-lg-0">Let them register to our services</p>
            </div>
          </div>
          <div class="col-12 col-lg-4 px-6">
            <div class="d-flex justify-content-center mb-4">
              <div class="modal-refer-and-earn-step bg-label-primary">
                <i class="icon-base bx bx-gift"></i>
              </div>
            </div>
            <div class="text-center">
              <h5 class="mb-2">Free Trial 🎉</h5>
              <p class="mb-0">Your friend will get 30 days free trial</p>
            </div>
          </div>
        </div>
        <hr class="mt-12 mb-6" />
        <h5 class="mb-6">Invite your friends</h5>
        <form class="row g-4" onsubmit="return false">
          <div class="col-lg-10">
            <label class="form-label" for="modalRnFEmail">Enter your friend’s email address and invite them to join sneat 😍</label>
            <input type="text" id="modalRnFEmail" class="form-control" placeholder="example@domain.com" aria-label="example@domain.com" />
          </div>
          <div class="col-lg-2 d-flex align-items-end justify-content-end">
            <button type="button" class="btn btn-primary w-100">Send</button>
          </div>
        </form>
        <h5 class="my-6">Share the referral link</h5>
        <form class="row g-4" onsubmit="return false">
          <div class="col-lg-9">
            <label class="form-label" for="modalRnFLink">You can also copy and send it or share it on your social media. 🚀</label>
            <div class="input-group input-group-merge">
              <input type="text" id="modalRnFLink" class="form-control" readonly value="https://themeselection.com" />
              <span class="input-group-text text-primary cursor-pointer" id="basic-addon33">Copy link</span>
            </div>
          </div>
          <div class="col-lg-3 d-flex align-items-end">
            <div class="btn-social d-flex justify-content-lg-between w-100 gap-lg-0 gap-4">
              <button type="button" class="btn btn-icon btn-facebook"><i class="icon-base bx bxl-facebook icon-md"></i></button>
              <button type="button" class="btn btn-icon btn-twitter"><i class="icon-base bx bxl-twitter icon-md"></i></button>
              <button type="button" class="btn btn-icon btn-linkedin"><i class="icon-base bx bxl-linkedin icon-md"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Refer & Earn Modal -->

  <!-- Edit User Modal -->
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-edit-user">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="mb-2">Edit User Information</h4>
          <p>Updating user details will receive a privacy audit.</p>
        </div>
        <form class="row g-6" onsubmit="return false">
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserFirstName">First Name</label>
            <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="John" value="John" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserLastName">Last Name</label>
            <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="Doe" value="Doe" />
          </div>
          <div class="col-12">
            <label class="form-label" for="modalEditUserName">Username</label>
            <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control" placeholder="johndoe007" value="johndoe007" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserEmail">Email</label>
            <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="example@domain.com" value="example@domain.com" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserStatus">Status</label>
            <select id="modalEditUserStatus" name="modalEditUserStatus" class="select2 form-select" aria-label="Default select example">
              <option selected>Status</option>
              <option value="1">Active</option>
              <option value="2">Inactive</option>
              <option value="3">Suspended</option>
            </select>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditTaxID">Tax ID</label>
            <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="123 456 7890" value="123 456 7890" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserPhone">Phone Number</label>
            <div class="input-group">
              <span class="input-group-text">US (+1)</span>
              <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" placeholder="202 555 0111" value="202 555 0111" />
            </div>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserLanguage">Language</label>
            <select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select" multiple>
              <option value="">Select</option>
              <option value="english" selected>English</option>
              <option value="spanish">Spanish</option>
              <option value="french">French</option>
              <option value="german">German</option>
              <option value="dutch">Dutch</option>
              <option value="hebrew">Hebrew</option>
              <option value="sanskrit">Sanskrit</option>
              <option value="hindi">Hindi</option>
            </select>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserCountry">Country</label>
            <select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select" data-allow-clear="true">
              <option value="">Select</option>
              <option value="Australia">Australia</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Belarus">Belarus</option>
              <option value="Brazil">Brazil</option>
              <option value="Canada">Canada</option>
              <option value="China">China</option>
              <option value="France">France</option>
              <option value="Germany">Germany</option>
              <option value="India" selected>India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Israel">Israel</option>
              <option value="Italy">Italy</option>
              <option value="Japan">Japan</option>
              <option value="Korea">Korea, Republic of</option>
              <option value="Mexico">Mexico</option>
              <option value="Philippines">Philippines</option>
              <option value="Russia">Russian Federation</option>
              <option value="South Africa">South Africa</option>
              <option value="Thailand">Thailand</option>
              <option value="Turkey">Turkey</option>
              <option value="Ukraine">Ukraine</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
            </select>
          </div>
          <div class="col-12">
            <div class="form-check form-switch my-2 ms-2">
              <input type="checkbox" class="form-check-input" id="editBillingAddress" checked />
              <label for="editBillingAddress" class="switch-label">Use as a billing address?</label>
            </div>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Edit User Modal -->

  <!-- Enable OTP Modal -->
<div class="modal fade" id="enableOTP" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="mb-2">Enable One Time Password</h4>
          <p>Verify Your Mobile Number for SMS</p>
        </div>
        <p>Enter your mobile phone number with country code and we will send you a verification code.</p>
        <form id="enableOTPForm" class="row g-6" onsubmit="return false">
          <div class="col-12 form-control-validation">
            <label class="form-label" for="modalEnableOTPPhone">Phone Number</label>
            <div class="input-group">
              <span class="input-group-text">US (+1)</span>
              <input type="text" id="modalEnableOTPPhone" name="modalEnableOTPPhone" class="form-control phone-number-otp-mask" placeholder="202 555 0111" />
            </div>
          </div>
          <div class="col-12 d-flex gap-4 flex-wrap">
            <button type="submit" class="btn btn-primary">Send OTP</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Enable OTP Modal -->

  <!-- Share Project Modal -->
<div class="modal fade" id="shareProject" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-enable-otp modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center">
          <h4 class="mb-2">Share Project</h4>
          <p>Share project with a team member</p>
        </div>
      </div>
      <div class="mb-6 mx-4 mx-md-0 px-md-6">
        <label for="select2Basic" class="form-label">Add Members</label>
        <select id="select2Basic" class="form-select form-select-lg share-project-select" data-allow-clear="true">
          <option data-name="Adelaide Nichols" data-image="img/avatars/20.png" selected>Adelaide Nichols</option>
          <option data-name="Julian Murphy" data-image="img/avatars/9.png">Julian Murphy</option>
          <option data-name="Sophie Gilbert" data-image="img/avatars/10.png">Sophie Gilbert</option>
          <option data-name="Marvin Wheeler" data-image="img/avatars/17.png">Marvin Wheeler</option>
        </select>
      </div>
      <h5 class="ms-4 ms-md-0 ps-md-6">8 Members</h5>
      <ul class="p-0 m-0 mx-4 mx-md-0 px-md-6">
        <li class="d-flex flex-wrap mb-4">
          <div class="avatar me-4">
            <img src="{{ asset('sneat/img/avatars/1.png') }}"" alt="avatar" class="rounded-circle" />
          </div>
          <div class="d-flex justify-content-between flex-grow-1">
            <div class="me-2">
              <p class="mb-0 text-heading">Lester Palmer</p>
              <p class="small mb-0">pe&#64;vogeiz.net</p>
            </div>
            <div class="dropdown">
              <button type="button" class="btn btn-text-secondary dropdown-toggle p-2 text-secondary" data-bs-toggle="dropdown" aria-expanded="false"><span class="me-2 d-none d-sm-inline-block">Can Edit</span></button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Owner</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can View</a>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="d-flex flex-wrap mb-4">
          <div class="avatar me-4">
            <img src="{{ asset('sneat/img/avatars/2.png') }}"" alt="avatar" class="rounded-circle" />
          </div>
          <div class="d-flex justify-content-between flex-grow-1">
            <div class="me-2">
              <p class="mb-0 text-heading">Mattie Blair</p>
              <p class="small mb-0">peromak&#64;zukedohik.gov</p>
            </div>
            <div class="dropdown">
              <button type="button" class="btn btn-text-secondary dropdown-toggle p-2 text-secondary" data-bs-toggle="dropdown" aria-expanded="false"><span class="me-2 d-none d-sm-inline-block">Owner</span></button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Owner</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can View</a>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="d-flex flex-wrap mb-4">
          <div class="avatar me-4">
            <img src="{{ asset('sneat/img/avatars/3.png') }}"" alt="avatar" class="rounded-circle" />
          </div>
          <div class="d-flex justify-content-between flex-grow-1">
            <div class="me-2">
              <p class="mb-0 text-heading">Marvin Wheeler</p>
              <p class="small mb-0">rumet&#64;jujpejah.net</p>
            </div>
            <div class="dropdown">
              <button type="button" class="btn btn-text-secondary dropdown-toggle p-2 text-secondary" data-bs-toggle="dropdown" aria-expanded="false"><span class="me-2 d-none d-sm-inline-block">Can Edit</span></button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Owner</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can View</a>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="d-flex flex-wrap mb-4">
          <div class="avatar me-4">
            <img src="{{ asset('sneat/img/avatars/4.png') }}"" alt="avatar" class="rounded-circle" />
          </div>
          <div class="d-flex justify-content-between flex-grow-1">
            <div class="me-2">
              <p class="mb-0 text-heading">Nannie Ford</p>
              <p class="small mb-0">negza&#64;nuv.io</p>
            </div>
            <div class="dropdown">
              <button type="button" class="btn btn-text-secondary dropdown-toggle p-2 text-secondary" data-bs-toggle="dropdown" aria-expanded="false"><span class="me-2 d-none d-sm-inline-block">Can Comment</span></button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Owner</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can View</a>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="d-flex flex-wrap mb-4">
          <div class="avatar me-4">
            <img src="{{ asset('sneat/img/avatars/5.png') }}"" alt="avatar" class="rounded-circle" />
          </div>
          <div class="d-flex justify-content-between flex-grow-1">
            <div class="me-2">
              <p class="mb-0 text-heading">Julian Murphy</p>
              <p class="small mb-0">lunebame&#64;umdomgu.net</p>
            </div>
            <div class="dropdown">
              <button type="button" class="btn btn-text-secondary dropdown-toggle p-2 text-secondary" data-bs-toggle="dropdown" aria-expanded="false"><span class="me-2 d-none d-sm-inline-block">Can View</span></button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Owner</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can View</a>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="d-flex flex-wrap mb-4">
          <div class="avatar me-4">
            <img src="{{ asset('sneat/img/avatars/6.png') }}"" alt="avatar" class="rounded-circle" />
          </div>
          <div class="d-flex justify-content-between flex-grow-1">
            <div class="me-2">
              <p class="mb-0 text-heading">Sophie Gilbert</p>
              <p class="small mb-0">ha&#64;sugit.gov</p>
            </div>
            <div class="dropdown">
              <button type="button" class="btn btn-text-secondary dropdown-toggle p-2 text-secondary" data-bs-toggle="dropdown" aria-expanded="false"><span class="me-2 d-none d-sm-inline-block">Can View</span></button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Owner</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can View</a>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="d-flex flex-wrap mb-4">
          <div class="avatar me-4">
            <img src="{{ asset('sneat/img/avatars/7.png') }}"" alt="avatar" class="rounded-circle" />
          </div>
          <div class="d-flex justify-content-between flex-grow-1">
            <div class="me-2">
              <p class="mb-0 text-heading">Chris Watkins</p>
              <p class="small mb-0">zokap&#64;mak.org</p>
            </div>
            <div class="dropdown">
              <button type="button" class="btn btn-text-secondary dropdown-toggle p-2 text-secondary" data-bs-toggle="dropdown" aria-expanded="false"><span class="me-2 d-none d-sm-inline-block">Can Comment</span></button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Owner</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can View</a>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="d-flex flex-wrap">
          <div class="avatar me-4">
            <img src="{{ asset('sneat/img/avatars/8.png') }}"" alt="avatar" class="rounded-circle" />
          </div>
          <div class="d-flex justify-content-between flex-grow-1">
            <div class="me-2">
              <p class="mb-0 text-heading">Adelaide Nichols</p>
              <p class="small mb-0">ujinomu&#64;jigo.com</p>
            </div>
            <div class="dropdown">
              <button type="button" class="btn btn-text-secondary dropdown-toggle p-2 text-secondary" data-bs-toggle="dropdown" aria-expanded="false"><span class="me-2 d-none d-sm-inline-block">Can Edit</span></button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Owner</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);">Can View</a>
                </li>
              </ul>
            </div>
          </div>
        </li>
      </ul>
      <div class="d-flex align-items-start mt-6 align-items-lg-center mx-4 mx-md-0 mb-4 mb-md-0 p-md-6 pt-0 gap-4 flex-wrap">
        <i class="icon-base bx bx-user text-heading icon-20px"></i>
        <div class="d-flex justify-content-between flex-grow-1 align-items-center flex-wrap gap-2">
          <h6 class="mb-0">Public to sneat - ThemeSelection</h6>
          <button class="btn btn-primary"><i class="icon-base bx bx-link icon-sm me-2"></i>Copy Project Link</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Share Project Modal -->

  <!-- Create App Modal -->
<div class="modal fade" id="createApp" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-simple modal-upgrade-plan">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center">
          <h4 class="mb-2">Create App</h4>
          <p class="mb-6">Provide data with this form to create your app.</p>
        </div>
        <!-- App Wizard -->
        <div id="wizard-create-app" class="bs-stepper vertical mt-2 shadow-none">
          <div class="bs-stepper-header border-0 p-1 pb-0">
            <div class="step" data-target="#details">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="icon-base bx bx-home"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title text-uppercase">Details</span>
                  <span class="bs-stepper-subtitle">Enter Details</span>
                </span>
              </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#frameworks">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="icon-base bx bx-box"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title text-uppercase">Frameworks</span>
                  <span class="bs-stepper-subtitle">Select Framework</span>
                </span>
              </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#database">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="icon-base bx bx-data"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title text-uppercase">Database</span>
                  <span class="bs-stepper-subtitle">Select Database</span>
                </span>
              </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#billing">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="icon-base bx bx-credit-card"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title text-uppercase">Billing</span>
                  <span class="bs-stepper-subtitle">Payment Details</span>
                </span>
              </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#submit">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="icon-base bx bx-check"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title text-uppercase">Submit</span>
                  <span class="bs-stepper-subtitle">Submit</span>
                </span>
              </button>
            </div>
          </div>
          <div class="bs-stepper-content p-1 pb-0">
            <form onSubmit="return false">
              <!-- Details -->
              <div id="details" class="content pt-4 pt-lg-0">
                <div class="mb-6">
                  <label for="exampleInputEmail1" class="form-label">Application Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Application Name" />
                </div>
                <h5>Category</h5>
                <ul class="p-0 m-0">
                  <li class="d-flex align-items-start mb-4">
                    <div class="badge bg-label-info p-2 me-3 rounded"><i class="icon-base bx bx-file icon-30px"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-1">CRM Application</h6>
                        <small>Scales with any business</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="details-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-start mb-4">
                    <div class="badge bg-label-success p-2 me-3 rounded"><i class="icon-base bx bx-cart icon-30px"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-1">eCommerce Platforms</h6>
                        <small>Grow Your Business With App</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="details-radio" class="form-check-input" type="radio" value="" checked />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-start">
                    <div class="badge bg-label-danger p-2 me-3 rounded"><i class="icon-base bx bx-laptop icon-30px"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-1">Online Learning platform</h6>
                        <small>Start learning today</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="details-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="col-12 d-flex justify-content-between mt-6">
                  <button class="btn btn-label-secondary btn-prev" disabled>
                    <i class="icon-base bx bx-left-arrow-alt icon-sm me-sm-2 me-0"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button class="btn btn-primary btn-next"><span class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i class="icon-base bx bx-right-arrow-alt icon-sm"></i></button>
                </div>
              </div>

              <!-- Frameworks -->
              <div id="frameworks" class="content pt-4 pt-lg-0">
                <h5>Select Framework</h5>
                <ul class="p-0 m-0">
                  <li class="d-flex align-items-start mb-4">
                    <div class="badge bg-label-info p-2 me-3 rounded"><i class="icon-base bx bxl-react icon-30px"></i></div>
                    <div class="d-flex justify-content-between w-100">
                      <div class="me-2">
                        <h6 class="mb-1">React Native</h6>
                        <small>Create truly native apps</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="frameworks-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-start mb-4">
                    <div class="badge bg-label-danger p-2 me-3 rounded"><i class="icon-base bx bxl-angular icon-30px"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-1">Angular</h6>
                        <small>Most suited for your application</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="frameworks-radio" class="form-check-input" type="radio" value="" checked="" />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-start mb-4">
                    <div class="badge bg-label-success p-2 me-3 rounded"><i class="icon-base bx bxl-vuejs icon-30px"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-1">Vue</h6>
                        <small>JS web frameworks</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="frameworks-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-start">
                    <div class="badge bg-label-warning p-2 me-3 rounded"><i class="icon-base bx bxl-html5 icon-30px"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-1">HTML</h6>
                        <small>Progressive Framework</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="frameworks-radio" class="form-check-input" type="radio" value="" checked />
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>

                <div class="col-12 d-flex justify-content-between mt-6">
                  <button class="btn btn-label-secondary btn-prev"><i class="icon-base bx bx-left-arrow-alt icon-sm me-sm-2 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span></button>
                  <button class="btn btn-primary btn-next"><span class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i class="icon-base bx bx-right-arrow-alt icon-sm"></i></button>
                </div>
              </div>

              <!-- Database -->
              <div id="database" class="content pt-4 pt-lg-0">
                <div class="mb-6">
                  <label for="exampleInputEmail2" class="form-label">Database Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Database Name" />
                </div>
                <h5>Select Database Engine</h5>
                <ul class="p-0 m-0">
                  <li class="d-flex align-items-start mb-4">
                    <div class="badge bg-label-danger p-2 me-3 rounded"><i class="icon-base bx bxl-firebase icon-30px"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-1">Firebase</h6>
                        <small>Cloud Firestone</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="database-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-start mb-4">
                    <div class="badge bg-label-warning p-2 me-3 rounded"><i class="icon-base bx bxl-amazon icon-30px"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-1">AWS</h6>
                        <small>Amazon Fast NoSQL Database</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="database-radio" class="form-check-input" type="radio" value="" checked />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-start">
                    <div class="badge bg-label-info p-2 me-3 rounded"><i class="icon-base bx bx-data icon-30px"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-1">MySQL</h6>
                        <small>Basic MySQL database</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="database-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="col-12 d-flex justify-content-between mt-6">
                  <button class="btn btn-label-secondary btn-prev"><i class="icon-base bx bx-left-arrow-alt icon-sm me-sm-2 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span></button>
                  <button class="btn btn-primary btn-next"><span class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i class="icon-base bx bx-right-arrow-alt icon-sm"></i></button>
                </div>
              </div>

              <!-- billing -->
              <div id="billing" class="content">
                <h5 class="mb-6">Payment Details</h5>
                <div id="AppNewCCForm" class="row g-6 mb-6" onsubmit="return false">
                  <div class="col-12">
                    <label for="modalAppCardNumber" class="form-label">Card Number</label>
                    <div class="input-group input-group-merge">
                      <input class="form-control app-credit-card-mask" type="text" placeholder="1356 3215 6548 7898" aria-describedby="modalAppAddCard" id="modalAppCardNumber" />
                      <span class="input-group-text cursor-pointer" id="modalAppAddCard"><span class="app-card-type"></span></span>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="modalAppUserName" class="form-label">Name on Card</label>
                    <input type="text" class="form-control" placeholder="John Doe" id="modalAppUserName" />
                  </div>
                  <div class="col-6 col-md-3">
                    <label for="modalAppExpiry" class="form-label">Expiry</label>
                    <input type="text" class="form-control app-expiry-date-mask" placeholder="MM/YY" id="modalAppExpiry" />
                  </div>
                  <div class="col-6 col-md-3">
                    <label for="modalAppAddCardCvv" class="form-label">CVV</label>
                    <div class="input-group input-group-merge">
                      <input type="text" id="modalAppAddCardCvv" class="form-control app-cvv-code-mask pe-0" maxlength="3" placeholder="654" />
                      <span class="input-group-text cursor-pointer" id="modalAppAddCardCvv2"><i class="text-body-secondary icon-base bx bx-help-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check form-switch my-2 ms-2">
                      <input type="checkbox" class="form-check-input" id="appFutureAddress" checked />
                      <label for="appFutureAddress" class="switch-label">Save card for future billing?</label>
                    </div>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-between mt-6">
                  <button class="btn btn-label-secondary btn-prev"><i class="icon-base bx bx-left-arrow-alt icon-sm me-sm-2 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span></button>
                  <button class="btn btn-primary btn-next"><span class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i class="icon-base bx bx-right-arrow-alt icon-sm"></i></button>
                </div>
              </div>

              <!-- submit -->
              <div id="submit" class="content text-center pt-4 pt-lg-0">
                <h5 class="mb-1">Submit</h5>
                <p class="small">Submit to kick start your project.</p>
                <!-- image -->
                <img src="{{ asset('sneat/img/illustrations/man-with-laptop.png') }}"" alt="Create App img" width="163" class="img-fluid" />
                <div class="col-12 d-flex justify-content-between mt-6">
                  <button class="btn btn-label-secondary btn-prev"><i class="icon-base bx bx-left-arrow-alt icon-sm me-sm-2 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span></button>
                  <button class="btn btn-success btn-next btn-submit" data-bs-dismiss="modal" aria-label="Close"><span class="align-middle">Submit</span></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--/ App Wizard -->
    </div>
  </div>
</div>
<!--/ Create App Modal -->

  <!-- Two Factor Auth Modal -->

<div class="modal fade" id="twoFactorAuth" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="mb-2">Select Authentication Method</h4>
          <p>You also need to select a method by which the proxy authenticates to the directory serve.</p>
        </div>
        <div class="row">
          <div class="col-12 mb-6">
            <div class="form-check custom-option custom-option-basic">
              <label class="form-check-label custom-option-content" for="customRadioTemp1" data-bs-target="#twoFactorAuthOne" data-bs-toggle="modal">
                <input name="customRadioTemp" class="form-check-input" type="radio" value="" id="customRadioTemp1" checked />
                <span class="custom-option-header">
                  <span class="h6 mb-0 d-flex align-items-center"><i class="icon-base bx bx-cog me-1"></i>Authenticator Apps</span>
                </span>
                <span class="custom-option-body">
                  <small>Get code from an app like Google Authenticator or Microsoft Authenticator.</small>
                </span>
              </label>
            </div>
          </div>
          <div class="col-12">
            <div class="form-check custom-option custom-option-basic">
              <label class="form-check-label custom-option-content" for="customRadioTemp2" data-bs-target="#twoFactorAuthTwo" data-bs-toggle="modal">
                <input name="customRadioTemp" class="form-check-input" type="radio" value="" id="customRadioTemp2" />
                <span class="custom-option-header">
                  <span class="h6 mb-0 d-flex align-items-center"><i class="icon-base bx bx-message me-1"></i>SMS</span>
                </span>
                <span class="custom-option-body">
                  <small>We will send a code via SMS if you need to use your backup login method.</small>
                </span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Authentication App -->
<div class="modal fade" id="twoFactorAuthOne" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="mb-0">Add Authenticator App</h4>
        </div>
        <h5 class="mb-2 text-break">Authenticator Apps</h5>
        <p class="mb-6">Using an authenticator app like Google Authenticator, Microsoft Authenticator, Authy, or 1Password, scan the QR code. It will generate a 6-digit code for you to enter below.</p>
        <div class="text-center">
          <img src="{{ asset('sneat/img/icons/misc/authentication-QR.png') }}"" alt="QR Code" width="150" />
        </div>
        <div class="alert alert-warning alert-dismissible mb-4 mt-6" role="alert">
          <h5 class="alert-heading mb-1 text-break">ASDLKNASDA9AHS678dGhASD78AB</h5>
          <p class="mb-0">If you're having trouble using the QR code, select manual entry on your app</p>
        </div>
        <div class="mb-6">
          <label for="twoFactorAuthInput" class="form-label">Enter Authentication Code</label>
          <input type="email" class="form-control" id="twoFactorAuthInput" name="twoFactorAuthInput" placeholder="123 456" />
        </div>
        <div class="text-end">
          <button type="button" class="btn btn-label-secondary me-3" data-bs-toggle="modal" data-bs-target="#twoFactorAuth"><span class="align-middle">Cancel</span></button>
          <button type="button" class="btn btn-success" data-bs-dismiss="modal" aria-label="Close"><span class="align-middle">Submit</span></button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Authentication via SMS -->
<div class="modal fade" id="twoFactorAuthTwo" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <h5 class="mb-2">Verify Your Mobile Number for SMS</h5>
        <p class="mb-6">Enter your mobile phone number with country code, and we will send you a verification code.</p>
        <div class="mb-6">
          <label for="twoFactorAuthInputSms" class="form-label">Phone number</label>
          <input type="text" class="form-control" id="twoFactorAuthInputSms" name="twoFactorAuthInputSms" placeholder="202 555 0111" />
        </div>
        <div class="text-end">
          <button type="button" class="btn btn-label-secondary me-3" data-bs-toggle="modal" data-bs-target="#twoFactorAuth"><span class="align-middle">Cancel</span></button>
          <button type="button" class="btn btn-success" data-bs-dismiss="modal" aria-label="Close"><span class="align-middle">Submit</span></button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Two Factor Auth Modal -->
<script>
  // Check selected custom option
  window.Helpers.initCustomOptionCheck();
</script>

  <!-- Payment provider modal -->
<div class="modal fade" id="paymentProvider" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-enable-otp modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="mb-2">Select payment providers</h4>
          <p>Third-party payment providers</p>
        </div>

        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between border-bottom py-4 mb-4">
          <h6 class="m-0 mb-2 mb-md-0 me-12">Adyen</h6>
          <div class="d-flex flex-wrap gap-4">
            <img src="{{ asset('sneat/img/icons/payments/visa-cc.png') }}"" class="img-fluid w-px-50 h-px-30 rounded" alt="visa-card" />
            <img src="{{ asset('sneat/img/icons/payments/mastercard-cc.png') }}"" class="img-fluid w-px-50 h-px-30 rounded" alt="master-card" />
            <img src="{{ asset('sneat/img/icons/payments/ae-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="american-express-card" data-app-light-img="icons/payments/ae-light.png" data-app-dark-img="icons/payments/ae-dark.png" />
            <img src="{{ asset('sneat/img/icons/payments/jcb-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="jcb-card" data-app-light-img="icons/payments/jcb-light.png" data-app-dark-img="icons/payments/jcb-dark.png" />
            <img src="{{ asset('sneat/img/icons/payments/dc-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="diners-club-card" data-app-light-img="icons/payments/dc-light.png" data-app-dark-img="icons/payments/dc-dark.png" />
          </div>
        </div>
        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between border-bottom pb-4 mb-4">
          <h6 class="m-0 mb-2 mb-md-0">2Checkout</h6>
          <div class="d-flex flex-wrap gap-4">
            <img src="{{ asset('sneat/img/icons/payments/visa-cc.png') }}"" class="img-fluid w-px-50 h-px-30 rounded" alt="visa-card" />
            <img src="{{ asset('sneat/img/icons/payments/ae-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="american-express-card" data-app-light-img="icons/payments/ae-light.png" data-app-dark-img="icons/payments/ae-dark.png" />
            <img src="{{ asset('sneat/img/icons/payments/jcb-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="jcb-card" data-app-light-img="icons/payments/jcb-light.png" data-app-dark-img="icons/payments/jcb-dark.png" />
            <img src="{{ asset('sneat/img/icons/payments/dc-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="diners-club-card" data-app-light-img="icons/payments/dc-light.png" data-app-dark-img="icons/payments/dc-dark.png" />
          </div>
        </div>
        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between border-bottom pb-4 mb-4">
          <h6 class="m-0 mb-2 mb-md-0">Airpay</h6>
          <div class="d-flex flex-wrap gap-4">
            <img src="{{ asset('sneat/img/icons/payments/visa-cc.png') }}"" class="img-fluid w-px-50 h-px-30 rounded" alt="visa-card" />
            <img src="{{ asset('sneat/img/icons/payments/ae-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="american-express-card" data-app-light-img="icons/payments/ae-light.png" data-app-dark-img="icons/payments/ae-dark.png" />
            <img src="{{ asset('sneat/img/icons/payments/mastercard-cc.png') }}"" class="img-fluid w-px-50 h-px-30 rounded" alt="master-card" />
            <img src="{{ asset('sneat/img/icons/payments/jcb-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="jcb-card" data-app-light-img="icons/payments/jcb-light.png" data-app-dark-img="icons/payments/jcb-dark.png" />
          </div>
        </div>
        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between border-bottom pb-4 mb-4">
          <h6 class="m-0 mb-2 mb-md-0">Authorize.net</h6>

          <div class="d-flex flex-wrap gap-4">
            <img src="{{ asset('sneat/img/icons/payments/ae-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="american-express-card" data-app-light-img="icons/payments/ae-light.png" data-app-dark-img="icons/payments/ae-dark.png" />
            <img src="{{ asset('sneat/img/icons/payments/jcb-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="jcb-card" data-app-light-img="icons/payments/jcb-light.png" data-app-dark-img="icons/payments/jcb-dark.png" />
            <img src="{{ asset('sneat/img/icons/payments/dc-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="diners-club-card" data-app-light-img="icons/payments/dc-light.png" data-app-dark-img="icons/payments/dc-dark.png" />
          </div>
        </div>
        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between border-bottom pb-4 mb-4">
          <h6 class="m-0 mb-2 mb-md-0">Bambora</h6>

          <div class="d-flex flex-wrap gap-4">
            <img src="{{ asset('sneat/img/icons/payments/mastercard-cc.png') }}"" class="img-fluid w-px-50 h-px-30 rounded" alt="master-card" />
            <img src="{{ asset('sneat/img/icons/payments/ae-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="american-express-card" data-app-light-img="icons/payments/ae-light.png" data-app-dark-img="icons/payments/ae-dark.png" />
            <img src="{{ asset('sneat/img/icons/payments/jcb-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="jcb-card" data-app-light-img="icons/payments/jcb-light.png" data-app-dark-img="icons/payments/jcb-dark.png" />
          </div>
        </div>
        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between border-bottom pb-4 mb-4">
          <h6 class="m-0 mb-2 mb-md-0">Cayan</h6>

          <div class="d-flex flex-wrap gap-4">
            <img src="{{ asset('sneat/img/icons/payments/visa-cc.png') }}"" class="img-fluid w-px-50 h-px-30 rounded" alt="visa-card" />
            <img src="{{ asset('sneat/img/icons/payments/mastercard-cc.png') }}"" class="img-fluid w-px-50 h-px-30 rounded" alt="master-card" />
            <img src="{{ asset('sneat/img/icons/payments/ae-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="american-express-card" data-app-light-img="icons/payments/ae-light.png" data-app-dark-img="icons/payments/ae-dark.png" />
            <img src="{{ asset('sneat/img/icons/payments/jcb-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="jcb-card" data-app-light-img="icons/payments/jcb-light.png" data-app-dark-img="icons/payments/jcb-dark.png" />
            <img src="{{ asset('sneat/img/icons/payments/dc-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="diners-club-card" data-app-light-img="icons/payments/dc-light.png" data-app-dark-img="icons/payments/dc-dark.png" />
          </div>
        </div>
        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between border-bottom pb-4 mb-4">
          <h6 class="m-0 mb-2 mb-md-0">Chase Paymentech (Orbital)</h6>

          <div class="d-flex flex-wrap gap-4">
            <img src="{{ asset('sneat/img/icons/payments/visa-cc.png') }}"" class="img-fluid w-px-50 h-px-30 rounded" alt="visa-card" />
            <img src="{{ asset('sneat/img/icons/payments/ae-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="american-express-card" data-app-light-img="icons/payments/ae-light.png" data-app-dark-img="icons/payments/ae-dark.png" />
            <img src="{{ asset('sneat/img/icons/payments/jcb-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="jcb-card" data-app-light-img="icons/payments/jcb-light.png" data-app-dark-img="icons/payments/jcb-dark.png" />
            <img src="{{ asset('sneat/img/icons/payments/dc-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="diners-club-card" data-app-light-img="icons/payments/dc-light.png" data-app-dark-img="icons/payments/dc-dark.png" />
          </div>
        </div>
        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between pb-4">
          <h6 class="m-0 mb-2 mb-md-0">Checkout.com</h6>
          <div class="d-flex flex-wrap gap-4">
            <img src="{{ asset('sneat/img/icons/payments/visa-cc.png') }}"" class="img-fluid w-px-50 h-px-30 rounded" alt="visa-card" />
            <img src="{{ asset('sneat/img/icons/payments/mastercard-cc.png') }}"" class="img-fluid w-px-50 h-px-30 rounded" alt="master-card" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / Payment provider modal -->

  <!-- Payment Methods modal -->
<div class="modal fade" id="paymentMethods" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-enable-otp modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="mb-2">Select payment methods</h4>
          <p>Supported payment methods</p>
        </div>

        <div class="d-flex justify-content-between align-items-center border-bottom py-4 mb-4">
          <div class="d-flex gap-4 align-items-center">
            <img src="{{ asset('sneat/img/icons/payments/visa-cc.png') }}"" class="img-fluid w-px-50 h-px-30 rounded" alt="visa-card" />

            <h6 class="m-0">Visa</h6>
          </div>
          <p class="m-0 d-none d-sm-block">Credit Card</p>
        </div>
        <div class="d-flex justify-content-sm-between align-items-center border-bottom pb-4 mb-4">
          <div class="d-flex gap-4 align-items-center">
            <img src="{{ asset('sneat/img/icons/payments/ae-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="american-express-card" data-app-light-img="icons/payments/ae-light.png" data-app-dark-img="icons/payments/ae-dark.png" />

            <h6 class="m-0">American Express</h6>
          </div>
          <p class="m-0 d-none d-sm-block">Credit Card</p>
        </div>
        <div class="d-flex justify-content-between align-items-center border-bottom pb-4 mb-4">
          <div class="d-flex gap-4 align-items-center">
            <img src="{{ asset('sneat/img/icons/payments/mastercard-cc.png') }}"" class="img-fluid w-px-50 h-px-30 rounded" alt="master-card" />

            <h6 class="m-0">Mastercard</h6>
          </div>
          <p class="m-0 d-none d-sm-block">Credit Card</p>
        </div>
        <div class="d-flex justify-content-between align-items-center border-bottom pb-4 mb-4">
          <div class="d-flex gap-4 align-items-center">
            <img src="{{ asset('sneat/img/icons/payments/jcb-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="jcb-card" data-app-light-img="icons/payments/jcb-light.png" data-app-dark-img="icons/payments/jcb-dark.png" />
            <h6 class="m-0">JCB</h6>
          </div>
          <p class="m-0 d-none d-sm-block">Credit Card</p>
        </div>
        <div class="d-flex justify-content-between align-items-center pb-4">
          <div class="d-flex gap-4 align-items-center">
            <img src="{{ asset('sneat/img/icons/payments/dc-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="diners-club-card" data-app-light-img="icons/payments/dc-light.png" data-app-dark-img="icons/payments/dc-dark.png" />
            <h6 class="m-0">Diners Club</h6>
          </div>
          <p class="m-0 d-none d-sm-block">Credit Card</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / Payment Methods modal -->
@endsection

@push('scripts')
<script src="{{ asset('sneat/vendor/libs/cleave-zen/cleave-zen.js') }}"></script>
<script src="{{ asset('sneat/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('sneat/vendor/libs/@form-validation/popular.js') }}"></script>
<script src="{{ asset('sneat/vendor/libs/@form-validation/bootstrap5.js') }}"></script>
<script src="{{ asset('sneat/vendor/libs/@form-validation/auto-focus.js') }}"></script>
<script src="{{ asset('sneat/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
<script src="{{ asset('sneat/js/pages-pricing.js') }}"></script>
<script src="{{ asset('sneat/js/modal-create-app.js') }}"></script>
<script src="{{ asset('sneat/js/modal-add-new-cc.js') }}"></script>
<script src="{{ asset('sneat/js/modal-add-new-address.js') }}"></script>
<script src="{{ asset('sneat/js/modal-edit-user.js') }}"></script>
<script src="{{ asset('sneat/js/modal-enable-otp.js') }}"></script>
<script src="{{ asset('sneat/js/modal-share-project.js') }}"></script>
<script src="{{ asset('sneat/js/modal-two-factor-auth.js') }}"></script>
<script src="https://static.cloudflareinsights.com/beacon.min.js/vce701823e78c4301a35b7e07294d87301792088814092"></script>
@endpush
