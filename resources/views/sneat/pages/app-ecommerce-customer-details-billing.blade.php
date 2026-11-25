@extends('layouts.app')

@section('title', 'eCommerce Customer Details Address &amp; Billing - Pages')

@push('styles')
<link rel="stylesheet" href="{{ asset('sneat/vendor/libs/sweetalert2/sweetalert2.css') }}"" />
<link rel="stylesheet" href="{{ asset('sneat/vendor/libs/select2/select2.css') }}"" />
<link rel="stylesheet" href="{{ asset('sneat/vendor/libs/@form-validation/form-validation.css') }}"" />
@endpush

@section('content')
<div class="d-flex flex-column flex-sm-row align-items-center justify-content-sm-between mb-6 text-center text-sm-start gap-2">
    <div class="mb-2 mb-sm-0">
      <h4 class="mb-1">Customer ID #634759</h4>
      <p class="mb-0">Aug 17, 2020, 5:48 (ET)</p>
    </div>
    <button type="button" class="btn btn-label-danger delete-customer">Delete Customer</button>
  </div>

  <div class="row">
    <!-- Customer-detail Sidebar -->
    <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
      <!-- Customer-detail Card -->
      <div class="card mb-6">
        <div class="card-body pt-12">
          <div class="customer-avatar-section">
            <div class="d-flex align-items-center flex-column">
              <img class="img-fluid rounded mb-4" src="{{ asset('sneat/img/avatars/1.png') }}"" height="120" width="120" alt="User avatar" />
              <div class="customer-info text-center mb-6">
                <h5 class="mb-0">Lorine Hischke</h5>
                <span>Customer ID #634759</span>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-around flex-wrap mb-6 gap-0 gap-md-3 gap-lg-4">
            <div class="d-flex align-items-center gap-4 me-5">
              <div class="avatar">
                <div class="avatar-initial rounded bg-label-primary"><i class="icon-base bx bx-cart icon-lg"></i></div>
              </div>
              <div>
                <h5 class="mb-0">184</h5>
                <span>Orders</span>
              </div>
            </div>
            <div class="d-flex align-items-center gap-4">
              <div class="avatar">
                <div class="avatar-initial rounded bg-label-primary"><i class="icon-base bx bx-dollar icon-lg"></i></div>
              </div>
              <div>
                <h5 class="mb-0">$12,378</h5>
                <span>Spent</span>
              </div>
            </div>
          </div>

          <div class="info-container">
            <h5 class="pb-4 border-bottom text-capitalize mt-6 mb-4">Details</h5>
            <ul class="list-unstyled mb-6">
              <li class="mb-2">
                <span class="h6 me-1">Username:</span>
                <span>lorine.hischke</span>
              </li>
              <li class="mb-2">
                <span class="h6 me-1">Email:</span>
                <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b7c1d6d1d0d8c3f7c1c2dbc3c2dcdec599d8c5d0">[email&#160;protected]</a></span>
              </li>
              <li class="mb-2">
                <span class="h6 me-1">Status:</span>
                <span class="badge bg-label-success">Active</span>
              </li>
              <li class="mb-2">
                <span class="h6 me-1">Contact:</span>
                <span>(123) 456-7890</span>
              </li>

              <li class="mb-2">
                <span class="h6 me-1">Country:</span>
                <span>USA</span>
              </li>
            </ul>
            <div class="d-flex justify-content-center">
              <a href="javascript:;" class="btn btn-primary w-100" data-bs-target="#editUser" data-bs-toggle="modal">Edit Details</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /Customer-detail Card -->
      <!-- Plan Card -->

      <div class="card mb-4 bg-gradient-primary">
        <div class="card-body">
          <div class="row justify-content-between mb-4">
            <div class="col-md-12 col-lg-7 col-xl-12 col-xxl-7 text-center text-lg-start text-xl-center text-xxl-start order-1 order-lg-0 order-xl-1 order-xxl-0">
              <h5 class="card-title text-white text-nowrap mb-4">Upgrade to premium</h5>
              <p class="card-text text-white">Upgrade customer to premium membership to access pro features.</p>
            </div>
            <span class="col-md-12 col-lg-5 col-xl-12 col-xxl-5 text-center mx-auto mx-md-0 mb-2"><img src="{{ asset('sneat/img/illustrations/rocket.png') }}"" class="w-px-75 m-2" alt="3dRocket" /></span>
          </div>
          <button class="btn btn-white text-primary w-100 fw-medium shadow-xs" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Upgrade to premium</button>
        </div>
      </div>

      <!-- /Plan Card -->
    </div>
    <!--/ Customer Sidebar -->

    <!-- Customer Content -->
    <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
      <!-- Customer Pills -->
      <div class="nav-align-top">
        <ul class="nav nav-pills flex-column flex-md-row mb-6 row-gap-2 flex-wrap">
          <li class="nav-item">
            <a class="nav-link" href="app-ecommerce-customer-details-overview.html"><i class="icon-base bx bx-user icon-18px me-1_5"></i>Overview</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="app-ecommerce-customer-details-security.html"><i class="icon-base bx bx-lock icon-18px me-1_5"></i>Security</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="javascript:void(0);"><i class="icon-base bx bx-map icon-18px me-1_5"></i>Address & Billing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="app-ecommerce-customer-details-notifications.html"><i class="icon-base bx bx-bell icon-18px me-1_5"></i>Notifications</a>
          </li>
        </ul>
      </div>
      <!--/ Customer Pills -->

      <!-- Address accordion -->

      <div class="card card-action mb-6">
        <div class="card-header align-items-center py-6">
          <h5 class="card-action-title mb-0">Address Book</h5>
          <div class="card-action-element">
            <button class="btn btn-sm btn-label-primary" type="button" data-bs-toggle="modal" data-bs-target="#addNewAddress">Add new address</button>
          </div>
        </div>
        <div class="card-body">
          <div class="accordion accordion-flush accordion-arrow-left" id="ecommerceBillingAccordionAddress">
            <div class="accordion-item border-bottom">
              <div class="accordion-header d-flex justify-content-between align-items-center flex-wrap flex-sm-nowrap" id="headingHome">
                <a class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#ecommerceBillingAddressHome" aria-expanded="false" aria-controls="headingHome" role="button">
                  <span>
                    <span class="d-flex gap-2 align-items-baseline">
                      <span class="h6 mb-1">Home</span>
                      <span class="badge bg-label-success">Default Address</span>
                    </span>
                    <span class="mb-0 text-body">23 Shatinon Mekalan</span>
                  </span>
                </a>
                <div class="d-flex gap-4 p-6 p-sm-0 pt-0 ms-1 ms-sm-0">
                  <a href="javascript:void(0);"><i class="icon-base bx bx-edit icon-md text-body"></i></a>
                  <a href="javascript:void(0);"><i class="icon-base bx bx-trash icon-md text-body"></i></a>
                  <button class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false" role="button"><i class="icon-base bx bx-dots-vertical-rounded icon-md text-body"></i></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:void(0);">Set as default address</a></li>
                  </ul>
                </div>
              </div>
              <div id="ecommerceBillingAddressHome" class="accordion-collapse collapse" data-bs-parent="#ecommerceBillingAccordionAddress">
                <div class="accordion-body ps-8 ms-1_5">
                  <h6 class="mb-1">Violet Mendoza</h6>
                  <p class="mb-1">23 Shatinon Mekalan,</p>
                  <p class="mb-1">Melbourne, VIC 3000,</p>
                  <p class="mb-1">LondonUK</p>
                </div>
              </div>
            </div>

            <div class="accordion-item border-bottom border-top-0">
              <div class="accordion-header d-flex justify-content-between align-items-center flex-wrap flex-sm-nowrap" id="headingOffice">
                <a class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#ecommerceBillingAddressOffice" aria-expanded="false" aria-controls="headingOffice" role="button">
                  <span class="d-flex flex-column">
                    <span class="h6 mb-0">Office</span>
                    <span class="mb-0 text-body">45 Roker Terrace</span>
                  </span>
                </a>
                <div class="d-flex gap-4 p-6 p-sm-0 pt-0 ms-1 ms-sm-0">
                  <a href="javascript:void(0);"><i class="icon-base bx bx-edit icon-md text-body"></i></a>
                  <a href="javascript:void(0);"><i class="icon-base bx bx-trash icon-md text-body"></i></a>
                  <button class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false" role="button"><i class="icon-base bx bx-dots-vertical-rounded icon-md text-body"></i></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:void(0);">Set as default address</a></li>
                  </ul>
                </div>
              </div>
              <div id="ecommerceBillingAddressOffice" class="accordion-collapse collapse" aria-labelledby="headingOffice" data-bs-parent="#ecommerceBillingAccordionAddress">
                <div class="accordion-body ps-8 ms-1_5">
                  <h6 class="mb-1">Violet Mendoza</h6>
                  <p class="mb-1">45 Roker Terrace,</p>
                  <p class="mb-1">Latheronwheel,</p>
                  <p class="mb-1">KW5 8NW</p>
                  <p class="mb-1">LondonUK</p>
                </div>
              </div>
            </div>

            <div class="accordion-item border-top-0">
              <div class="accordion-header d-flex justify-content-between align-items-center flex-wrap flex-sm-nowrap" id="headingFamily">
                <a class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#ecommerceBillingAddressFamily" aria-expanded="false" aria-controls="headingFamily" role="button">
                  <span class="d-flex flex-column">
                    <span class="h6 mb-0">Family</span>
                    <span class="mb-0 text-body">512 Water Plant</span>
                  </span>
                </a>
                <div class="d-flex gap-4 p-6 p-sm-0 pt-0 ms-1 ms-sm-0">
                  <a href="javascript:void(0);"><i class="icon-base bx bx-edit icon-md text-body"></i></a>
                  <a href="javascript:void(0);"><i class="icon-base bx bx-trash icon-md text-body"></i></a>
                  <button class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false" role="button"><i class="icon-base bx bx-dots-vertical-rounded icon-md text-body"></i></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:void(0);">Set as default address</a></li>
                  </ul>
                </div>
              </div>
              <div id="ecommerceBillingAddressFamily" class="accordion-collapse collapse" aria-labelledby="headingFamily" data-bs-parent="#ecommerceBillingAccordionAddress">
                <div class="accordion-body ps-8 ms-1_5">
                  <h6 class="mb-1">Violet Mendoza</h6>
                  <p class="mb-1">512 Water Plant,</p>
                  <p class="mb-1">Melbourne, NY 10036,</p>
                  <p class="mb-1">New York,</p>
                  <p class="mb-1">United States</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Address accordion -->

      <!-- payment accordion -->
      <div class="card card-action mb-6">
        <div class="card-header align-items-center py-6">
          <h5 class="card-action-title mb-0">Payment Methods</h5>
          <div class="card-action-element">
            <button class="btn btn-sm btn-label-primary" type="button" data-bs-toggle="modal" data-bs-target="#addNewCCModal">Add payment methods</button>
          </div>
        </div>
        <div class="card-body">
          <div class="accordion accordion-flush accordion-arrow-left" id="ecommerceBillingAccordionPayment">
            <div class="accordion-item border-bottom">
              <div class="accordion-header d-flex justify-content-between align-items-center flex-wrap flex-sm-nowrap" id="headingPaymentMaster">
                <a class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#ecommerceBillingPaymentMaster" aria-expanded="false" aria-controls="headingPaymentMaster" role="button">
                  <span class="accordion-button-information d-flex align-items-center gap-4">
                    <span class="accordion-button-image">
                      <img src="{{ asset('sneat/img/icons/payments/master-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="master-card" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png" />
                    </span>
                    <span class="d-flex flex-column">
                      <span class="h6 mb-1">Mastercard</span>
                      <span class="mb-0">Expires Apr 2028</span>
                    </span>
                  </span>
                </a>
                <div class="d-flex gap-4 p-6 p-sm-0 pt-0 ms-1 ms-sm-0">
                  <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editCCModal"><i class="icon-base bx bx-edit icon-md text-body"></i></a>
                  <a href="javascript:void(0);"><i class="icon-base bx bx-trash icon-md text-body"></i></a>
                  <button class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false" role="button"><i class="icon-base bx bx-dots-vertical-rounded icon-md text-body"></i></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:void(0);">Set as Primary</a></li>
                  </ul>
                </div>
              </div>
              <div id="ecommerceBillingPaymentMaster" class="accordion-collapse collapse" data-bs-parent="#ecommerceBillingAccordionPayment">
                <div class="accordion-body d-flex align-items-baseline flex-wrap flex-xl-nowrap flex-sm-nowrap flex-md-wrap">
                  <table class="table table-sm table-borderless text-nowrap small">
                    <tr>
                      <td class="w-50">Name</td>
                      <td class="fw-medium text-heading">Violet Mendoza</td>
                    </tr>
                    <tr>
                      <td>Number</td>
                      <td class="fw-medium text-heading">**** 4487</td>
                    </tr>
                    <tr>
                      <td>Expires</td>
                      <td class="fw-medium text-heading">04/2028</td>
                    </tr>
                    <tr>
                      <td>Type</td>
                      <td class="fw-medium text-heading">Visa credit card</td>
                    </tr>
                    <tr>
                      <td>Issuer</td>
                      <td class="fw-medium text-heading">VICBANK</td>
                    </tr>
                    <tr>
                      <td>ID</td>
                      <td class="fw-medium text-heading">id_w2r84jdy723</td>
                    </tr>
                  </table>
                  <table class="table table-sm table-borderless text-nowrap">
                    <tr>
                      <td class="w-50">Billing Phone</td>
                      <td class="fw-medium text-heading">USA</td>
                    </tr>
                    <tr>
                      <td>Number</td>
                      <td class="fw-medium text-heading">+7634 983 637</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td class="fw-medium text-heading"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c4b2a5a2a3abb084b2b1a8b0b1afadb6eaabb6a3">[email&#160;protected]</a></td>
                    </tr>
                    <tr>
                      <td>Origin</td>
                      <td class="fw-medium text-heading d-flex align-items-center gap-2">United States <i class="icon-base fis fi fi-us rounded-circle me-2 icon-sm"> </i></td>
                    </tr>
                    <tr>
                      <td>CVC check</td>
                      <td class="fw-medium text-heading d-flex align-items-center gap-2">
                        Passed <span class="badge bg-label-success rounded-pill p-0"><i class="icon-base bx bx-check icon-xs"></i></span>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>

            <div class="accordion-item border-bottom border-top-0">
              <div class="accordion-header d-flex justify-content-between align-items-center flex-wrap flex-sm-nowrap" id="headingPaymentExpress">
                <a class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#ecommerceBillingPaymentExpress" aria-expanded="false" aria-controls="headingPaymentExpress" role="button">
                  <span class="accordion-button-information d-flex align-items-center gap-4">
                    <span class="accordion-button-image">
                      <img src="{{ asset('sneat/img/icons/payments/ae-light.png') }}"" class="img-fluid w-px-50 h-px-30" alt="american-express-card" data-app-light-img="icons/payments/ae-light.png" data-app-dark-img="icons/payments/ae-dark.png" />
                    </span>
                    <span>
                      <span class="d-flex gap-2 row-gap-0 flex-wrap align-items-baseline">
                        <span class="h6 mb-1 text-nowrap">American Express</span>
                        <span class="badge bg-label-success mb-2 mb-sm-0">Primary</span>
                      </span>
                      <span class="mb-0">45 Roker Terrace</span>
                    </span>
                  </span>
                </a>
                <div class="d-flex gap-4 p-6 p-sm-0 pt-0 ms-1 ms-sm-0">
                  <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editCCModal"><i class="icon-base bx bx-edit icon-md text-body"></i></a>
                  <a href="javascript:void(0);"><i class="icon-base bx bx-trash icon-md text-body"></i></a>
                  <button class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false" role="button"><i class="icon-base bx bx-dots-vertical-rounded icon-md text-body"></i></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:void(0);">Set as Primary</a></li>
                  </ul>
                </div>
              </div>
              <div id="ecommerceBillingPaymentExpress" class="accordion-collapse collapse" aria-labelledby="headingPaymentExpress" data-bs-parent="#ecommerceBillingAccordionPayment">
                <div class="accordion-body d-flex align-items-baseline flex-wrap flex-xl-nowrap flex-sm-nowrap flex-md-wrap">
                  <table class="table table-sm table-borderless text-nowrap small">
                    <tr>
                      <td class="w-50">Name</td>
                      <td class="fw-medium text-heading">Violet Mendoza</td>
                    </tr>
                    <tr>
                      <td>Number</td>
                      <td class="fw-medium text-heading">**** 4487</td>
                    </tr>
                    <tr>
                      <td>Expires</td>
                      <td class="fw-medium text-heading">08/2028</td>
                    </tr>
                    <tr>
                      <td>Type</td>
                      <td class="fw-medium text-heading">Visa credit card</td>
                    </tr>
                    <tr>
                      <td>Issuer</td>
                      <td class="fw-medium text-heading">VICBANK</td>
                    </tr>
                    <tr>
                      <td>ID</td>
                      <td class="fw-medium text-heading">id_w2r84jdy723</td>
                    </tr>
                  </table>
                  <table class="table table-sm table-borderless text-nowrap">
                    <tr>
                      <td class="w-50">Billing Phone</td>
                      <td class="fw-medium text-heading">USA</td>
                    </tr>
                    <tr>
                      <td>Number</td>
                      <td class="fw-medium text-heading">+7634 983 637</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td class="fw-medium text-heading"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="087e696e6f677c487e7d647c7d63617a26677a6f">[email&#160;protected]</a></td>
                    </tr>
                    <tr>
                      <td>Origin</td>
                      <td class="fw-medium text-heading d-flex align-items-center gap-2">United States <i class="icon-base fis fi fi-us rounded-circle me-2 icon-sm"> </i></td>
                    </tr>
                    <tr>
                      <td>CVC check</td>
                      <td class="fw-medium text-heading d-flex align-items-center gap-2">
                        Passed <span class="badge bg-label-success rounded-pill p-0"><i class="icon-base bx bx-check icon-xs"></i></span>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>

            <div class="accordion-item border-top-0">
              <div class="accordion-header d-flex justify-content-between align-items-center flex-wrap flex-sm-nowrap" id="headingPaymentVisa">
                <a class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#ecommerceBillingPaymentVisa" aria-expanded="false" aria-controls="headingPaymentVisa" role="button">
                  <span class="accordion-button-information d-flex align-items-center gap-4">
                    <span class="accordion-button-image">
                      <img src="{{ asset('sneat/img/icons/payments/visa-cc.png') }}"" class="img-fluid w-px-50 h-px-30" alt="visa-card" />
                    </span>
                    <span class="d-flex flex-column">
                      <span class="h6 mb-1">Visa</span>
                      <span class="mb-0">512 Water Plant</span>
                    </span>
                  </span>
                </a>
                <div class="d-flex gap-4 p-6 p-sm-0 pt-0 ms-1 ms-sm-0">
                  <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editCCModal"><i class="icon-base bx bx-edit icon-md text-body"></i></a>
                  <a href="javascript:void(0);"><i class="icon-base bx bx-trash icon-md text-body"></i></a>
                  <button class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false" role="button"><i class="icon-base bx bx-dots-vertical-rounded icon-md text-body"></i></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:void(0);">Set as Primary</a></li>
                  </ul>
                </div>
              </div>
              <div id="ecommerceBillingPaymentVisa" class="accordion-collapse collapse" aria-labelledby="headingPaymentVisa" data-bs-parent="#ecommerceBillingAccordionPayment">
                <div class="accordion-body d-flex align-items-baseline flex-wrap flex-xl-nowrap flex-sm-nowrap flex-md-wrap">
                  <table class="table table-sm table-borderless text-nowrap small">
                    <tr>
                      <td class="w-50">Name</td>
                      <td class="fw-medium text-heading">Violet Mendoza</td>
                    </tr>
                    <tr>
                      <td>Number</td>
                      <td class="fw-medium text-heading">**** 5155</td>
                    </tr>
                    <tr>
                      <td>Expires</td>
                      <td class="fw-medium text-heading">02/2022</td>
                    </tr>
                    <tr>
                      <td>Type</td>
                      <td class="fw-medium text-heading">Visa credit card</td>
                    </tr>
                    <tr>
                      <td>Issuer</td>
                      <td class="fw-medium text-heading">VICBANK</td>
                    </tr>
                    <tr>
                      <td>ID</td>
                      <td class="fw-medium text-heading">id_w2r84jdy723</td>
                    </tr>
                  </table>
                  <table class="table table-sm table-borderless text-nowrap">
                    <tr>
                      <td class="w-50">Billing Phone</td>
                      <td class="fw-medium text-heading">USA</td>
                    </tr>
                    <tr>
                      <td>Number</td>
                      <td class="fw-medium text-heading">+7634 983 637</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td class="fw-medium text-heading"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d7a1b6b1b0b8a397a1a2bba3a2bcbea5f9b8a5b0">[email&#160;protected]</a></td>
                    </tr>
                    <tr>
                      <td>Origin</td>
                      <td class="fw-medium text-heading d-flex align-items-center gap-2">United States <i class="icon-base fis fi fi-us rounded-circle me-2 icon-sm"> </i></td>
                    </tr>
                    <tr>
                      <td>CVC check</td>
                      <td class="fw-medium text-heading d-flex align-items-center gap-2">
                        Passed <span class="badge bg-label-success rounded-pill p-0"><i class="icon-base bx bx-check icon-xs"></i></span>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Customer Content -->
  </div>

  <!-- Modal -->
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

  <!-- Add New Credit Card Modal -->
<div class="modal fade" id="editCCModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-simple modal-add-new-cc">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h2>Edit Card</h2>
          <p class="text-body-secondary">Edit your saved card details</p>
        </div>
        <form id="editCCForm" class="row g-3" onsubmit="return false">
          <div class="col-12 form-control-validation">
            <label class="form-label w-100" for="modalEditCard">Card Number</label>
            <div class="input-group input-group-merge">
              <input id="modalEditCard" name="modalEditCard" class="form-control credit-card-mask-edit" type="text" placeholder="4356 3215 6548 7898" value="4356 3215 6548 7898" aria-describedby="modalEditCard2" />
              <span class="input-group-text cursor-pointer" id="modalEditCard2">
                <span class="card-type-edit"><img src="{{ asset('sneat/img/icons/payments/visa-cc.png') }}"" height="20" alt="credit-card img" /></span>
              </span>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditName">Name</label>
            <input type="text" id="modalEditName" class="form-control" placeholder="John Doe" value="John Doe" />
          </div>
          <div class="col-6 col-md-3">
            <label class="form-label" for="modalEditExpiryDate">Exp. Date</label>
            <input type="text" id="modalEditExpiryDate" class="form-control expiry-date-mask-edit" placeholder="MM/YY" value="08/28" />
          </div>
          <div class="col-6 col-md-3">
            <label class="form-label" for="modalEditCvv">CVV Code</label>
            <div class="input-group input-group-merge">
              <input type="text" id="modalEditCvv" class="form-control cvv-code-mask-edit" maxlength="3" placeholder="654" value="XXX" />
              <span class="input-group-text cursor-pointer" id="modalEditCvv2"><i class="icon-base bx bx-help-circle text-body-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
            </div>
          </div>
          <div class="col-12">
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" id="editPrimaryCard" />
              <label for="editPrimaryCard">Set as primary card</label>
            </div>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-4 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
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

  <!-- Add New Credit Card Modal -->
<div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="mb-2">Upgrade Plan</h4>
          <p>Choose the best plan for user.</p>
        </div>
        <form id="upgradePlanForm" class="row g-4" onsubmit="return false">
          <div class="col-sm-9">
            <label class="form-label" for="choosePlan">Choose Plan</label>
            <select id="choosePlan" name="choosePlan" class="form-select" aria-label="Choose Plan">
              <option selected>Choose Plan</option>
              <option value="standard">Standard - $99/month</option>
              <option value="exclusive">Exclusive - $249/month</option>
              <option value="Enterprise">Enterprise - $499/month</option>
            </select>
          </div>
          <div class="col-sm-3 d-flex align-items-end">
            <button type="submit" class="btn btn-primary">Upgrade</button>
          </div>
        </form>
      </div>
      <hr class="mx-5 my-2" />
      <div class="modal-body">
        <p class="mb-0">User current plan is standard plan</p>
        <div class="d-flex justify-content-between align-items-center flex-wrap">
          <div class="d-flex justify-content-center me-2 mt-1">
            <sup class="h6 pricing-currency pt-1 mt-2 mb-0 me-1 text-primary fw-normal">$</sup>
            <h1 class="mb-0 text-primary">99</h1>
            <sub class="pricing-duration mt-auto mb-5 pb-1 small text-body">/month</sub>
          </div>
          <button class="btn btn-label-danger cancel-subscription">Cancel Subscription</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Credit Card Modal -->

  <!-- /Modal -->
@endsection

@push('scripts')
<script src="{{ asset('sneat/vendor/libs/moment/moment.js') }}"></script>
<script src="{{ asset('sneat/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
<script src="{{ asset('sneat/vendor/libs/cleave-zen/cleave-zen.js') }}"></script>
<script src="{{ asset('sneat/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('sneat/vendor/libs/@form-validation/popular.js') }}"></script>
<script src="{{ asset('sneat/vendor/libs/@form-validation/bootstrap5.js') }}"></script>
<script src="{{ asset('sneat/vendor/libs/@form-validation/auto-focus.js') }}"></script>
<script src="{{ asset('sneat/js/modal-edit-user.js') }}"></script>
<script src="{{ asset('sneat/js/modal-edit-cc.js') }}"></script>
<script src="{{ asset('sneat/js/modal-add-new-cc.js') }}"></script>
<script src="{{ asset('sneat/js/modal-add-new-address.js') }}"></script>
<script src="{{ asset('sneat/js/app-ecommerce-customer-detail.js') }}"></script>
<script src="https://static.cloudflareinsights.com/beacon.min.js/vce701823e78c4301a35b7e07294d87301792088814092"></script>
@endpush
