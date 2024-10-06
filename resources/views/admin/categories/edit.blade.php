@extends('admin.master')

@section('title', __('keywords.edit_category'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h5 page-title">{{ __('keywords.edit_category') }}</h2>

                <div class="card shadow">
                    <div class="card-body">

                        <form action="{{ route('admin.categories.update',$category) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="row">

                                <div class="col-md-6">
                                  <div class="form-group mb-3">
                                    <x-form-label field="title_en"></x-form-label>
                                    <input type="text" name="title" class="form-control" value="{{ $category->getTranslation('title','en') }}" placeholder="{{ __('keywords.title') }}">
                                    <x-validation-error field="title"></x-validation-error>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="title_ar"></x-form-label>
                                      <input type="text" name="title_ar" class="form-control" value="{{ $category->getTranslation('title','ar') }}" placeholder="{{ __('keywords.title') }}">
                                      <x-validation-error field="title"></x-validation-error>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <x-form-label field="image"></x-form-label>
                                    <input type="file" name="image" class="form-control">
                                    <x-validation-error field="image"></x-validation-error>
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
