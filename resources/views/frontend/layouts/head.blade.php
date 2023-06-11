<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> @yield('title') | {{ config('app.name') }} </title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
<meta name="author" content="ADD AUTHOR INFORMATION">
<meta name="robots" content="index, follow">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Favicons -->
<link rel="shortcut icon" href="{{asset('/assets/images/favicon.png')}}">


<link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}">

<!-- Override CSS file - add your own CSS rules -->
<link rel="stylesheet" href="{{ asset('/assets/css/custom_admin_style.css') }}">


<!-- jQuery 3.4.1 -->
<script src="{{ asset('/assets/js/jquery-3.4.1.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>


 <link href="{{ asset('/assets/static/plugin/font-awesome/css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/static/plugin/themify-icons/themify-icons.css') }}" rel="stylesheet">
    <!-- / -->

    <!-- Plugin CSS -->
    <link href="{{ asset('/assets/static/plugin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/static/plugin/owl-carousel/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/static/plugin/magnific/magnific-popup.css') }}" rel="stylesheet">
    <!-- / -->

    <!-- Theme Style -->
    <link href="{{ asset('/assets/static/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/static/css/color/default.css') }}" rel="stylesheet" id="color_theme">
    <!-- / -->

    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico" />