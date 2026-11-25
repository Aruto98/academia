@extends('layouts.app')

@section('title', 'Plyr - Extended UI')

@push('styles')
<link rel="stylesheet" href="{{ asset('sneat/vendor/libs/plyr/plyr.css') }}"" />
@endpush

@section('content')
<div class="row gy-6">
    <!-- Video Player -->
    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Video</h5>
        <div class="card-body">
          <video class="w-100" poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="plyr-video-player" playsinline controls>
            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" />
          </video>
        </div>
      </div>
    </div>
    <!-- /Video Player -->

    <!-- Audio Player -->
    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Audio</h5>
        <div class="card-body">
          <audio class="w-100" id="plyr-audio-player" controls>
            <source src="{{ asset('sneat/audio/Water_Lily.mp3') }}"" type="audio/mp3" />
          </audio>
        </div>
      </div>
    </div>
    <!-- /Audio Player -->
  </div>
@endsection

@push('scripts')
<script src="{{ asset('sneat/vendor/libs/plyr/plyr.js') }}"></script>
<script src="{{ asset('sneat/js/extended-ui-media-player.js') }}"></script>
<script src="https://static.cloudflareinsights.com/beacon.min.js/vce701823e78c4301a35b7e07294d87301792088814092"></script>
@endpush
