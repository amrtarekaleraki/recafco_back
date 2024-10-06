<!DOCTYPE html>
<html lang="en" dir="{{ session('locale') == 'ar' ? 'rtl' : 'ltr' }}">

     {{-- head-links --}}
     @include('front.partials.head')

<body id="vertical">

    <!--Preloader-->
    @include('front.partials.preloader')

    <!--Header-->
    @yield('header')

    <!--main-slider-->
    @yield('slider')


    @yield('content')



    {{-- scripts --}}
    @include('front.partials.scripts')


</body>

</html>
