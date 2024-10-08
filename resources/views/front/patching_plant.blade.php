@php
    $images = json_decode($product->slider_product,true);
@endphp

@extends('front.master')

@section('title',__('front.planet_tab'))

@section('header')
   @include('front.partials.header')
@endsection


@section('slider')

    <section data-aos="zoom-out-up"
    class="hero-section position-relative d-flex flex-column align-items-center justify-content-center"
    style="background: url({{asset('assets-front')}}/images/single_products/planet.jpeg);">

    <div class="container">
        <div class="text-box">
            <span class="d-block mb-2" data-aos="fade-up" data-aos-duration="1200">
                {{ __('front.plant_title') }}
            </span>
            <p class="mb-0" data-aos="fade-up" data-aos-duration="1200">
                {{ __('front.plant_subtitle') }}
            </p>
            <h3 class="mb-4" data-aos="fade-up" data-aos-duration="1200"> {{ __('front.plant_desc') }}</h3>
            <div class="tags d-flex flex-wrap align-items-center gap-3 row-gap-1" data-aos="fade-up"
                data-aos-duration="1200">
                <a href="{{ asset("storage/products_pdf/$product->pdf") }}" class="button button--link hover-add-underline"  download="{{ $product->pdf }}"> {{ __('front.plant_link') }}</a>
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
                        <span>Our Batching Plant</span>  is equipped with <span>two fully computerized pan mixers</span> that separate aggregate bins and spare bins. Chilled water supply provision is also available for hot weather concreting. Batching plant scales are periodically calibrated.
                    </p>
                    <h4>CONCRETE CIRCULATION</h4>
                    <p>
                        Concrete from the batching plant is transported by means of <span>3 concrete cars</span>  traveling on the magnetic monorail to the production halls by discharging at three <span>3 fixed points</span> Concrete from these discharge points is transported by buckets using overhead cranes to pouring points in different moulds. In case of emergency, when the concrete cars are not operational, forklift/transit mixers are used to convey concrete from the batching plant to the different production halls.
                    </p>
                    <h4>CURING SYSTEM</h4>
                    <p>
                        We have an accelerated heat curing facility using both <span> steam and circulated heated oil</span> from central boilers
                    </p>
                    <h4>STORAGE AND HANDLING</h4>
                    <p>
                        Storage yard has provision for <span>horizontal and vertical stacking</span> of produced precast concrete elements. Produced elements are transported by means of trailers to store under the <span>gantry cranes</span> before dispatching to sites.
                    </p>
                    <h4>LABORATORY</h4>
                    <p>
                        It is equipped with 3 cube crushing machines, an oven, weighing balances, sieves, concrete workability measuring equipment chemical analysis apparatus, etc. to perform different types of <span>quality control tests</span>.
                    </p>

                </div> --}}

                <div class="container">
                    <h3>{{ __('front.plant_overview') }}</h3>
                    <p>
                        {{ __('front.plant_overview_desc') }}
                    </p>

                    <h4>{{ __('front.plant_circulation') }}</h4>
                    <p>
                        {{ __('front.plant_circulation_desc') }}
                    </p>

                    <h4>{{ __('front.plant_curing') }}</h4>
                    <p>
                        {{ __('front.plant_curing_desc') }}
                    </p>

                    <h4>{{ __('front.plant_storage') }}</h4>
                    <p>
                        {{ __('front.plant_storage_desc') }}
                    </p>

                    <h4>{{ __('front.plant_lab') }}</h4>
                    <p>
                        {{ __('front.plant_lab_desc') }}
                    </p>
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



