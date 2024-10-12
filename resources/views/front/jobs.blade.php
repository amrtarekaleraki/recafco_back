@php
    $socials = App\Models\Social::first();
    $jobs = App\Models\Job::get();
@endphp

@extends('front.master')

<style>
    .job_title
    {
        margin-bottom: 10px;
        text-decoration: underline;
        text-decoration-color: #767577 !important;
        text-decoration-thickness: 2px;
        font-weight:700;
        font-size:32px;
        line-height: 50px;
    }
    .job_link
    {
        font-size: 1.15rem;
        color: #393939;
        font-family: "avenir-bold", sans-serif;
        text-transform: uppercase;
    }

</style>


@section('title',__('front.career_openings'))

@section('header')
    @include('front.partials.header')
@endsection

@section('slider')

        <section data-aos="zoom-out-up" class="hero-section position-relative d-flex flex-column align-items-center justify-content-center"
        style="background: url({{asset('assets-front')}}/images/global-image/contact-hero.PNG);">
        <div class="container">
            <div class="text-box">
                <span class="d-block mb-2">
                    {{ __('front.jobs_title') }}
                </span>
                <p class="mb-0">
                    {{ __('front.jobs_subtitle') }}
                </p>
                <h3 class="mb-4">{{ __('front.jobs_desc') }}</h3>
                <div class="tags d-flex flex-wrap align-items-center gap-3 row-gap-1">
                    <a href="#" class="button button--link hover-add-underline">{{ __('front.jobs_message_header') }}</a>
                </div>
            </div>
        </div>
        </section>


@endsection


@section('content')

        <section class="bg-white">
            <div class="overview padding-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-5">
                            <h4 class="mb-4">{{ __('front.jobs_overview') }}</h4>
                            <p>
                                {{ __('front.jobs_description') }}
                            </p>
                        </div>


                        @if (count($jobs) > 0)
                            @foreach($jobs as $job)
                                <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-center mb-5">
                                    <div class="overview-item">
                                        <div class="footer-part job_title">
                                            <p style="text-transform:capitalize;">{{ $job->title }}</p>
                                        </div>

                                        <div class="footer__top d-flex align-items-center flex-wrap gap-5 row-gap-3">
                                            <a href="{{ url($job->link) }}" target="_blank" class="button button--link hover-add-underline d-flex align-items-center gap-3 job_link">
                                                <span>{{ __('front.jobs_apply') }}</span>
                                                {{-- <img src="{{asset('assets-front')}}/images/icon/danger-arrow.svg" alt="icon" /> --}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif



                    </div>
                </div>
            </div>
            <!---->

            <section class="build-together padding-section bg-white position-relative">
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



