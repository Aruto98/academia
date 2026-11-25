@extends('layouts.app')

@section('title', 'Collapsed menu - Layouts')

@section('content')
<!-- Layout Demo -->
  <div class="layout-demo-wrapper">
    <div class="layout-demo-placeholder">
      <img src="{{ asset('sneat/img/layouts/layout-collapsed-menu-light.png') }}"" class="img-fluid" alt="Layout collapsed menu" data-app-light-img="layouts/layout-collapsed-menu-light.png" data-app-dark-img="layouts/layout-collapsed-menu-dark.png" />
    </div>
    <div class="layout-demo-info">
      <h4>Layout collapsed menu</h4>
      <div class="alert alert-primary mt-6" role="alert"><span class="fw-medium">Important:</span> If you have enabled localStorage then the menu (navigation) will be synced with localStorage value.</div>
    </div>
  </div>
  <!--/ Layout Demo -->
@endsection

@push('scripts')
<script src="https://static.cloudflareinsights.com/beacon.min.js/vce701823e78c4301a35b7e07294d87301792088814092"></script>
@endpush
