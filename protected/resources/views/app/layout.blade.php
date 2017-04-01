<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Perijinan ORMAS/LSM Kota Bandung</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}" data-id="{{  Auth::user()->id }}"/>

  @include('app.styles')
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/datareg.css') }}">
  @stack('app.styles')
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini" style="background-color: #FAFBFC;">


  <!-- Header  -->
  @include('app.partials.header')

  <div class="jumbotron jumbotron-custom">
    <div class="container">
      @if( Auth::user()->level == 'admin' )

        @include('app.partials.admin-menu')
      @else

        @include('app.partials.user-menu')
      @endif

    </div>
  </div>

  <!-- Content  -->
  @yield('content')

  <!-- Footer -->
  @include('app.partials.footer')


  <!-- Java script -->
  @include('app.scripts')
    <script src="{{ asset('public/js/module/app/app.js') }}"></script>
    <script src="{{ asset('public/js/module/app/datareg.js') }}"></script>
  @stack('app.scripts')
</body>
</html>
