@php
    $images = json_decode($product->slider_product,true);
@endphp

@extends('front.master')

@section('title',__('front.precast_tab'))

@section('header')
   @include('front.partials.header')
@endsection


@section('slider')

    <section data-aos="zoom-out-up"
    class="hero-section position-relative d-flex flex-column align-items-center justify-content-center"
    style="background: url({{asset('assets-front')}}/images/single_products/precast.jpeg);">

    <div class="container">
        <div class="text-box">
            <span class="d-block mb-2" data-aos="fade-up" data-aos-duration="1200">
                {{ __('front.precast_title') }}
            </span>
            <p class="mb-0" data-aos="fade-up" data-aos-duration="1200">
                {{ __('front.precast_subtitle') }}
            </p>
            <h3 class="mb-4" data-aos="fade-up" data-aos-duration="1200">{{ __('front.precast_desc') }}</h3>
            <div class="tags d-flex flex-wrap align-items-center gap-3 row-gap-1" data-aos="fade-up"
                data-aos-duration="1200">
                <a href="{{ asset("storage/products_pdf/$product->pdf") }}" class="button button--link hover-add-underline"  download="{{ $product->pdf }}">{{ __('front.precast_link') }}</a>
            </div>
        </div>
    </div>
    </section>


@endsection


@section('content')


             <!--text-pages-->
             <div class="text-pages">
                {{-- <div class="container">
                    <h3>OVERVIEW</h3>
                    <p>
                        <span>RECAFCO</span> has created for itself a niche market in the <span>Concrete Precast</span> business and is one of the leading companies in Kuwait with more than <span>four decades of experience</span>.
                    </p>
                    <p>
                        The Company has in its possession a <span>large specialized plant</span> equipped with all modern facilities to produce precast concrete elements. All this equipment is serviced and kept in excellent condition by RECAFCO in-house equipment service division.</p>
                    <p>
                        Our Precast Production Factory is spread over an <span>area of 100,000 m2</span> producing high capacity of Concrete Precast Elements ranging from Piles, Pipes, Pre-stressed and Post-Tensioned Beams, Fascia Panels, Dolloses and all Elements of Building including Beams, Columns, Roof Units, Walls, Floor Units and Other Units as per Design and Specifications of Clients.
                    </p>
                    <p>
                        Our <span>Precast Concrete elements</span> were supplied to build Ministries Complex, New Telecommunication Tower, Multi-storey Car Parking, Kuwait Foundation for Advancement of Sciences, Education Buildings, Houses, Electric Sub-Stations, Market Buildings, Various Headquarters Building etc. Recently we received orders for Precast Concrete Elements for Kuwait Police College, Ministry of Public Works, Council of Ministers, KOC etc.
                    </p>

                    <p>
                        Our <span> Research and Development</span> System, focuses on market requirements in continually making use of new methods and ideas for overall improvement of quality. We are meeting the demands of today and tomorrow by designing distinctive and individualized products.
                    </p>

                </div> --}}

                <div class="container">
                    <h3>{{ __('front.precast_overview') }}</h3>
                    <p>{{ __('front.precast_overview_desc1') }}</p>
                    <p>{{ __('front.precast_overview_desc2') }}</p>
                    <p>{{ __('front.precast_overview_desc3') }}</p>
                    <p>{{ __('front.precast_overview_desc4') }}</p>
                    <p>{{ __('front.precast_overview_desc5') }}</p>
                </div>


             </div>


             <!--project value-->
             <div class="project-value-swiper-slider position-relative">
                <div class="swiper-part">
                    <div class="swiper project-value">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">

                            @if(is_array($images) && count($images) > 0)
                                @foreach($images as $image)
                                    <div class="swiper-slide">
                                        <div class="swiper-image">
                                        <div class="image" style="background: url({{ asset('storage/products_slider_images/' . $image) }});"></div>
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

    @include('front.partials.footer')


@endsection



