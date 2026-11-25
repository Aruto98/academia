@extends('layouts.app')

@section('title', 'Leaflet - Maps')

@push('styles')
<link rel="stylesheet" href="{{ asset('sneat/vendor/libs/leaflet/leaflet.css') }}"" />
@endpush

@section('content')
<div class="row gy-6">
    <!-- Basic -->
    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Basic Map</h5>
        <div class="card-body">
          <div class="leaflet-map" id="basicMap"></div>
        </div>
      </div>
    </div>
    <!-- /Basic -->

    <!-- Marker Circle & Polygon -->
    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Marker Circle & Polygon</h5>
        <div class="card-body">
          <div class="leaflet-map" id="shapeMap"></div>
        </div>
      </div>
    </div>
    <!-- /Marker Circle & Polygon -->

    <!-- Draggable Marker With Popup -->
    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Draggable Marker With Popup</h5>
        <div class="card-body">
          <div class="leaflet-map" id="dragMap"></div>
        </div>
      </div>
    </div>
    <!-- /Draggable Marker With Popup -->

    <!-- User Location -->
    <div class="col-12">
      <div class="card">
        <h5 class="card-header">User Location</h5>
        <div class="card-body">
          <div class="leaflet-map" id="userLocation"></div>
        </div>
      </div>
    </div>
    <!-- /User Location -->

    <!-- Custom Icons -->
    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Custom Icons</h5>
        <div class="card-body">
          <div class="leaflet-map" id="customIcons"></div>
        </div>
      </div>
    </div>
    <!-- /Custom Icons -->

    <!-- GeoJson -->
    <div class="col-12">
      <div class="card">
        <h5 class="card-header">GeoJson</h5>
        <div class="card-body">
          <div class="leaflet-map" id="geoJson"></div>
        </div>
      </div>
    </div>
    <!-- /GeoJson -->

    <!-- Layer Control -->
    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Layer Control</h5>
        <div class="card-body">
          <div class="leaflet-map" id="layerControl"></div>
        </div>
      </div>
    </div>
    <!-- /Layer Control -->
  </div>
@endsection

@push('scripts')
<script src="{{ asset('sneat/vendor/libs/leaflet/leaflet.js') }}"></script>
<script src="{{ asset('sneat/js/maps-leaflet.js') }}"></script>
<script src="https://static.cloudflareinsights.com/beacon.min.js/vce701823e78c4301a35b7e07294d87301792088814092"></script>
@endpush
