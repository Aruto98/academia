@extends('layouts.app')

@section('title', 'Content navbar - Layouts')

@section('content')
<!-- Layout Demo -->
  <div class="layout-demo-wrapper">
    <div class="layout-demo-placeholder">
      <img src="{{ asset('sneat/img/layouts/layout-content-navbar-light.png') }}"" class="img-fluid" alt="Layout content navbar" data-app-light-img="layouts/layout-content-navbar-light.png" data-app-dark-img="layouts/layout-content-navbar-dark.png" />
    </div>
    <div class="layout-demo-info">
      <h4>Layout content navbar</h4>
      <p>Template default layout, navbar in content area.</p>
    </div>
  </div>
  <!--/ Layout Demo -->
@endsection

@push('scripts')
<script src="https://static.cloudflareinsights.com/beacon.min.js/vce701823e78c4301a35b7e07294d87301792088814092"></script>
@endpush
