@extends('layouts.app')

@section('title', 'Star Ratings - Extended UI')

@push('styles')
<link rel="stylesheet" href="{{ asset('sneat/vendor/libs/raty-js/raty-js.css') }}"" />
@endpush

@section('content')
<div class="row gy-6">
    <!-- Basic-->
    <div class="col-xxl-3 col-sm-6 col-12">
      <div class="card">
        <h5 class="card-header">Basic</h5>
        <div class="card-body">
          <div class="basic-ratings raty" data-score="3" data-number="5"></div>
        </div>
      </div>
    </div>
    <!-- /Basic-->

    <!-- Read Only-->
    <div class="col-xxl-3 col-sm-6 col-12">
      <div class="card">
        <h5 class="card-header">Read Only</h5>
        <div class="card-body">
          <div class="read-only-ratings raty" data-read-only="true" data-score="3" data-number="5"></div>
        </div>
      </div>
    </div>
    <!-- /Read Only-->

    <!-- Half Star-->
    <div class="col-xxl-3 col-sm-6 col-12">
      <div class="card">
        <h5 class="card-header">Half Star</h5>
        <div class="card-body">
          <div class="half-star-ratings raty" data-half="true" data-score="3.5" data-number="5"></div>
        </div>
      </div>
    </div>
    <!-- /Half Star-->

    <!-- Custom SVG-->
    <div class="col-xxl-3 col-sm-6 col-12">
      <div class="card">
        <h5 class="card-header">Custom SVG</h5>
        <div class="card-body">
          <div class="custom-svg-ratings raty" data-score="2" data-number="5"></div>
        </div>
      </div>
    </div>
    <!-- /Custom SVG-->

    <!-- Events-->
    <div class="col-xl-6 col-12">
      <div class="card">
        <h5 class="card-header">Events</h5>
        <div class="card-body">
          <div class="row gy-3">
            <div class="col-md d-flex flex-column align-items-start mb-sm-0 mb-4">
              <small class="fw-medium">onSet Event</small>
              <div class="onset-event-ratings raty" data-score="3" data-number="5" data-half="true"></div>
            </div>
            <div class="col-md d-flex flex-column align-items-start">
              <small class="fw-medium">onChange Event</small>
              <div class="onChange-event-ratings raty mb-4" data-score="0" data-number="5" data-half="true"></div>
              <div class=" counter-wrapper">
                <span class="fw-medium">Ratings:</span>
                <span class="counter">0</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Events-->

    <!-- Methods-->
    <div class="col-xl-6 col-12">
      <div class="card">
        <h5 class="card-header">Methods</h5>
        <div class="card-body">
          <div class="methods-ratings raty" data-number="5"></div>
          <div class="demo-inline-spacing">
            <button class="btn btn-primary btn-initialize">Initialize</button>
            <button class="btn btn-danger btn-destroy">Destroy</button>
            <button class="btn btn-success btn-get-rating">Get Ratings</button>
            <button class="btn btn-info btn-set-rating">Set Ratings to 1</button>
          </div>
        </div>
      </div>
    </div>
    <!-- /Methods-->

    <div class="col">
      <hr class="my-6" />
    </div>
    <h5>Rating with icons</h5>
    <!-- icon Star-->
    <div class="col-xxl-3 col-sm-6 col-12">
      <div class="card">
        <h5 class="card-header">Basic</h5>
        <div class="card-body">
          <div class="icon-star-ratings" data-score="3" data-number="5"></div>
        </div>
      </div>
    </div>
    <!-- /icon Star-->

    <!-- colour variants-->
    <div class="col-xxl-9 col-md-6 col-12">
      <div class="card">
        <h5 class="card-header">colour variants</h5>
        <div class="card-body d-flex flex-wrap gap-6 gap-lg-12">
          <div class="icon-star-primary-ratings" data-score="1" data-number="5"></div>
          <div class="icon-star-warning-ratings" data-score="2" data-number="5"></div>
          <div class="icon-star-success-ratings" data-score="3" data-number="5"></div>
          <div class="icon-star-danger-ratings" data-score="4" data-number="5"></div>
        </div>
      </div>
    </div>
    <!-- /colour variants-->

    <!-- size variants-->
    <div class="col-xxl-3 col-md-6 col-12">
      <div class="card">
        <h5 class="card-header">size variants</h5>
        <div class="card-body">
          <div class="icon-star-sm-ratings" data-score="1" data-number="5"></div>
          <div class="icon-star-md-ratings" data-score="2" data-number="5"></div>
          <div class="icon-star-lg-ratings" data-score="3" data-number="5"></div>
        </div>
      </div>
    </div>
    <!-- /size variants-->
  </div>
@endsection

@push('scripts')
<script src="{{ asset('sneat/vendor/libs/raty-js/raty-js.js') }}"></script>
<script src="{{ asset('sneat/js/extended-ui-star-ratings.js') }}"></script>
<script src="https://static.cloudflareinsights.com/beacon.min.js/vce701823e78c4301a35b7e07294d87301792088814092"></script>
@endpush
