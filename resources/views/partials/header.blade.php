<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>
    <title>@yield('title', env('APP_NAME'))</title>

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <link rel="icon" type="image/png" href="{{ asset('images/website/'.$business->favicon) }}">
    
    <meta name="description" content="@yield('description')">
    <link rel="canonical" href="{{Request::url()}}" />

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{Request::url()}}" />
    <meta property="og:site_name" content="kingumbrellabd.com" />
    <meta property="article:publisher" content="{{optional($business)->facebook}}">
    <meta property="article:modified_time" content="{{Carbon\Carbon::now()}}">
    <meta property="og:image" content="@yield('og_image')">
    <meta property="og:image:width" content="500">
    <meta property="og:image:height" content="500">
    <meta property="og:image:type" content="image/jpeg">

    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="kingumbrellabd">
    <meta name="Classification" content="Business">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="fb:page_id" content="{{optional($business)->facebook}}">
    <meta property="og:site_name" content="kingumbrellabd">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta content="yes" name="apple-touch-fullscreen">
    <meta name="apple-mobile-web-app-status-bar-style" content="#b41f23">
    
    
    <!-- Twitter -->
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="@yield('og_image')">
    <meta name="twitter:site" content="@kingumbrellabd.com">
    <meta name="twitter:creator" content="@kingumbrellabd">
    <meta name="twitter:label1" content="Est. reading time">
    <meta name="twitter:data1" content="1 minutes"/>

    <meta name="csrf-token" content="{{csrf_token()}}">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Bootstrap -->
    @if(Route::currentRouteName() != 'checkout')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @endif
    <!-- Bootstrap End -->

    <!-- Toastr -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
    <!-- Toastr End -->

    <link rel="preload" href="{{ asset('') }}assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="{{ asset('') }}assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="{{ asset('') }}assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
            crossorigin="anonymous">
    <link rel="preload" href="{{ asset('') }}assets/fonts/wolmart87d5.ttf?png09e" as="font" type="font/ttf" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/vendor/animate/animate.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/vendor/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/vendor/photoswipe/photoswipe.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/vendor/photoswipe/default-skin/default-skin.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/css/style.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/css/custom.css">
    @yield('style')
    
    
</head>

<body>
    @if(Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
       <p class="text-center" style="margin: 0px;">
           {{ Session::get('error') }}
       </p>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <div class="page-wrapper">
        <!-- Start of Header -->
        @include('partials.web-header')
        <!-- End of Header -->