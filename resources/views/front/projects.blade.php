@php
    $socials = App\Models\Social::first();
@endphp

@extends('front.master')

@section('title','Projects')

@section('projects-active','active')

@section('header')
      @include('front.partials.header')
@endsection

@section('slider')

<section class="home-main-slider position-relative">
    <!-- Swiper -->
    <div class="swiper mySwiper main-swiper">
        <div class="swiper-wrapper">

            @if (count($projects) > 0)
            @foreach ($projects as $project)
                <div class="swiper-slide position-relative">
                    <div class="image-slider">
                        <img class="d-block w-100 img-fluid" src="{{ asset("storage/project_image1/$project->image") }}" alt="image" />
                    </div>
                    <div class="content-slider">
                        <div class="container-fluid">
                            <a href="{{ route('front.singleproject',$project) }}" class="button button--link hover-add-underline">
                                {{-- {{ $project->product->title }}, --}}
                                <span> <span>{{ $project->title }}</span></span>
                                <img src="{{asset('assets-front')}}/images/icon/danger-arrow.svg" alt="icon" />
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif



        </div>

        {{-- <div class="swiper-button-next main-swiper-arrow">
            <img src="{{asset('assets-front')}}/images/icon/arrow-right.svg" alt="images" />
        </div>
        <div class="swiper-button-prev main-swiper-arrow">
            <img src="{{asset('assets-front')}}/images/icon/arrow-left.svg" alt="images" />
        </div> --}}
    </div>
</section>


@endsection


@section('content')

<section class="filters-taps-section">
    <div class="container-fluid p-0">
        <ul class="nav nav-tabs border-0 d-flex align-items-center justify-content-center flex-wrap">
            <li>
                <button class="btn btn-filter-taps active" id="all">{{ __('front.all_projects') }}</button>
            </li>
            @foreach($categories as $category)
                @if(isset($projectCounts[$category->id]) && $projectCounts[$category->id] > 0)
                    <li>
                        <button class="btn btn-filter-taps" id="{{ strtolower(str_replace(' ', '-', $category->title)) }}">
                            {{ ucfirst($category->title) }}
                        </button>
                    </li>
                @endif
            @endforeach
        </ul>

        <div class="tab-content">
            <div class="row" id="parent">
                @foreach($projects as $project)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3 box {{ strtolower(str_replace(' ', '-', $project->category->title)) }}">
                        <div class="filter-result-box">
                            <div class="image">
                                <img class="w-100 img-fluid" src="{{ asset("storage/project_image1/$project->image") }}" alt="image" />
                            </div>
                            <a href="{{ route('front.singleproject',$project) }}" class="content-overlay">
                                <p class="mb-2">{{ $project->title }}</p>
                                <span>{{ ucfirst($project->category->title) }}</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script>
    // JavaScript to filter projects
    document.querySelectorAll('.btn-filter-taps').forEach(button => {
    button.addEventListener('click', () => {
        const category = button.id;
        const projects = document.querySelectorAll('.box');

        projects.forEach(project => {
            // Show all projects if 'all' is selected
            if (category === 'all') {
                project.style.display = 'block';
            } else {
                // Show or hide projects based on their category (replace spaces with dashes)
                project.style.display = project.classList.contains(category) ? 'block' : 'none';
            }
        });

        // Update active button
        document.querySelectorAll('.btn-filter-taps').forEach(btn => {
            btn.classList.remove('active');
        });
        button.classList.add('active');
    });
});
</script>

    <!---->
    <section class="build-together position-relative">
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

    @include('front.partials.dark-footer')


@endsection



