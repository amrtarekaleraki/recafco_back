@extends('front.master')

@section('title','Construction')

@section('construction-active','active')

@section('header')
   @include('front.partials.all-pages-header')
@endsection

@section('slider')

    <section class="hero-section position-relative d-flex flex-column align-items-center justify-content-center"
    style="background: url({{asset('assets-front')}}/images/global-image/construction-hero-section.PNG);">
    <div class="container">
        <div class="text-box" data-aos="fade-up">
            <span class="d-block mb-2">
                it’s more than construction
            </span>
            <p class="mb-0">
                A history of
            </p>
            <h3 class="mb-4">construction excellence</h3>
            <div class="tags d-flex flex-wrap align-items-center gap-3 row-gap-1">
                @foreach($categories as $category)
                   <a href="#" class="button button--link hover-add-underline">{{ $category->title }}</a>
                @endforeach
            </div>
        </div>
    </div>
    </section>


@endsection


@section('content')

    <section class="page-layout-with-bg">
        <div class="construction-excellence">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6 col-md-12">
                        <div class="subtitle">
                            <h5 class="mb-3">CONSTRUCTION EXCELLENCE</h5>
                            <p class="mb-2">
                                <span>RECAFCO's</span> commitment to excellence shines through in our cost-effective
                                projects, delivered without sacrificing <span>quality</span>, <span>schedule</span>, or
                                <span>design</span>.
                            </p>
                            <span class="d-block description mb-3">
                                Our success is fueled by a diverse team of skilled professionals and experienced
                                leadership.
                            </span>
                            <a href="{{ route('front.about') }}"
                                class="button button--primary bg-red hover-add-swipe d-flex align-items-center justify-content-center">LEARN
                                MORE</a>
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
                    <a href="{{ route('front.projects') }}">
                        <span class="portfolio-type">
                            <img width="2500" height="1000" src="{{ asset("storage/categories/$category->image") }}">
                            <span class="type">{{ $category->title }}</span>
                        </span>
                    </a>
                @endforeach

            </div>
        </div>
        <!---->
        <div class="construction-excellence partner" data-aos="fade-up">
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
                            <h5 class="mb-3">TRUSTED PARTNER</h5>
                            <p class="mb-2">
                                As a <span>Class 1 contractor</span> for general construction, we've earned our
                                reputation as a leading force in Kuwait's construction industry.
                            </p>
                            <span class="d-block description mb-3">
                                Our integrated engineering solutions and proven expertise have enabled us to
                                successfully undertake major projects across the country.
                            </span>
                            <a href="{{ route('front.about') }}"
                                class="button button--primary bg-red hover-add-swipe d-flex align-items-center justify-content-center">About
                                us</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!---->
    </section>

    @include('front.partials.footer')


@endsection



