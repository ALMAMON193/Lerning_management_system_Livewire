<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
          content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Dreams Pos admin template</title>
    @include('backend.partials.style')
    {!! ToastMagic::styles() !!}
    @livewireStyles
</head>
<body>
<div id="global-loader">
    <div class="whirly-loader"></div>
</div>

<div class="main-wrapper">
    @include('backend.partials.header')
    @include('backend.partials.sidebar')
    {{ $slot }}
</div>
@livewireScripts
{!! ToastMagic::scripts() !!}
@include('backend.partials.script')
</body>
</html>
