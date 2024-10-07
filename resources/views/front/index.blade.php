@php
    $socials = App\Models\Social::first();
@endphp

@extends('front.master')

@section('title',__('front.Recafco'))


@section('header')

    @include('front.partials.header')


@endsection

@section('slider')

    <section class="home-main-slider position-relative">
        <!-- Swiper -->
        <div class="swiper mySwiper main-swiper">
            <div class="swiper-wrapper">

                @if (count($projects) > 0)
                @foreach ($projects as $project)
                    <div class="swiper-slide position-relative">
                        <div class="image-slider">
                            <img class="d-block w-100 img-fluid" src="{{ asset("storage/project_image1/$project->image") }}" alt="image" />
                        </div>
                        <div class="content-slider">
                            <div class="container-fluid">

                                <a href="{{ route('front.singleproject',$project) }}" class="button button--link hover-add-underline">
                                    <span>{{ $project->product->title }}, <span>{{ $project->title }}</span></span>
                                    <img src="{{asset('assets-front')}}/images/icon/danger-arrow.svg" alt="icon" />
                                </a>
                                <div class="mobile-only-section button-group">
                                    <a href="{{ route('front.projects') }}" class="button button--link hover-add-underline">
                                        see projects
                                    </a>
                                    <a href="{{ route('front.contacts') }}" class="button dark-button button--link hover-add-underline">
                                        send inquiry
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endif



            </div>

            <div class="swiper-button-next main-swiper-arrow">
                <img src="{{asset('assets-front')}}/images/icon/arrow-right.svg" alt="images" />
            </div>
            <div class="swiper-button-prev main-swiper-arrow">
                <img src="{{asset('assets-front')}}/images/icon/arrow-left.svg" alt="images" />
            </div>
        </div>
    </section>


@endsection


