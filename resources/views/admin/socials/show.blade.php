@extends('admin.master')

@section('title', __('keywords.show_social'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h5 page-title">{{ __('keywords.show_social') }}</h2>

                <div class="card shadow">
                    <div class="card-body">



                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="factory_location_en"></x-form-label>
                                      <p class="form-control">{{ $social->getTranslation('factory_location','en') }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="factory_location_ar"></x-form-label>
                                      <p class="form-control">{{ $social->getTranslation('factory_location','ar') }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="factory_phone"></x-form-label>
                                      <p class="form-control">{{ $social->factory_phone }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="factory_fax"></x-form-label>
                                      <p class="form-control">{{ $social->factory_fax }}</p>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="office_location_en"></x-form-label>
                                      <textarea class="form-control"> {{ $social->getTranslation('office_location','en') }} </textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="office_location_ar"></x-form-label>
                                      <textarea class="form-control"> {{ $social->getTranslation('office_location','ar') }} </textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="office_phone"></x-form-label>
                                      <p class="form-control">{{ $social->office_phone }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="office_fax"></x-form-label>
                                      <p class="form-control">{{ $social->office_fax }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="website"></x-form-label>
                                      <p class="form-control">{{ $social->website }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="comercial_no"></x-form-label>
                                      <p class="form-control">{{ $social->comercial_no }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6" style="display: none;">
                                    <div class="form-group mb-3">
                                      <x-form-label field="career_open"></x-form-label>
                                      <p class="form-control">{{ $social->career_open }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="email"></x-form-label>
                                      <p class="form-control">{{ $social->email }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="youtube"></x-form-label>
                                      <p class="form-control">{{ $social->youtube }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="linkedin"></x-form-label>
                                      <p class="form-control">{{ $social->linkedin }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="insta"></x-form-label>
                                      <p class="form-control">{{ $social->insta }}</p>
                                    </div>
                                </div>



                            </div>





                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
