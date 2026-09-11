@extends('layouts.app')

@section('title', 'Data API Gateway')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mb-6">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Data dari API Gateway</h5>
        <small class="text-body-secondary float-end">Endpoint: http://localhost:8080/api/data</small>
      </div>
      <div class="card-body">
        @if(!empty($data))
          <div class="table-responsive text-nowrap">
            <pre class="bg-light p-3 rounded"><code>{{ json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) }}</code></pre>
          </div>
        @else
          <div class="alert alert-warning mb-0" role="alert">
            <h6 class="alert-heading mb-1"><i class="bx bx-error-circle me-1"></i> Tidak ada data atau koneksi ke Gateway belum aktif</h6>
            <span>Pastikan layanan API Gateway di <code>http://localhost:8080</code> sudah berjalan dan token valid.</span>
          </div>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection
