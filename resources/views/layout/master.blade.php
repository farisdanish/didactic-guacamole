<!DOCTYPE html>
<html>
<head>
  <title>@yield('title', 'eJKDB - Home')</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="_token" content="{{ csrf_token() }}">
  
  <link rel="shortcut icon" href="{{ asset('/favicon.png') }}">

  <!-- plugin css -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/@mdi/font/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}">
  <!-- end plugin css -->

  @stack('plugin-styles')

  <!-- common css -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <!-- end common css -->

  @stack('style')
</head>
<body data-base-url="{{url('/')}}">

  <div class="container-scroller" id="app">
    @include('layout.header')
    <div class="container-fluid page-body-wrapper">
      @include('layout.settings-panel')
      @include('layout.sidebar')
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        @include('layout.footer')
      </div>
    </div>
  </div>

  <!-- base js -->
  <link rel="text/javascript" href="{{ asset('js/app.js') }}">
  <link rel="text/javascript" href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- end base js -->

  <!-- plugin js -->
  @stack('plugin-scripts')
  <!-- end plugin js -->

  <!-- common js -->
  <link rel="text/javascript" href="{{ asset('assets/js/off-canvas.js') }}">
  <link rel="text/javascript" href="{{ asset('assets/js/hoverable-collapse.js') }}">
  <link rel="text/javascript" href="{{ asset('assets/js/misc.js') }}">
  <link rel="text/javascript" href="{{ asset('assets/js/settings.js') }}">
  <link rel="text/javascript" href="{{ asset('assets/js/todolist.js') }}">
  <!-- end common js -->

  @stack('custom-scripts')
</body>
</html>