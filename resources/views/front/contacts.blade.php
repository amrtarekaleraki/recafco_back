@php
    $socials = App\Models\Social::first();
@endphp

@extends('front.master')

@section('title','Contacts')

@section('contacts-active','active')

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

<div class="projects-section bg-white">
    <!--how can we help?-->
    <div class="help-section">
        <h4 class="text-center title-part ">how can we help?</h4>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="help-details-item">
                        <p>FACTORY & HEAD OFFICE</p>
                        <div class="mb-3">
                            <span class="d-block">{{ $socials->factory_location }}</span>

                        </div>
                        <div class="d-flex align-items-center gap-4">
                            <span>Tel</span>
                            <span>: {{ $socials->factory_phone}}</span>
                        </div>
                        <div class="d-flex align-items-center gap-4">
                            <span>Fax</span>
                            <span>: {{ $socials->factory_fax}}</span>
                        </div>
                    </div>
                    <div class="help-details-item">
                        <p>KUWAIT CITY OFFICE</p>
                        <div class="mb-3">
                            <span class="d-block">{{ $socials->office_location }}</span>
                        </div>
                        <div class="d-flex align-items-center gap-4">
                            <span>Tel</span>
                            <span>: {{ $socials->office_phone }}</span>
                        </div>
                        <div class="d-flex align-items-center gap-4">
                            <span>Fax</span>
                            <span>: {{ $socials->office_fax }}</span>
                        </div>
                    </div>
                </div>
                {{-- start form --}}
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <x-success-alert></x-success-alert>
                    <form id="yourFormId" action="{{ route('admin.contacts.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="form-label">FIRST NAME<span>*</span></label>
                                <input type="text" name="f_name" class="form-control">
                                <x-validation-error field="f_name"></x-validation-error>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="form-label">LAST NAME<span>*</span></label>
                                <input type="text" name="l_name" class="form-control">
                                <x-validation-error field="l_name"></x-validation-error>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label">EMAIL<span>*</span></label>
                                <input type="text" name="email" class="form-control">
                                <x-validation-error field="email"></x-validation-error>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label">PHONE<span>*</span></label>
                                <input type="text" name="phone" class="form-control">
                                <x-validation-error field="phone"></x-validation-error>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label">SUBJECT<span>*</span></label>
                                <input type="text" name="subject" class="form-control">
                                <x-validation-error field="subject"></x-validation-error>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label">MESSAGE<span>*</span></label>
                                <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <x-validation-error field="message"></x-validation-error>
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="#" id="submit-form" class="button button--primary bg-red hover-add-swipe">
                                submit
                            </a>
                        </div>
                    </div>
                    </form>
                </div>
                {{-- end form --}}

                <script>
                    document.getElementById('submit-form').addEventListener('click', function(e) {
                        e.preventDefault(); // Prevent the default anchor behavior
                        document.getElementById('yourFormId').submit(); // Replace 'yourFormId' with the actual ID of your form
                    });
                </script>

            </div>
        </div>
    </div>
    <!---->
    <div class="project-category">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="project-category-item">
                        <h3 class="mb-3">Email</h3>
                        <p>
                            <a href="#">{{ $socials->email }}</a>
                        </p>
                    </div>
                </div>
                <!---->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="project-category-item">
                        <h3 class="mb-3">Commercial No.</h3>
                        <p>{{ $socials->comercial_no }}</p>
                    </div>
                </div>
                <!---->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="project-category-item">
                        <h3 class="mb-3">Website</h3>
                        <p>
                            <a href="{{ route('front.index') }}">
                                {{ $socials->website }}
                            </a>
                        </p>
                    </div>
                </div>
                <!---->
            </div>
        </div>
    </div>

    <!---->
    <div class="container">
        <div class="row">
            <div class="responsive-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d446665.09055372735!2d48.7405997109375!3d29.000080300000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf010fe06d62b9%3A0x399152989b9f1574!2s(RECAFCO)%20Real%20Estate%20Construction%20%26%20Fabrication%20Co.!5e0!3m2!1sar!2seg!4v1728179909617!5m2!1sar!2seg" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!---->
<section class="build-together position-relative bg-white">
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

    @include('front.partials.footer')


@endsection



