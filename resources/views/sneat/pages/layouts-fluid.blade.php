@extends('layouts.app')

@section('title', 'Fluid - Layouts')

@section('content')
<!-- Layout Demo -->
<div class="layout-demo-wrapper">
  <div class="layout-demo-placeholder">
    
    <img src="{{ asset('sneat/img/layouts/layout-fluid-light.png') }}"" class="img-fluid" alt="Layout fluid" data-app-light-img="layouts/layout-fluid-light.png" data-app-dark-img="layouts/layout-fluid-dark.png" />
    
  </div>
  <div class="layout-demo-info">
    <h4>Layout fluid</h4>
    <p>Fluid layout sets a <code>100% width</code> at each responsive breakpoint.</p>
  </div>
</div>
<!--/ Layout Demo -->
@endsection

@push('scripts')
<script src="https://static.cloudflareinsights.com/beacon.min.js/vce701823e78c4301a35b7e07294d87301792088814092"></script>
@endpush
