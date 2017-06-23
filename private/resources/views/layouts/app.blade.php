<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Buku Zinuno BNKP Online adalah aplikasi yang menyajikan lagu-lagu rohani Banua Niha Keriso Protestan (BNKP) berbasis Web.">
  <meta name="keywords" content="buku zinuno bnkp online, buku zinuno, bnkp, aplikasi buku zinuno, rohani bnkp, nias, harapan jaya harefa">
  <meta name="author" content="Harapan Jaya Harefa">
  <title>@yield('title') - Buku Zinuno BNKP Online</title>
  <link rel="apple-touch-icon" sizes="60x60" href="{{url('app-assets/images/ico/apple-icon-60.png')}}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{url('app-assets/images/ico/apple-icon-76.png')}}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{url('app-assets/images/ico/apple-icon-120.png')}}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{url('app-assets/images/ico/apple-icon-152.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{url('app-assets/images/ico/favicon.ic')}}o">
  <link rel="shortcut icon" type="image/png" href="{{url('app-assets/images/ico/favicon-32.png')}}">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{url('app-assets/css/bootstrap.css')}}">
  <!-- font icons-->
  <link rel="stylesheet" type="text/css" href="{{url('app-assets/fonts/icomoon.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('app-assets/fonts/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('app-assets/vendors/css/extensions/pace.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN ROBUST CSS-->
  <link rel="stylesheet" type="text/css" href="{{url('app-assets/css/bootstrap-extended.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('app-assets/css/app.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('app-assets/css/colors.css')}}">
  <!-- END ROBUST CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{url('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('app-assets/css/core/menu/menu-types/vertical-overlay-menu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('app-assets/css/pages/search.css')}}">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
  <!-- END Custom CSS-->

  @yield('customCss')
</head>
<!-- <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar"> -->
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">


      @include('layouts.navbar')

      <!-- ////////////////////////////////////////////////////////////////////////////-->
      @include('layouts.main_menu')

      @yield('content')
      <!-- ////////////////////////////////////////////////////////////////////////////-->
      
      @include('layouts.footer')
      @include('layouts.footer_js')
      
      @yield('CustomJs')
    </body>
    </html>

