<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perjininan ORMAS / LSM KOTA BANDUNG</title>
    <!-- Style -->
    @include('styles')
    <link rel="stylesheet" href="{{ asset('public/css/main.css') }}">
    @stack('styles')
</head>
<body>
    <!-- Header  -->
    @include('partials.main.header')
    <!-- Menu -->
    @include('partials.main.menu')
    <!-- Content  -->
    @yield('content')
    <!-- Footer -->
    @include('partials.main.footer')

    <!-- Java script -->
    @include('scripts')
    @stack('scripts')
      <script src="{{ asset('public/js/global.js') }}"></script>
</body>
</html>
