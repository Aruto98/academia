<!doctype html>

<html
  lang="en"
  class="layout-menu-fixed layout-compact"
  data-assets-path="{{ asset('sneat') }}/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title', 'Dashboard') | Sneat - Bootstrap Dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('sneat/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('sneat/vendor/fonts/iconify-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('sneat/vendor/css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('sneat/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('sneat/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    @stack('styles')

    <!-- Helpers -->
    <script src="{{ asset('sneat/vendor/js/helpers.js') }}"></script>
    <!--? Config: Mandatory theme config file contain global vars & default theme options -->
    <script src="{{ asset('sneat/js/config.js') }}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Sidebar / Menu -->
        @include('layouts.partials.sidebar')
        <!-- / Sidebar -->

        <!-- Layout page -->
        <div class="layout-page">
          <!-- Navbar -->
          @include('layouts.partials.navbar')
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              @yield('content')
            </div>
            <!-- / Content -->

            <!-- Footer -->
            @include('layouts.partials.footer')
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- / Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <script src="{{ asset('sneat/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('sneat/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('sneat/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('sneat/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('sneat/vendor/js/menu.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('sneat/js/main.js') }}"></script>

    <!-- Page Scripts -->
    @stack('scripts')

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
