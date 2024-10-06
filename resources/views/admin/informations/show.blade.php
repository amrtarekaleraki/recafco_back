@extends('admin.master')

@section('title', __('keywords.show_product'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h5 page-title">{{ __('keywords.show_product') }}</h2>

                <div class="card shadow">
                    <div class="card-body">



                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="title_en"></x-form-label>
                                      <p class="form-control">{{ $product->getTranslation('title','en') }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="title_ar"></x-form-label>
                                      <p class="form-control">{{ $product->getTranslation('title','ar') }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="description_en"></x-form-label>
                                      <textarea class="form-control"> {{ $product->getTranslation('description','en') }} </textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="description_ar"></x-form-label>
                                      <textarea class="form-control"> {{ $product->getTranslation('description','ar') }} </textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <x-form-label field="pdf"></x-form-label> <br>
                                    <a href="{{ asset("storage/products/$product->pdf") }}" download="{{ $product->pdf }}">
                                        Download PDF
                                    </a>
                                </div>

                                <div class="col-md-6">
                                    <x-form-label field="image"></x-form-label> <br>
                                    <img src="{{ asset("storage/products_images/$product->image") }}"  width="50px">
                                </div>


                            </div>





                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
