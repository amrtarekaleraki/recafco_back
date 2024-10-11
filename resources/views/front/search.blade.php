@php
    $socials = App\Models\Social::first();
@endphp

@extends('front.master')

@section('title','Search')

@section('header')
   @include('front.partials.all-pages-header')
@endsection

@section('slider')

    <section class="hero-section position-relative without-overlay position-relative d-flex flex-column align-items-center justify-content-center"
    style="background: url({{asset('assets-front')}}/images/slider/slider-three.PNG);">
    <div class="container-fluid">
        <div class="absolute-box">
        </div>
    </div>
    </section>


@endsection


@section('content')

<section class="filters-taps-section">
    <div class="container-fluid p-0">

        @if($results->isNotEmpty())
            <ul class="nav nav-tabs border-0 d-flex align-items-center justify-content-center flex-wrap">
                <li>
                    <button class="btn btn-filter-taps active" id="all"> {{ __('front.search_result') }} "{{ $query }}":</button>
                </li>
            </ul>

            <div class="tab-content" >
                <div class="row" id="parent">
                            @foreach($results as $project)
                            <div class="col-lg-4 col-md-6 col-sm-12 box  commercial">
                                <div class="filter-result-box">
                                    <div class="image">
                                        <img class="w-100 img-fluid" src="{{ asset("storage/project_image1/$project->image") }}" alt="image"/>
                                    </div>
                                    <a href="{{ route('front.singleproject',$project) }}" class="content-overlay">
                                        <p class="mb-2">
                                            {{ $project->title }}
                                        </p>
                                        <span>{{ $project->category->title }}</span>
                                    </a>
                                </div>
                            </div>
                            @endforeach
            @else
                <section class="not-found">
                    <div class="container">
                        <p> {{ __('front.no_results') }} "{{ $query }}".</p>
                    </div>
                </section>
            @endif





            </div>
        </div>
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



