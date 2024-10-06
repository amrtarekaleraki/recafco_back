@extends('front.master')

@section('title','Not Found')

@section('header')
   @include('front.partials.all-pages-header')
@endsection

@section('slider')

        <section class="hero-section position-relative d-flex flex-column align-items-center justify-content-center"
        style="background: url({{asset('assets-front')}}/images/global-image/contact-hero.PNG);">
        <div class="container">
            <div class="text-box" data-aos="fade-up">
                <span class="d-block mb-2">
                    contact us
                </span>
                <p class="mb-0">
                    get in touch
                </p>
                <h3 class="mb-4">how can we help?</h3>
                <div class="tags d-flex flex-wrap align-items-center gap-3 row-gap-1">
                    <a href="#" class="button button--link hover-add-underline">Send a Message Now</a>
                </div>
            </div>
        </div>
        </section>


@endsection


@section('content')

    <section class="not-found">
        <div class="container">
            <p>Sorry, no results found.</p>
        </div>
    </section>


        <!---->
        <section class="build-together position-relative bg-white">
            <div class="mobile-upper-text align-items-center justify-content-center flex-column row-gap-3">
                <h4>let’s build <span class="d-block">together</span></h4>
                <a href="help.html" class="button button--primary bg-red hover-add-swipe">
                    view career openings
                </a>
            </div>
            <div class="flex-reverse p-0">
                <div
                    class="build-together-absolute-box d-flex align-items-center justify-content-center flex-column row-gap-3">
                    <span>let’s talk</span>
                    <h4>need to reach us?</h4>
                    <a href="help.html" class="button button--primary bg-red hover-add-swipe">
                        Contact us
                    </a>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-9 col-sm-12">
                        <div class="build-together-image-part position-relative d-flex align-items-center"
                            style="background: url({{asset('assets-front')}}/images/production/contact.PNG);">
                            <div class="text-image">
                                <h4>let’s build <span class="d-block">together</span></h4>
                                <a href="help.html" class="button button--primary bg-red hover-add-swipe">
                                    view career openings
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



