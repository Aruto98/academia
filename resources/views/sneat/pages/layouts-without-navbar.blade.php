@extends('layouts.app')

@section('title', 'Without navbar - Layouts')

@section('content')
<!-- Layout Demo -->
<div class="layout-demo-wrapper">
  <div class="layout-demo-placeholder">
    <img src="{{ asset('sneat/img/layouts/layout-without-navbar-light.png') }}"" class="img-fluid" alt="Layout without navbar" data-app-light-img="layouts/layout-without-navbar-light.png" data-app-dark-img="layouts/layout-without-navbar-dark.png" />
  </div>
  <div class="layout-demo-info">
    <h4>Layout without Navbar</h4>
    <p>Layout does not contain Navbar component.</p>
  </div>
</div>
<!--/ Layout Demo -->
@endsection

@push('scripts')
<script src="https://static.cloudflareinsights.com/beacon.min.js/vce701823e78c4301a35b7e07294d87301792088814092"></script>
@endpush
