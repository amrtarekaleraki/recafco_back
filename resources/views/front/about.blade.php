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
                It’s more than construction
            </span>
            <p class="mb-0">
                Hundreds of professionals
            </p>
            <h3 class="mb-4">Converting from the ground up</h3>
            <div class="tags d-flex flex-wrap align-items-center gap-3 row-gap-1">
                <a href="#" class="button button--link hover-add-underline">Mission</a>
                <a href="#" class="button button--link hover-add-underline">Legacy</a>
                <a href="#" class="button button--link hover-add-underline">QA</a>
                <a href="#" class="button button--link hover-add-underline">HSE</a>
                <a href="#" class="button button--link hover-add-underline">Snapshot</a>
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
                            <h3 class="mb-3">MISSION & VALUES</h3>
                            <p class="mb-3">
                                <span>Delivering excellence</span> in construction and fabrication solutions through
                                innovation, sustainability, and enduring partnerships.
                            </p>
                            <span class="d-block more-details-text mb-4">Safety, quality, and integrity guide us to
                                exceed expectations, build lasting partnerships, and create enduring value on every
                                project</span>
                            <a href="{{ asset("storage/mission/$information->mission") }}" class="button button--primary bg-red hover-add-swipe" download="{{ $information->mission }}">
                                download company profile
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
                    <h3 class="mb-3">OUR LEGACY</h3>
                    <p class="mb-3">
                        <span>(RECAFCO)</span> Real Estate Construction & Fabrication Co. is a Kuwaiti Share Holding
                        Company (Closed) incorporated in <span>1976</span>.
                    </p>
                    <span class="d-block more-details-text mb-4"> RECAFCO has created for itself a niche market in the
                        Concrete Precast business and is one of the leading companies in Kuwait with more than three
                        decades of experience. </span>
                    <a href="{{ route('front.projects') }}" class="button button--primary bg-red hover-add-swipe">
                        all projects
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
                            <h3 class="mb-3">TRUSTED PARTNER</h3>
                            <p class="mb-3">
                                As a <span>Class 1 contractor</span> for general construction, we've earned our
                                reputation as a leading force in Kuwait's construction industry.
                            </p>
                            <span class="d-block more-details-text mb-4">Safety, quality, and integrity guide us to
                                exceed expectations, build lasting partnerships, and create enduring value on every
                                project</span>
                            <a href="{{ asset("storage/trusted/$information->trusted") }}" class="button button--primary bg-red hover-add-swipe" download="{{ $information->trusted }}">
                                download company profile
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
                    <h3 class="mb-3">Quality Assurance</h3>
                    <p class="mb-3">
                        A leading provider of high-quality services with <span>ISO certifications</span> in quality
                        management, environmental management, and occupational health and safety.
                    </p>
                    <span class="d-block more-details-text mb-4">Our experienced team and extensive resources enable us
                        to successfully deliver large and complex projects. Trust RECAFCO for exceptional results and
                        reliable service.</span>
                    <a href="{{ asset("storage/quality/$information->quality") }}" class="button button--primary bg-red hover-add-swipe" download="{{ $information->quality }}">
                        Download certificate
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
                            <h3 class="mb-3">Health, Safety
                                & Environment</h3>
                            <p class="mb-3">
                                Committed to safety and sustainability. We strictly follow <span>HSE standards</span>
                                and continuously improve our practices to create a safe work environment.
                            </p>
                            <span class="d-block more-details-text mb-4">Safety, quality, and integrity guide us to
                                exceed expectations, build lasting partnerships, and create enduring value on every
                                project</span>
                            <a href="{{ asset("storage/hse/$information->hse") }}" class="button button--primary bg-red hover-add-swipe" download="{{ $information->hse }}">
                                Download certificate
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
                <h4 class="mb-5">COMPANY SNAPSHOT</h4>
                <div class="row justify-content-center">
                    <div class="col-lg-11 col-md-12">
                        <div class="company-snapshot-items">
                            <div class="item">
                                <img class="d-block" src="{{asset('assets-front')}}/images/icon/dollars.png" alt="image" />
                                <h3 class="mb-3">${{ $information->annual }}M</h3>
                                <p>Annual Revenue</p>
                            </div>
                            <!---->
                            <div class="item">
                                <img class="d-block" src="{{asset('assets-front')}}/images/icon/charts.png" alt="image" />
                                <h3 class="mb-3">{{ $information->increase }}%</h3>
                                <p>Increase in annual growth over the last seven years</p>
                            </div>
                            <!---->
                            <div class="item">
                                <img class="d-block" src="{{asset('assets-front')}}/images/icon/users.png" alt="image" />
                                <h3 class="mb-3">{{ $information->employes }}+</h3>
                                <p>Employees strong and growing</p>
                            </div>
                            <!---->
                            <div class="item">
                                <img class="d-block" src="{{asset('assets-front')}}/images/icon/hand.png" alt="image" />
                                <h3 class="mb-3">{{ $information->projects }}+</h3>
                                <p>Projects completed, including mega-scale undertakings</p>
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
            <h4>let’s build <span class="d-block">together</span></h4>
            <a href="{{ $socials->career_open }}" class="button button--primary bg-red hover-add-swipe">
                view career openings
            </a>
        </div>
        <div class="flex-reverse p-0">
            <div
                class="build-together-absolute-box d-flex align-items-center justify-content-center flex-column row-gap-3">
                <span>let’s talk</span>
                <h4>need to reach us?</h4>
                <a href="{{ route('front.contacts') }}" class="button button--primary bg-red hover-add-swipe">
                    Contact us
                </a>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-9 col-sm-12">
                    <div class="build-together-image-part position-relative d-flex align-items-center"
                        style="background: url({{asset('assets-front')}}/images/production/contact.PNG);">
                        <div class="text-image">
                            <h4>let’s build <span class="d-block">together</span></h4>
                            <a href="{{ $socials->career_open }}" class="button button--primary bg-red hover-add-swipe">
                                view career openings
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



