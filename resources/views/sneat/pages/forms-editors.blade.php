@extends('layouts.app')

@section('title', 'Editors - Forms')

@push('styles')
<link rel="stylesheet" href="{{ asset('sneat/vendor/libs/quill/typography.css') }}"" />
<link rel="stylesheet" href="{{ asset('sneat/vendor/libs/highlight/highlight.css') }}"" />
<link rel="stylesheet" href="{{ asset('sneat/vendor/libs/quill/katex.css') }}"" />
<link rel="stylesheet" href="{{ asset('sneat/vendor/libs/quill/editor.css') }}"" />
@endpush

@section('content')
<div class="row gy-6">
    <!-- Snow Theme -->
    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Snow Theme</h5>
        <div class="card-body">
          <div id="snow-toolbar">
            <span class="ql-formats">
              <select class="ql-font"></select>
              <select class="ql-size"></select>
            </span>
            <span class="ql-formats">
              <button class="ql-bold"></button>
              <button class="ql-italic"></button>
              <button class="ql-underline"></button>
              <button class="ql-strike"></button>
            </span>
            <span class="ql-formats">
              <select class="ql-color"></select>
              <select class="ql-background"></select>
            </span>
            <span class="ql-formats">
              <button class="ql-script" value="sub"></button>
              <button class="ql-script" value="super"></button>
            </span>
            <span class="ql-formats">
              <button class="ql-header" value="1"></button>
              <button class="ql-header" value="2"></button>
              <button class="ql-blockquote"></button>
              <button class="ql-code-block"></button>
            </span>
          </div>
          <div id="snow-editor">
            <h6>Quill Rich Text Editor</h6>
            <p>Cupcake ipsum dolor sit amet. Halvah cheesecake chocolate bar gummi bears cupcake. Pie macaroon bear claw. Soufflé I love candy canes I love cotton candy I love.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- /Snow Theme -->
    <!-- Bubble Theme -->
    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Bubble Theme</h5>
        <div class="card-body">
          <div id="bubble-toolbar">
            <span class="ql-formats">
              <select class="ql-font"></select>
              <select class="ql-size"></select>
            </span>
            <span class="ql-formats">
              <button class="ql-bold"></button>
              <button class="ql-italic"></button>
              <button class="ql-underline"></button>
              <button class="ql-strike"></button>
            </span>
            <span class="ql-formats">
              <select class="ql-color"></select>
              <select class="ql-background"></select>
            </span>
            <span class="ql-formats">
              <button class="ql-script" value="sub"></button>
              <button class="ql-script" value="super"></button>
            </span>
            <span class="ql-formats">
              <button class="ql-header" value="1"></button>
              <button class="ql-header" value="2"></button>
              <button class="ql-blockquote"></button>
              <button class="ql-code-block"></button>
            </span>
          </div>
          <div id="bubble-editor">
            <h6>Quill Rich Text Editor</h6>
            <p>Cupcake ipsum dolor sit amet. Halvah cheesecake chocolate bar gummi bears cupcake. Pie macaroon bear claw. Soufflé I love candy canes I love cotton candy I love.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- /Bubble Theme -->
    <!-- Full Editor -->
    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Full Editor</h5>
        <div class="card-body">
          <div id="full-editor">
            <h6>Quill Rich Text Editor</h6>
            <p>Cupcake ipsum dolor sit amet. Halvah cheesecake chocolate bar gummi bears cupcake. Pie macaroon bear claw. Soufflé I love candy canes I love cotton candy I love.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- /Full Editor -->
  </div>
@endsection

@push('scripts')
<script src="{{ asset('sneat/vendor/libs/quill/katex.js') }}"></script>
<script src="{{ asset('sneat/vendor/libs/highlight/highlight.js') }}"></script>
<script src="{{ asset('sneat/vendor/libs/quill/quill.js') }}"></script>
<script src="{{ asset('sneat/js/forms-editors.js') }}"></script>
<script src="https://static.cloudflareinsights.com/beacon.min.js/vce701823e78c4301a35b7e07294d87301792088814092"></script>
@endpush
