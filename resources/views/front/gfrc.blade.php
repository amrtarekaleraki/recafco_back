@php
    $images = json_decode($product->slider_product,true);
@endphp

@extends('front.master')

@section('title',__('front.grc_tab'))

@section('header')
   @include('front.partials.header')
@endsection


@section('slider')

    <section data-aos="zoom-out-up"
    class="hero-section position-relative d-flex flex-column align-items-center justify-content-center"
    style="background: url({{asset('assets-front')}}/images/single_products/grc.jpeg);">

    <div class="container">
        <div class="text-box">
            <span class="d-block mb-2" data-aos="fade-up" data-aos-duration="1200">
                {{ __('front.grc_title') }}
            </span>
            <p class="mb-0" data-aos="fade-up" data-aos-duration="1200">
                {{ __('front.grc_subtitle') }}
            </p>
            <h3 class="mb-4" data-aos="fade-up" data-aos-duration="1200">{{ __('front.grc_desc') }}</h3>
            <div class="tags d-flex flex-wrap align-items-center gap-3 row-gap-1" data-aos="fade-up"
                data-aos-duration="1200">
                <a href="{{ asset("storage/products_pdf/$product->pdf") }}" class="button button--link hover-add-underline"  download="{{ $product->pdf }}">{{ __('front.grc_link') }}</a>
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
                        RECAFCO has established its own production facility to supply <span>high-quality</span> GRC (Glassfibre Reinforced Concrete) products to the <span> Kuwait market</span>. Building upon its core capabilities as a respected producer of Precast Concrete, RECAFCO is now committed to offering a wide range of products utilizing the inherent strength and lower element weight properties of GRC.
                    </p>



                    <h4>What is G.R.C?</h4>
                    <p>
                        GRC is a composite material using a <span>cement/sand</span> mix together with a <span>plasticizer</span> and <span>polymer</span> curing additive. This material is then either sprayed or cast with an Alkali Resistant Glassfibre which is distributed throughout the matrix. The addition of the Glassfibre imparts tensile properties to the material which is lacking in concrete alone. GRC has been successfully used for a wide variety of applications in Kuwait going back more than <span>4 decades</span>.
                    </p>

                    <p>
                        RECAFCO has acquired the latest machinery and innovations for GRC <span>production</span> and mould <span>fabrication</span>. These will allow digitized designs to be directly transferred to the master mould and finished product. This, coupled with the engagement of <span>experienced professionals</span> from the GRC Industry, will help us to achieve our goal become the leading producer of high-quality GRC in Kuwait.
                    </p>

                    <h4>Our Production</h4>
                    <ul>
                        <li>
                            <p>
                                <span>High-quality, lightweight</span> cladding panels with the capability to provide a highly detailed surface design and texture. The architect is able to realize complex and decorative forms in his design which can be faithfully and cost-effectively executed with this innovative material. Utilizing a steel backup system, <span>large panels</span> can be produced  up to 6 x 3 meters can be achieved. </p>
                        </li> <br><br>
                        <li>
                            <p>
                                <span>Intricate screen panels</span> and <span>decorative elements</span> particularly traditional patterned sunscreens for daylight control of buildings. Panels can be used for purely decorative elements on building <span>facades</span> or boundary walls
                            </p>
                        </li><br><br>
                        <li>
                            <p>
                                <span>Civil Engineering application</span> – drainage elements, permanent formwork for bridge structures
                            </p>
                        </li><br><br>
                        <li>
                            <p>
                                <span>Hard-landscaping</span> features to enhance the urban environment - this includes planters, decorative screens, and rock-scape features.
                            </p>
                        </li>
                    </ul>

                </div> --}}

                <div class="container">
                    <h3>{{ __('front.grc_overview') }}</h3>
                    <p>
                        {{ __('front.grc_overview_desc') }}
                    </p>

                    <h4>{{ __('front.grc_what_is') }}</h4>
                    <p>
                        {{ __('front.grc_what_is_desc') }}
                    </p>

                    <p>
                        {{ __('front.grc_production_desc') }}
                    </p>

                    <h4>{{ __('front.grc_our_production') }}</h4>
                    <ul>
                        <li>
                            <p>{{ __('front.grc_high_quality') }}</p>
                        </li>
                        <br><br>
                        <li>
                            <p>{{ __('front.grc_intricate_screen') }}</p>
                        </li>
                        <br><br>
                        <li>
                            <p>{{ __('front.grc_civil_app') }}</p>
                        </li>
                        <br><br>
                        <li>
                            <p>{{ __('front.grc_landscaping') }}</p>
                        </li>
                    </ul>
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



