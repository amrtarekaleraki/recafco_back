@extends('admin.master')

@section('title', __('keywords.show_project'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h5 page-title">{{ __('keywords.show_project') }}</h2>

                <div class="card shadow">
                    <div class="card-body">



                            <div class="row">




                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-form-label field="category_id"></x-form-label>
                                        <p class="form-control">{{ $project->category->title }}</p>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-form-label field="product_id"></x-form-label>
                                        <p class="form-control">{{ $project->product->title }}</p>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-form-label field="featured"></x-form-label>
                                        <p class="form-control">{{ $project->featured }}</p>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="title_en"></x-form-label>
                                      <p class="form-control">{{ $project->getTranslation('title','en') }}</p>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="title_ar"></x-form-label>
                                      <p class="form-control">{{ $project->getTranslation('title','ar') }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="location_en"></x-form-label>
                                      <p class="form-control">{{ $project->getTranslation('location','en') }}</p>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="location_ar"></x-form-label>
                                      <p class="form-control">{{ $project->getTranslation('location','ar') }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="client_en"></x-form-label>
                                      <p class="form-control">{{ $project->getTranslation('client','en') }}</p>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="client_ar"></x-form-label>
                                      <p class="form-control">{{ $project->getTranslation('client','ar') }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="subtitle_en"></x-form-label>
                                      <p class="form-control">{{ $project->getTranslation('subtitle','en') }}</p>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="subtitle_ar"></x-form-label>
                                      <p class="form-control">{{ $project->getTranslation('subtitle','ar') }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="value"></x-form-label>
                                      <p class="form-control">{{ $project->value }}</p>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="description_en"></x-form-label>
                                      <textarea class="form-control"> {{ $project->getTranslation('description','en') }} </textarea>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="description_ar"></x-form-label>
                                      <textarea class="form-control"> {{ $project->getTranslation('description','ar') }} </textarea>
                                    </div>
                                </div>




                                <div class="col-md-6">
                                    <x-form-label field="image_home"></x-form-label> <br>
                                    <img src="{{ asset("storage/project_image1/$project->image") }}"  width="50px">
                                </div>

                                <div class="col-md-6">
                                    <x-form-label field="image2"></x-form-label> <br>
                                    <img src="{{ asset("storage/project_image2/$project->image2") }}"  width="50px">
                                </div>

                                <div class="col-md-6">
                                    <x-form-label field="slider_image"></x-form-label> <br>
                                    <img src="{{ asset("storage/project_slider/$project->slider_image") }}"  width="50px">
                                </div>


                            </div>





                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