@section('content')

    <!--Second Section-->
    <section class="second-section">
        <div class="container">
            <div class="second-section-content">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5 col-3">
                        <div class="d-flex flex-column align-items-end">
                            @php
                                $startYear = 1976;
                                $currentYear = date('Y');
                                $yearsCount = $currentYear - $startYear;
                            @endphp
                            <div class="counter position-relative text-center">
                                <div class="counting" data-count="{{ $yearsCount }}">0</div>
                                <p>{{ __('front.Years') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-1">
                        <div class="sperator position-relative"></div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-8">
                        <h5 class="mb-1">{{ __('front.first_sec_title') }}</h5>
                        <p>{{ __('front.first_sec_desc') }}</p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!--Mobile Section Only-->
    <section class="mobile-only-section about-home-section">
        <div class="container">
            <div class="row mb-3">
                <div class="col-6">
                    <div class="first-image">
                        <img class="w-100 img-fluid" src="{{asset('assets-front')}}/images/projects/proj1.png" alt="image"/>
                    </div>
                </div>
                <div class="col-6">
                    <div class="second-image">
                        <img class="w-100 img-fluid" src="{{asset('assets-front')}}/images/projects/proj2.PNG" alt="image"/>
                        <img class="w-100 img-fluid" src="{{asset('assets-front')}}/images/projects/proj3.PNG" alt="image"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>
                        <span>{{ __('front.Recafco') }}</span> {{ __('front.mobile_desc1') }}<span>{{ __('front.mobile_vision') }}</span>
                    </p>
                    <a href="{{ route('front.about') }}" class="button button--primary bg-red hover-add-swipe">
                        About Recafco
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--Section swiper and counter-->
    <section class="details-section" data-aos="fade-up">
        <div class="container-fluid p-0">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12 col-sm-12 p-0">
                    <div class="first-details-description">
                        <div class="row justify-content-end">
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <p>
                                    {{ __('front.second_sec_desc1') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!---->
                    <div class="second-details-description">
                        <div class="row justify-content-end">
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <p>
                                    {{ __('front.second_sec_desc2') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 p-0">
                    <div class="interactive-section-image-part h-100">
                        <div class='container_sec'>
                            <div class='reveal'>
                                <img class="img-fluid w-100" src="{{asset('assets-front')}}/images/global-image/first-right.png"
                                    alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
                <!---->
            </div>
        </div>
    </section>

    <!--Bulding Section-->
    <section class="bulding-section" data-aos="fade-up">
        <div class="container-fluid p-0">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-12 p-0">
                    <div class="h-100">
                        <div class='container_sec'>
                            <div class='reveal'>
                                <img class="img-fluid w-100" src="{{asset('assets-front')}}/images/global-image/cars-bulding.svg"
                                    alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="h-100 logo-content-section position-relative">
                        <div class="row justify-content-center">
                            <div class="swiper-button-next five-logo-arrow">
                                <img src="{{asset('assets-front')}}/images/icon/arrow-right.svg" alt="icon" />
                            </div>
                            <div class="swiper-button-prev five-logo-arrow">
                                <img src="{{asset('assets-front')}}/images/icon/arrow-left.svg" alt="icon" />
                            </div>
                            <!--Have script in the end of page Swiper -->
                            <div class="swiper mySwiper five-logo">
                                <div class="swiper-wrapper">

                                    @if (count($certificates) > 0)
                                        @foreach ($certificates as $certificate)
                                            <div class="swiper-slide">
                                                <div class="item text-center">
                                                    <span class="d-flex align-items-center justify-content-center">
                                                        <img class="d-block m-auto" src="{{ asset("storage/certificates/$certificate->image") }}"
                                                            alt="logo" />
                                                    </span>
                                                    <p>{{ $certificate->title }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!--Section fade up after building-->
    <section class="logo-with-description" data-aos="fade-up">
        <div class="container-fluid p-0">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-8 col-sm-12 p-0">
                    <div class="h-100 logo-content-section position-relative">
                        <div class="row justify-content-center">
                            <div class="col-lg-11 col-md-12">
                                <div class="col-lg-11 col-md-10">
                                    <div class="swiper-button-next three-logo-arrow">
                                        <img src="{{asset('assets-front')}}/images/icon/arrow-right.svg" alt="icon" />
                                    </div>
                                    <div class="swiper-button-prev three-logo-arrow">
                                        <img src="{{asset('assets-front')}}/images/icon/arrow-left.svg" alt="icon" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-11">
                                <!--Have script in the end of page Swiper -->
                                <div class="swiper mySwiper three-logo">
                                    <div class="swiper-wrapper">

                                        @if (count($accreditations) > 0)
                                            @foreach ($accreditations as $accreditation)
                                                <div class="swiper-slide">
                                                    <div class="item  text-center">
                                                        <img class="d-block m-auto" src="{{ asset("storage/accreditations/$accreditation->image") }}" alt="logo" />
                                                        <p>{{ $accreditation->title }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif



                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!---->
                <div class="col-lg-3 col-md-4 col-sm-12 p-0">
                    <div class="h-100">
                        <div class='container_sec'>
                            <div class='reveal'>
                                <img class="img-fluid w-100" src="{{asset('assets-front')}}/images/global-image/right-part.png"
                                    alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Section swiper and counter-->
    <section class="interactive-section" data-aos="fade-up">
        <div class="container-fluid p-0">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-12 p-0">
                    <div class="interactive-section-image-part h-100">
                        <div class='container_sec'>
                            <div class='reveal'>
                                <img class="img-fluid w-100" src="{{asset('assets-front')}}/images/global-image/image-swiper-counter.png"
                                    alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
                <!---->
                <div class="col-lg-9 col-md-8 col-sm-12 p-0">
                    <div class="interactive-section-counter">
                        <div
                            class="item position-relative d-flex align-items-center justify-content-center flex-column">
                            <div class="counting-div d-flex align-items-center mb-3 gap-1">
                                <div class="counting" data-count="{{ $counters->projects }}">0</div>
                                <span>+</span>
                            </div>
                            <p>{{ __('front.count_projects') }}</p>
                        </div>
                        <!---->
                        <div
                            class="item position-relative d-flex align-items-center justify-content-center flex-column">
                            <div class="counting-div d-flex align-items-center mb-3 gap-1">
                                <div class="counting" data-count="{{ $counters->employes }}">0</div>
                                <span>+</span>
                            </div>
                            <p>{{ __('front.count_employees') }}</p>
                        </div>
                        <!---->
                        <div
                            class="item position-relative d-flex align-items-center justify-content-center flex-column">
                            <div class="counting-div d-flex align-items-center mb-3 gap-1">
                                <div class="counting" data-count="{{ $counters->awards }}">0</div>
                                <span>+</span>
                            </div>
                            <p>{{ __('front.count_awards') }}</p>
                        </div>
                    </div>
                    <!---->
                    <div class="interactive-section-swiper position-relative">
                        <div class="row justify-content-center">
                            <div class="col-lg-11 col-md-10">
                                <div class="swiper-button-next clients">
                                    <img src="{{asset('assets-front')}}/images/icon/arrow-right.svg" alt="icon" />
                                </div>
                                <div class="swiper-button-prev clients">
                                    <img src="{{asset('assets-front')}}/images/icon/arrow-left.svg" alt="icon" />
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-11">
                                <!-- Swiper -->
                                <div class="swiper mySwiper clients">
                                    <div class="swiper-wrapper">

                                    @if (count($parteners) > 0)
                                        @foreach ($parteners as $partener)
                                            <div class="swiper-slide">
                                                <div class="box">
                                                    <img src="{{ asset("storage/parteners/$partener->image") }}" alt="logo" />
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif




                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- mobile only end-->
    <section class="build-together position-relative mobile-only">
        <div class="mobile-upper-text align-items-center justify-content-center flex-column row-gap-3">
            <h4>{{ __('front.lets_build') }} <span class="d-block">{{ __('front.together') }}</span></h4>
            <a href="{{ $socials->career_open }}" class="button button--primary bg-red hover-add-swipe">
                {{ __('front.career_openings') }}
            </a>
        </div>
        <div class="flex-reverse p-0">
            <div
                class="build-together-absolute-box d-flex align-items-center justify-content-center flex-column row-gap-3">
                <span>{{ __('front.lets_talk') }}</span>
                <h4>{{ __('front.need_to_reach_us') }}</h4>
                <a href="{{ route('front.contacts') }}" class="button button--primary bg-red hover-add-swipe">
                    {{ __('front.contact') }}
                </a>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-9 col-sm-12">
                    <div class="build-together-image-part position-relative d-flex align-items-center"
                        style="background: url({{asset('assets-front')}}/images/production/contact.PNG);">
                        <div class="text-image">
                            <h4>{{ __('front.lets_build') }} <span class="d-block">{{ __('front.together') }}</span></h4>
                            <a href="{{ $socials->career_open }}" class="button button--primary bg-red hover-add-swipe">
                                {{ __('front.career_openings') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('front.partials.footer')



@endsection




