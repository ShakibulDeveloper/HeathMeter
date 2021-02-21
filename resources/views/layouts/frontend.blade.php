<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="SEO" />
        <meta name="description" content="HealthMeter - Your Personal Health Checker Application" />
      <title>HealthMeter - dashboard </title>
      <!--font-awesome icons link-->
      <link rel="stylesheet" href="{{  asset('public/frontend_assets/css/font-awesome.min.css') }}">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{  asset('public/frontend_assets/css/bootstrap.min.css') }}">
      <!--main style file-->
      <link rel="stylesheet" href="{{  asset('public/frontend_assets/css/style.css') }}">
      <link rel="stylesheet" href="{{  asset('public/frontend_assets/css/responsive.css') }}">
</head>

<body id="index2">

     @yield('frontend_section')

    <!-- Optional JavaScript -->
    <script src="{{  asset('public/frontend_assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{  asset('public/frontend_assets/js/bootstrap.min.js')}}"></script>
    <script src="{{  asset('public/frontend_assets/js/custom.js')}}"></script>
</body>

</html>
