@extends('layouts.app')

@section('title', 'Without menu - Layouts')

@section('content')
<!-- Layout Demo -->
<div class="layout-demo-wrapper">
  <div class="layout-demo-placeholder">
    
    <img src="{{ asset('sneat/img/layouts/layout-without-menu-light.png') }}"" class="img-fluid" alt="Layout without menu" data-app-light-img="layouts/layout-without-menu-light.png" data-app-dark-img="layouts/layout-without-menu-dark.png" />
    
  </div>
  <div class="layout-demo-info">
    <h4>Layout without Menu (Navigation)</h4>
    <button class="btn btn-primary" type="button" onclick="history.back()">Go Back</button>
  </div>
</div>
<!--/ Layout Demo -->
@endsection

@push('scripts')
<script src="https://static.cloudflareinsights.com/beacon.min.js/vce701823e78c4301a35b7e07294d87301792088814092"></script>
@endpush
