@php
    $socials = App\Models\Social::first();
@endphp



@extends('front.master')

@section('title',__('front.notfound'))

@section('header')
     @include('front.partials.header')
@endsection

@section('slider')

        <section data-aos="zoom-out-up" class="hero-section position-relative d-flex flex-column align-items-center justify-content-center"
        style="background: url({{asset('assets-front')}}/images/global-image/contact-hero.PNG);">
        <div class="container">
            <div class="text-box">
                <span class="d-block mb-2">
                    {{ __('front.contact_title') }}
                </span>
                <p class="mb-0">
                    {{ __('front.contact_subtitle') }}
                </p>
                <h3 class="mb-4">{{ __('front.contact_desc') }}</h3>
                <div class="tags d-flex flex-wrap align-items-center gap-3 row-gap-1">
                    <a href="#" class="button button--link hover-add-underline">{{ __('front.contact_message_header') }}</a>
                </div>
            </div>
        </div>
        </section>


@endsection

@section('content')
    <section class="not-found">
        <div class="container text-center">
            <div class="error-code">404</div>
            <div class="error-message">{{ __('front.notfound_msg') }}</div>
        </div>
    </section>


        <!---->
    <section class="build-together position-relative bg-white">
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
    <!---->

    @include('front.partials.footer')

@endsection








