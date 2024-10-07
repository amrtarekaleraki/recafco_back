@php
    $socials = App\Models\Social::first();
@endphp


@extends('front.master')

@section('title','About')

@section('about-active','active')

@section('header')
   @include('front.partials.all-pages-header')
@endsection

@section('slider')

{{-- <x-hero-component
   image="{{ asset('assets-front/images/global-image/about-banner.PNG') }}"
   title="It’s more than construction"
   subtitle="Hundreds of professionals"
   paragraph="Converting from the ground up"
   link1="Mission"
   link2="Legacy"
   link3="QA"
   link4="HSE"
   link5="Snapshot"
/> --}}


<section class="hero-section position-relative d-flex flex-column align-items-center justify-content-center"
    style="background: url('{{ asset('assets-front/images/global-image/about-banner.PNG') }}');">
    <div class="container">
        <div class="text-box" data-aos="fade-up">
            <span class="d-block mb-2">
                {{ __('front.about_title') }}
            </span>
            <p class="mb-0">
                {{ __('front.about_subtitle') }}
            </p>
            <h3 class="mb-4">{{ __('front.about_desc') }}</h3>
            <div class="tags d-flex flex-wrap align-items-center gap-3 row-gap-1">
                <a href="#" class="button button--link hover-add-underline">{{ __('front.mission_link') }}</a>
                <a href="#" class="button button--link hover-add-underline">{{ __('front.legacy_link') }}</a>
                <a href="#" class="button button--link hover-add-underline">{{ __('front.qa_link') }}</a>
                <a href="#" class="button button--link hover-add-underline">{{ __('front.hse_link') }}</a>
                <a href="#" class="button button--link hover-add-underline">{{ __('front.snapshot_link') }}</a>
            </div>
        </div>
    </div>
</section>


@endsection


