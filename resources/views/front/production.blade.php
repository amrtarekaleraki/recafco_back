@php
    $socials = App\Models\Social::first();
@endphp

@extends('front.master')

@section('title','Production')

@section('production-active','active')

@section('header')
   @include('front.partials.all-pages-header')
@endsection

@section('slider')

        <section class="hero-section position-relative d-flex flex-column align-items-center justify-content-center"
        style="background: url({{asset('assets-front')}}/images/global-image/proguction-hero.PNG);">
        <div class="container">
            <div class="text-box" data-aos="fade-up">
                <span class="d-block mb-2">
                    {{ __('front.production_title') }}
                </span>
                <p class="mb-0">
                    {{ __('front.production_subtitle') }}
                </p>
                <h3 class="mb-4">{{ __('front.production_desc') }}</h3>
                <div class="tags d-flex flex-wrap align-items-center gap-3 row-gap-1">
                    @foreach($products as $product)
                       <a href="#" class="button button--link hover-add-underline">{{ $product->title }}</a>
                    @endforeach

                </div>
            </div>
        </div>
        </section>


@endsection


@section('content')

        <section class="page-layout-with-bg">
            <div class="overview">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-12 mb-5">
                            <h4 class="mb-4">{{ __('front.production_OVERVIEW') }}</h4>
                            <p>
                                {{ __('front.production_OVERVIEW_desc') }}
                            </p>
                        </div>

                        @foreach($products as $product)
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="overview-item">
                                    <div class="body-part d-flex align-items-center justify-content-center h-100">
                                        <img class="w-100 img-fluid" src="{{ asset("storage/products_images/$product->image") }}" alt="image" />
                                    </div>
                                    <div class="footer-part">
                                        <p>{{ $product->title }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach



                    </div>
                </div>
            </div>
            <!---->
            <div class="overview-items">
                <div class="container">

                    @foreach($products as $product)
                        <div class="row align-items-center">

                            <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                                <div class="overview-items-details">
                                    <h4 class="mb-3">{{ $product->title }}</h4>
                                    <p class="mb-3">
                                        {{ $product->description }}
                                    </p>
                                    <a href="{{ asset("storage/products_pdf/$product->pdf") }}" class="button button--primary bg-red hover-add-swipe" download="{{ $product->pdf }}">
                                        {{ __('front.production_download') }} {{ $product->title }}  {{ __('front.production_catalog') }}
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                                <div
                                    class='container_sec overview-items-image d-flex align-items-center justify-content-center'>
                                    <div class='reveal'>
                                        <img class="d-block" src="{{ asset("storage/products_images/$product->image") }}" alt="img" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
            <!---->
            <section class="build-together bg-transparent position-relative">
                <div class="mobile-upper-text align-items-center justify-content-center flex-column row-gap-3">
                    <h4>{{ __('front.lets_build') }}<span class="d-block">{{ __('front.together') }}</span></h4>
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

    </section>

    @include('front.partials.footer')


@endsection



