<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sojon Kolyan Songo</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Anton|Cabin|Lato|Fjalla+One|Montserrat|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script>
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    </script>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ route('index') }}">
        <img src="{{ asset('assets/logo/logo.jpg') }}" alt="" srcset="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{ request()->routeIs('index')?'active':'' }}"><a href="{{ route('index') }}" class="nav-link">Home</a></li>
          <li class="nav-item {{ request()->routeIs('about')?'active':'' }}"><a href="{{ route('about') }}" class="nav-link">About</a></li>
          {{-- <li class="nav-item {{ request()->routeIs('causes')?'active':'' }}"><a href="{{ route('causes') }}" class="nav-link">Causes</a></li> --}}
          <li class="nav-item {{ request()->routeIs('donate')?'active':'' }}"><a href="{{ route('donate') }}" class="nav-link">Donate</a></li>
          {{-- <li class="nav-item {{ request()->routeIs('blog')?'active':'' }}"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li> --}}
          <li class="nav-item {{ request()->routeIs('gallery')?'active':'' }}"><a href="{{ route('gallery') }}" class="nav-link">Gallery</a></li>
          <li class="nav-item {{ request()->routeIs('events')?'active':'' }}"><a href="{{ route('events') }}" class="nav-link">Events</a></li>
          <li class="nav-item {{ request()->routeIs('member')?'active':'' }}"><a href="{{ route('member') }}" class="nav-link">Member</a></li>
          <li class="nav-item {{ request()->routeIs('contact')?'active':'' }}"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
