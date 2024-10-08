@php
    $socials = App\Models\Social::first();
    $images = json_decode($project->slider_image,true);
@endphp


@extends('front.master')

@section('title','Single Project')

@section('header')
         @include('front.partials.header')
@endsection

@section('slider')

        <section
        class="hero-section  without-overlay position-relative d-flex flex-column align-items-center justify-content-center"
        style="background: url({{ asset("storage/project_image1/$project->image") }});">
        <div class="container">

        </div>
        </section>


@endsection


@section('content')

    <div class="projects-section">
        <div class="projects-div">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <div class="content d-flex flex-column row-gap-1">
                            <span>PROJECTS</span>
                            <h3>{{ $project->title }}</h3>
                            <span class="location">{{ $project->location }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---->
        <div class="project-category">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="project-category-item">
                            <h3 class="mb-3">CLIENT</h3>
                            <p>{{ $project->client }}</p>
                        </div>
                    </div>
                    <!---->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="project-category-item">
                            <h3 class="mb-3">CATEGORY</h3>
                            <p>{{ $project->category->title }}</p>
                        </div>
                    </div>
                    <!---->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="project-category-item">
                            <h3 class="mb-3">SCOPE</h3>
                            <p>{{ $project->product->title}}</p>
                        </div>
                    </div>
                    <!---->
                </div>
            </div>
        </div>
        <!---->
        <div class="position-relative m-4">
            <div class="container-fluid p-0">
                <div class="body-description-part absolute-position">
                    <h3 class="mb-3">{{ $project->subtitle }}</h3>
                    <p class="mb-3">
                         {{ $project->description }}
                    </p>
                    <a href="{{ route('front.projects') }}" class="button button--primary bg-red hover-add-swipe">
                        all projects
                    </a>
                </div>
                <div class="row align-items-center justify-content-end">
                    <div class="col-lg-7 col-md-10 p-0">
                        <div class='body-image-part'>
                            <img class="w-100 d-block img-fluid" src="{{ asset("storage/project_image2/$project->image2") }}"
                                alt="image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--project value-->
        <div class="project-value-swiper-slider position-relative">
            <div class="title-swiper text-center">
                <div class="counting-div d-flex align-items-center gap-3 justify-content-center">
                    <div class="counting" data-count="{{ $project->value }}">
                        0
                    </div>
                    <span>M</span>
                </div>
                <p>Project Value</p>
            </div>
            <div class="swiper-part">
                <div class="swiper project-value">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slide -->
                        @if(is_array($images) && count($images) > 0)
                            @foreach($images as $image)
                                <div class="swiper-slide">
                                    <div class="swiper-image">
                                        <div class="image" style="background: url({{ asset('storage/project_slider/' . $image) }});"></div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                    <div class="swiper-pagination position-relative"></div>
                    <div class="swiper-button-prev project-value-arrow">
                        <img src="{{asset('assets-front')}}/images/icon/arrow-left.svg" alt="icon"/>
                    </div>
                    <div class="swiper-button-next project-value-arrow">
                        <img src="{{asset('assets-front')}}/images/icon/arrow-right.svg" alt="icon"/>
                    </div>
                </div>
            </div>
        </div>
        <!--related Project-->
        <div class="related-project">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <h5 class="title">RELATED PROJECTS</h5>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 position-relative">
                        <div class="d-flex flex-wrap align-items-center justify-content-between row-gap-3">
                            <a href="{{ route('front.projects') }}" class="button button--primary bg-red hover-add-swipe">
                                all projects
                            </a>
                            <div class="arrow">
                                <div class="swiper-button-next position-relative arrow-related-proj">
                                    <img src="{{asset('assets-front')}}/images/icon/arrow-right.svg" alt="icon" />
                                </div>
                                <div class="swiper-button-prev position-relative arrow-related-proj">
                                    <img src="{{asset('assets-front')}}/images/icon/arrow-left.svg" alt="icon" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Swiper -->
                <div class="swiper mySwiper related-project">
                    <div class="swiper-wrapper">

                        @if (count($related) > 0)
                            @foreach ($related as $relat)
                                <div class="swiper-slide">
                                    <div class="slider-item">
                                        <div class="slider-body mb-4">
                                            <img class="img-fluid" src="{{ asset("storage/project_image1/$relat->image") }}" alt="image" />
                                        </div>
                                        <!---->
                                        <div class="slider-footer">
                                            <h3>
                                                {{ $relat->title }}
                                            </h3>
                                            <p>
                                                {{ $relat->location }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif





                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---->
    <section class="build-together position-relative">
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





