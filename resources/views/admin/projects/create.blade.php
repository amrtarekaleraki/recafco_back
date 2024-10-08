@extends('admin.master')

@section('title', __('keywords.add_new_project'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h5 page-title">{{ __('keywords.add_new_project') }}</h2>

                <div class="card shadow">
                    <div class="card-body">

                        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-form-label field="category_id"></x-form-label>
                                        <select class="form-control border" name="category_id">
                                            <option value="" hidden>Select Category</option>
                                            @if (count($categories) > 0)
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <x-validation-error field="category_id"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-form-label field="product_id"></x-form-label>
                                        <select class="form-control border" name="product_id">
                                            <option value="" hidden>Select Scope</option>
                                            @if (count($products) > 0)
                                                @foreach ($products as $product)
                                                    <option value="{{ $product->id }}">{{ $product->title }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <x-validation-error field="product_id"></x-validation-error>
                                    </div>
                                </div>

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
                                        <x-form-label field="image_home"></x-form-label>
                                      <input type="file" name="image" class="form-control">
                                      <x-validation-error field="image"></x-validation-error>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="location_en"></x-form-label>
                                      <input type="text" name="location" class="form-control" >
                                      <x-validation-error field="location"></x-validation-error>
                                    </div>
                                  </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                    <x-form-label field="location_ar"></x-form-label>
                                    <input type="text" name="location_ar" class="form-control">
                                    <x-validation-error field="location_ar"></x-validation-error>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="client_en"></x-form-label>
                                      <input type="text" name="client" class="form-control" >
                                      <x-validation-error field="client"></x-validation-error>
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group mb-3">
                                        <x-form-label field="client_ar"></x-form-label>
                                        <input type="text" name="client_ar" class="form-control">
                                        <x-validation-error field="client_ar"></x-validation-error>
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                        <div class="form-group mb-3">
                                        <x-form-label field="value"></x-form-label>
                                        <input type="number" name="value" class="form-control">
                                        <x-validation-error field="value"></x-validation-error>
                                        </div>
                                  </div>

                                  <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="subtitle_en"></x-form-label>
                                      <input type="text" name="subtitle" class="form-control" >
                                      <x-validation-error field="subtitle"></x-validation-error>
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group mb-3">
                                        <x-form-label field="subtitle_ar"></x-form-label>
                                        <input type="text" name="subtitle_ar" class="form-control">
                                        <x-validation-error field="subtitle_ar"></x-validation-error>
                                      </div>
                                  </div>



                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-form-label field="description_en"></x-form-label>
                                      <textarea name="description" class="form-control"> </textarea>
                                      <x-validation-error field="description"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-form-label field="description_ar"></x-form-label>
                                      <textarea name="description_ar" class="form-control"> </textarea>
                                      <x-validation-error field="description_ar"></x-validation-error>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-form-label field="image2"></x-form-label>
                                      <input type="file" name="image2" class="form-control">
                                      <x-validation-error field="image2"></x-validation-error>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-form-label field="slider_image"></x-form-label>
                                      <input type="file" name="slider_image[]" class="form-control" multiple>
                                      <x-validation-error field="slider_image"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-form-label field="featured"></x-form-label>
                                        <select class="form-control border" name="featured">
                                            <option value="inactive" {{ old('featured', 'inactive') === 'inactive' ? 'selected' : '' }}>Inactive</option>
                                            <option value="active" {{ old('featured') === 'active' ? 'selected' : '' }}>Active</option>
                                        </select>
                                        <x-validation-error field="featured"></x-validation-error>
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
