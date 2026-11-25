@extends('layouts.app')

@section('title', 'Container - Layouts')

@section('content')
<!-- Layout Demo -->
  <div class="layout-demo-wrapper">
    <div class="layout-demo-placeholder">
      
        <img src="{{ asset('sneat/img/layouts/layout-container-light.png') }}"" class="img-fluid" alt="Layout container" data-app-light-img="layouts/layout-container-light.png" data-app-dark-img="layouts/layout-container-dark.png" />
      
    </div>
    <div class="layout-demo-info">
      <h4>Layout container</h4>
      <p>Container layout sets a <code>max-width</code> at each responsive breakpoint.</p>
    </div>
  </div>
  <!--/ Layout Demo -->
@endsection

@push('scripts')
<script src="https://static.cloudflareinsights.com/beacon.min.js/vce701823e78c4301a35b7e07294d87301792088814092"></script>
@endpush
