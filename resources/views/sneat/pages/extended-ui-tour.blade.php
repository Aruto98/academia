@extends('layouts.app')

@section('title', 'Shepherd tour - Extended UI')

@push('styles')
<link rel="stylesheet" href="{{ asset('sneat/vendor/libs/shepherd/shepherd.css') }}"" />
@endpush

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card tour-card">
        <h5 class="card-header">Tour</h5>
        <div class="card-body">
          <button class="btn btn-primary" id="shepherd-example">Start tour</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<script src="{{ asset('sneat/vendor/libs/shepherd/shepherd.js') }}"></script>
<script src="{{ asset('sneat/js/extended-ui-tour.js') }}"></script>
<script src="https://static.cloudflareinsights.com/beacon.min.js/vce701823e78c4301a35b7e07294d87301792088814092"></script>
@endpush
