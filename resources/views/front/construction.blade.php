@extends('front.master')

@section('title','Construction')

@section('construction-active','active')

@section('header')
   @include('front.partials.all-pages-header')
@endsection

@section('slider')

    <section data-aos="zoom-out-up" class="hero-section position-relative d-flex flex-column align-items-center justify-content-center"
    style="background: url({{asset('assets-front')}}/images/global-image/construction-hero-section.PNG);">
    <div class="container">
        <div class="text-box">
            <span class="d-block mb-2">
                {{ __('front.construction_title') }}
            </span>
            <p class="mb-0">
                {{ __('front.construction_subtitle') }}
            </p>
            <h3 class="mb-4">{{ __('front.construction_desc') }}</h3>
            <div class="tags d-flex flex-wrap align-items-center gap-3 row-gap-1">
                @foreach($categories as $category)
                   <a href="#{{ $category->id }}" class="button button--link hover-add-underline">{{ $category->title }}</a>
                @endforeach
            </div>
        </div>
    </div>
    </section>


@endsection


@section('content')

    <section class="construction-page">
        <div class="construction-excellence padding-section">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6 col-md-12">
                        <div class="subtitle">
                            <h5 class="mb-3">{{ __('front.construction_first_title') }}</h5>
                            <p class="mb-2">
                                {{ __('front.construction_first_desc') }}
                            </p>
                            <span class="d-block description mb-3">

                            </span>
                            <a href="{{ route('front.about') }}"
                                class="button button--primary bg-red hover-add-swipe d-flex align-items-center justify-content-center">{{ __('front.construction_learn_more') }}</a>
                        </div>

                    </div>
                    <!---->
                    <div class="col-lg-6 col-md-12">
                        <div class='container_sec image-section'>
                            <div class='reveal'>
                                <img class="img-fluid w-100" src="{{asset('assets-front')}}/images/global-image/construction.png"
                                    alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---->
        <div class="section-portfolio position-relative w-100" data-aos="fade-up">
            <div class="portfolio-items">

                @foreach($categories as $category)
                    <a href="{{ route('front.projects') }}" id="{{ $category->id }}">
                        <span class="portfolio-type">
                            <img width="2500" height="1000" src="{{ asset("storage/categories/$category->image") }}">
                            <span class="type">{{ $category->title }}</span>
                        </span>
                    </a>
                @endforeach

            </div>
        </div>
        <!---->
        <div class="construction-excellence partner padding-section" data-aos="fade-up">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class='container_sec image-section'>
                            <div class='reveal'>
                                <img class="img-fluid w-100" src="{{asset('assets-front')}}/images/global-image/construction.png"
                                    alt="image" />
                            </div>
                        </div>
                    </div>
                    <!---->
                    <div class="col-lg-6 col-md-12">
                        <div class="subtitle">
                            <h5 class="mb-3">{{ __('front.construction_trusted_title') }}</h5>
                            <p class="mb-2">
                                {{ __('front.construction_trusted_desc') }}
                            </p>
                            <a href="{{ route('front.about') }}"
                                class="button button--primary bg-red hover-add-swipe d-flex align-items-center justify-content-center">{{ __('front.construction_trusted_about') }}</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!---->
    </section>

    @include('front.partials.footer')


@endsection