@section('content')

    <section class="page-layout-with-bg">
        <!--MISSION & VALUES-->
        <div class="about-section" data-aos="fade-up">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-5 col-sm-12 mb-3">
                        <div class="body-image-part">
                            <img class="d-block w-100 img-fluid" src="{{asset('assets-front')}}/images/about/mission.PNG" alt="image" />
                        </div>
                    </div>
                    <!---->
                    <div class="col-lg-6 col-md-7 col-sm-12 mb-3">
                        <div class="body-description-part p-4">
                            <h3 class="mb-3">{{ __('front.mission_script_title') }}</h3>
                            <p class="mb-3">
                                <span>{{ __('front.mission_script_subtitle') }}</span>

                            </p>
                            <span class="d-block more-details-text mb-4">{{ __('front.mission_script_desc') }}</span>
                            <a href="{{ asset("storage/mission/$information->mission") }}" class="button button--primary bg-red hover-add-swipe" download="{{ $information->mission }}">
                                {{ __('front.mission_script_download') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--OUR LEGACY-->
        <div class="our-legacy position-relative">
            <div class="container-fluid p-4">
                <div class="body-description-part absolute-position">
                    <h3 class="mb-3">{{ __('front.legacy_script_title') }}</h3>
                    <p class="mb-3">
                        <span>{{ __('front.legacy_script_subtitle') }}</span>.
                    </p>
                    <span class="d-block more-details-text mb-4">{{ __('front.legacy_script_desc') }}</span>
                    <a href="{{ route('front.projects') }}" class="button button--primary bg-red hover-add-swipe">
                        {{ __('front.legacy_script_download') }}
                    </a>
                </div>
                <div class="row align-items-center justify-content-end">
                    <div class="col-lg-7 col-md-10 p-0">
                        <div class='body-image-part'>
                            <img class="w-100 d-block img-fluid" src="{{asset('assets-front')}}/images/about/legancy.PNG" alt="image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--MISSION & VALUES-->
        <div class="about-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-5 col-sm-12 mb-3">
                        <div class="body-image-part">
                            <img class="d-block w-100 img-fluid"
                                src="{{asset('assets-front')}}/images/global-image/image-swiper-counter.png" alt="image" />
                        </div>
                    </div>
                    <!---->
                    <div class="col-lg-6 col-md-7 col-sm-12 mb-3">
                        <div class="body-description-part p-4">
                            <h3 class="mb-3">{{ __('front.trusted_script_title') }}</h3>
                            <p class="mb-3">
                                {{ __('front.trusted_script_subtitle') }}
                            </p>
                            <span class="d-block more-details-text mb-4">{{ __('front.trusted_script_desc') }}</span>
                            <a href="{{ asset("storage/trusted/$information->trusted") }}" class="button button--primary bg-red hover-add-swipe" download="{{ $information->trusted }}">
                                {{ __('front.trusted_script_download') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Quality Assurance-->
        <div class="quality-assurance position-relative mb-5">
            <div class="container-fluid p-0">
                <div class="body-description-part absolute-position reverse-col">
                    <h3 class="mb-3">{{ __('front.quality_script_title') }}</h3>
                    <p class="mb-3">
                        {{ __('front.quality_script_subtitle') }}
                    </p>
                    <span class="d-block more-details-text mb-4">{{ __('front.quality_script_desc') }}</span>
                    <a href="{{ asset("storage/quality/$information->quality") }}" class="button button--primary bg-red hover-add-swipe" download="{{ $information->quality }}">
                        {{ __('front.quality_script_download') }}
                    </a>
                </div>
                <div class="row align-items-center justify-content-start">
                    <div class="col-lg-7 col-md-10 p-0">
                        <div class='body-image-part'>
                            <img class="w-100 d-block img-fluid" src="{{asset('assets-front')}}/images/about/about-quality.PNG"
                                alt="image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--------------->
        <div class="about-section mb-5">
            <div class="container">
                <div class="row align-items-center">
                    <!---->
                    <div class="col-lg-6 col-md-7 col-sm-12 mb-3">
                        <div class="body-description-part p-4">
                            <h3 class="mb-3">{{ __('front.hse_script_title') }}</h3>
                            <p class="mb-3">
                                {{ __('front.hse_script_subtitle') }}
                            </p>
                            <span class="d-block more-details-text mb-4">{{ __('front.hse_script_desc') }}</span>
                            <a href="{{ asset("storage/hse/$information->hse") }}" class="button button--primary bg-red hover-add-swipe" download="{{ $information->hse }}">
                                {{ __('front.hse_script_download') }}
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 col-sm-12 mb-3">
                        <div class="body-image-part">
                            <img class="d-block w-100 img-fluid" src="{{asset('assets-front')}}/images/about/about-recafco.PNG"
                                alt="image" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--------------->
        <div class="company-snapshot">
            <div class="container">
                <h4 class="mb-5">{{ __('front.COMPANY_SNAPSHOT') }}</h4>
                <div class="row justify-content-center">
                    <div class="col-lg-11 col-md-12">
                        <div class="company-snapshot-items">
                            <div class="item">
                                <img class="d-block" src="{{asset('assets-front')}}/images/icon/dollars.png" alt="image" />
                                <h3 class="mb-3">${{ $information->annual }}M</h3>
                                <p>{{ __('front.Annual_Revenue') }}</p>
                            </div>
                            <!---->
                            <div class="item">
                                <img class="d-block" src="{{asset('assets-front')}}/images/icon/charts.png" alt="image" />
                                <h3 class="mb-3">{{ $information->increase }}%</h3>
                                <p>{{ __('front.Increase_in_annual') }}</p>
                            </div>
                            <!---->
                            <div class="item">
                                <img class="d-block" src="{{asset('assets-front')}}/images/icon/users.png" alt="image" />
                                <h3 class="mb-3">{{ $information->employes }}+</h3>
                                <p>{{ __('front.Employees_strong') }}</p>
                            </div>
                            <!---->
                            <div class="item">
                                <img class="d-block" src="{{asset('assets-front')}}/images/icon/hand.png" alt="image" />
                                <h3 class="mb-3">{{ $information->projects }}+</h3>
                                <p>{{ __('front.Projects_completed_scale') }}</p>
                            </div>
                            <!---->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---->
    </section>
    <!---->
    <section class="build-together position-relative">
        <div class="mobile-upper-text align-items-center justify-content-center flex-column row-gap-3">
            <h4>{{ __('front.lets_build') }}  <span class="d-block">{{ __('front.together') }}</span></h4>
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
    <!---->

    @include('front.partials.dark-footer')


@endsection



