@extends('admin.master')

@section('title', __('keywords.add_new_social'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h5 page-title">{{ __('keywords.add_new_social') }}</h2>

                <div class="card shadow">
                    <div class="card-body">

                        <form action="{{ route('admin.socials.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class="col-md-6">
                                  <div class="form-group mb-3">
                                    <x-form-label field="factory_location_en"></x-form-label>
                                    <input type="text" name="factory_location" class="form-control" >
                                    <x-validation-error field="factory_location"></x-validation-error>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="factory_location_ar"></x-form-label>
                                      <input type="text" name="factory_location_ar" class="form-control">
                                      <x-validation-error field="factory_location_ar"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="factory_phone"></x-form-label>
                                      <input type="text" name="factory_phone" class="form-control" >
                                      <x-validation-error field="factory_phone"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="factory_fax"></x-form-label>
                                      <input type="text" name="factory_fax" class="form-control" >
                                      <x-validation-error field="factory_fax"></x-validation-error>
                                    </div>
                                </div>




                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-form-label field="office_location_en"></x-form-label>
                                      <textarea name="office_location" class="form-control"> </textarea>
                                      <x-validation-error field="office_location"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-form-label field="office_location_ar"></x-form-label>
                                      <textarea name="office_location_ar" class="form-control"> </textarea>
                                      <x-validation-error field="office_location_ar"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="office_phone"></x-form-label>
                                      <input type="text" name="office_phone" class="form-control" >
                                      <x-validation-error field="office_phone"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="office_fax"></x-form-label>
                                      <input type="text" name="office_fax" class="form-control" >
                                      <x-validation-error field="office_fax"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="website"></x-form-label>
                                      <input type="text" name="website" class="form-control" >
                                      <x-validation-error field="website"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="comercial_no"></x-form-label>
                                      <input type="text" name="comercial_no" class="form-control" >
                                      <x-validation-error field="comercial_no"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="career_open"></x-form-label>
                                      <input type="text" name="career_open" class="form-control" >
                                      <x-validation-error field="career_open"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="email"></x-form-label>
                                      <input type="text" name="email" class="form-control" >
                                      <x-validation-error field="email"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="youtube"></x-form-label>
                                      <input type="text" name="youtube" class="form-control" >
                                      <x-validation-error field="youtube"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="linkedin"></x-form-label>
                                      <input type="text" name="linkedin" class="form-control" >
                                      <x-validation-error field="linkedin"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="insta"></x-form-label>
                                      <input type="text" name="insta" class="form-control" >
                                      <x-validation-error field="insta"></x-validation-error>
                                    </div>
                                </div>




                            </div>

                            <x-submit-button></x-submit-button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
