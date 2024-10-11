@extends('admin.master')

@section('title', __('keywords.edit_job'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h5 page-title">{{ __('keywords.edit_job') }}</h2>

                <div class="card shadow">
                    <div class="card-body">

                        <form action="{{ route('admin.jobs.update',$job) }}" method="POST">
                            @method('PUT')
                            @csrf

                            <div class="row">

                                <div class="col-md-6">
                                  <div class="form-group mb-3">
                                    <x-form-label field="title_en"></x-form-label>
                                    <input type="text" name="title" class="form-control" value="{{ $job->getTranslation('title','en') }}" placeholder="{{ __('keywords.title') }}">
                                    <x-validation-error field="title"></x-validation-error>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="title_ar"></x-form-label>
                                      <input type="text" name="title_ar" class="form-control" value="{{ $job->getTranslation('title','ar') }}" placeholder="{{ __('keywords.title') }}">
                                      <x-validation-error field="title"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="link"></x-form-label>
                                      <input type="text" name="link" class="form-control" value="{{ $job->link }}" placeholder="{{ __('keywords.link') }}">
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
