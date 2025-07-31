<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Etrain</title>
   @include('frontend.partials.style')
</head>

<body>
<!--::header part start::-->
@include('frontend.partials.header')
<!-- Header part end-->

  @yield('content')

<!-- footer part start-->
@include('frontend.partials.footer')
<!-- footer part end-->

<!-- jquery plugins here-->
@include('frontend.partials.script')
</body>

</html>
