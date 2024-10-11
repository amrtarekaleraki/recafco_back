@extends('admin.master')

@section('title', __('keywords.add_new_job'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h5 page-title">{{ __('keywords.add_new_job') }}</h2>

                <div class="card shadow">
                    <div class="card-body">

                        <form action="{{ route('admin.jobs.store') }}" method="POST">
                            @csrf

                            <div class="row">

                                <div class="col-md-6">
                                  <div class="form-group mb-3">
                                    <x-form-label field="title_en"></x-form-label>
                                    <input type="text" name="title" class="form-control" >
                                    <x-validation-error field="title"></x-validation-error>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="title_ar"></x-form-label>
                                      <input type="text" name="title_ar" class="form-control">
                                      <x-validation-error field="title_ar"></x-validation-error>
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="link"></x-form-label>
                                      <input type="text" name="link" class="form-control" >
                                      <x-validation-error field="link"></x-validation-error>
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
