@php
    $images = json_decode($product->slider_product,true);
@endphp

@extends('front.master')

@section('title',__('front.holle_tab'))

@section('header')
   @include('front.partials.header')
@endsection


@section('slider')

    <section data-aos="zoom-out-up"
    class="hero-section position-relative d-flex flex-column align-items-center justify-content-center"
    style="background: url({{asset('assets-front')}}/images/single_products/holle.png);">

    <div class="container">
        <div class="text-box">
            <span class="d-block mb-2" data-aos="fade-up" data-aos-duration="1200">
                {{ __('front.hollowcore_title') }}
            </span>
            <p class="mb-0" data-aos="fade-up" data-aos-duration="1200">
                {{ __('front.hollowcore_subtitle') }}
            </p>
            <h3 class="mb-4" data-aos="fade-up" data-aos-duration="1200">{{ __('front.hollowcore_desc') }}</h3>
            <div class="tags d-flex flex-wrap align-items-center gap-3 row-gap-1" data-aos="fade-up"
                data-aos-duration="1200">
                <a href="{{ asset("storage/products_pdf/$product->pdf") }}" class="button button--link hover-add-underline"  download="{{ $product->pdf }}">{{ __('front.hollowcore_link') }}</a>
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
                        RECAFCO has established recently a new <span>'Hollow core' production facility</span> to supply the construction needs in the <span>Kuwait market</span> such as hollow core Slabs, Beams, Column, Wall panels and Wide range of architectural finishes.
                    </p>
                    <h4>What is Hollowcore?</h4>
                    <p>
                        A hollow core slab, also known as <span>voided slab</span>, hollow core plank or simply a concrete plank is a precast slab of prestressed concrete typically used in the construction of floors in <span>multi-story apartment buildings</span>.
                    <p>
                        The precast concrete slab has <span>tubular voids</span> extending the full length of the slab, with a diameter equal to the 2/3-3/4 of the slab. This makes the slab much <span>lighter than a massive solid concrete slab</span> of equal <span>thickness or strength.</span> The reduced weight can lower the costs of transportation as well as concrete costs.                    </p>

                    <p>
                        Prestressed hollow core floors have <span>longitudinal cores to reduce the weight of the floor.</span> The elements are available at different depths to satisfy the needs for span and loading.                    </p>

                    <h4>Hollowcore Advantages:</h4>
                    <ul>
                        <li>
                            <p>The Speed of erection </p>
                        </li>
                        <li>
                            <p>
                                The Heavyweight capacity
                            </p>
                        </li>
                        <li>
                            <p>
                                Exceptional fire resistance
                            </p>
                        </li>
                        <li>
                            <p>
                                Long Spans
                            </p>
                        </li>
                        <li>
                            <p>
                                Durability
                            </p>
                        </li>
                        <li>
                            <p>
                                lower self-weight
                            </p>
                        </li>
                        <li>
                            <p>
                                Flexibility of design
                            </p>
                        </li>
                        <li>
                            <p>
                                Cost-effective construction
                            </p>
                        </li>
                        <li>
                            <p>
                                Structural efficiency
                            </p>
                        </li>
                        <li>
                            <p>
                                Meet any structural design
                            </p>
                        </li>
                        <li>
                            <p>
                                Effective Transportation
                            </p>
                        </li>
                    </ul>

                </div> --}}

                <div class="container">
                    <h3>{{ __('front.hollowcore_overview') }}</h3>
                    <p>{{ __('front.hollowcore_overview_desc') }}</p>

                    <h4>{{ __('front.hollowcore_what_is') }}</h4>
                    <p>{{ __('front.hollowcore_what_is_desc') }}</p>
                    <p>{{ __('front.hollowcore_description') }}</p>
                    <p>{{ __('front.hollowcore_prestressed') }}</p>

                    <h4>{{ __('front.hollowcore_advantages') }}</h4>
                    <ul>
                        <li><p>{{ __('front.hollowcore_advantage_1') }}</p></li>
                        <li><p>{{ __('front.hollowcore_advantage_2') }}</p></li>
                        <li><p>{{ __('front.hollowcore_advantage_3') }}</p></li>
                        <li><p>{{ __('front.hollowcore_advantage_4') }}</p></li>
                        <li><p>{{ __('front.hollowcore_advantage_5') }}</p></li>
                        <li><p>{{ __('front.hollowcore_advantage_6') }}</p></li>
                        <li><p>{{ __('front.hollowcore_advantage_7') }}</p></li>
                        <li><p>{{ __('front.hollowcore_advantage_8') }}</p></li>
                        <li><p>{{ __('front.hollowcore_advantage_9') }}</p></li>
                        <li><p>{{ __('front.hollowcore_advantage_10') }}</p></li>
                        <li><p>{{ __('front.hollowcore_advantage_11') }}</p></li>
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
                                            <img class="image" src="{{ asset('storage/products_slider_images/' . $image) }}" alt="Slider Image" loading="lazy" class="swiper-image">
                                            {{-- <div class="image" style="background: url({{ asset('storage/products_slider_images/' . $image) }});"></div> --}}
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



