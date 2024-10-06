@php
    $dir = session('locale') == 'ar' ? 'bootstrap.rtl.min.css' : 'bootstrap.min.css';
@endphp

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="{{asset('assets-front')}}/images/fav/fav.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets-front')}}/images/fav/fav.png">
    <!-- bootstrap v5.3.3 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-front/bootstrap/css/' . $dir) }}">
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('assets-front')}}/bootstrap/css/bootstrap.rtl.min.css"> -->
    <!-- Aos Animation css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets-front')}}/aos/css/aos.css">
    <!--Font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!-- Swiper Slider css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets-front')}}/swiper/css/swiper-bundle.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets-front')}}/sass/general.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
        rel="stylesheet">
    <script src="{{asset('assets-front')}}/js/gsap.min.js"></script>
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
