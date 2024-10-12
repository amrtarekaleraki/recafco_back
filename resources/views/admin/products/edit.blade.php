@extends('admin.master')

@section('title', __('keywords.edit_product'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h5 page-title">{{ __('keywords.edit_product') }}</h2>

                <div class="card shadow">
                    <div class="card-body">

                        <form action="{{ route('admin.products.update',$product) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="row">

                                <div class="col-md-6">
                                  <div class="form-group mb-3">
                                    <x-form-label field="title_en"></x-form-label>
                                    <input type="text" name="title" class="form-control" value="{{ $product->getTranslation('title','en') }}" placeholder="{{ __('keywords.title') }}">
                                    <x-validation-error field="title"></x-validation-error>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="title_ar"></x-form-label>
                                      <input type="text" name="title_ar" class="form-control" value="{{ $product->getTranslation('title','ar') }}" placeholder="{{ __('keywords.title') }}">
                                      <x-validation-error field="title"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="description_en"></x-form-label>
                                      <textarea id="description" name="description" class="form-control" style="display:none;">{{ $product->getTranslation('description','en') }}</textarea>
                                      <textarea  name="description" class="form-control" placeholder="{{ __('keywords.description') }}"> {{ $product->getTranslation('description','en') }} </textarea>
                                      <x-validation-error field="description"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="description_ar"></x-form-label>
                                      <textarea name="description_ar" class="form-control" placeholder="{{ __('keywords.description') }}"> {{ $product->getTranslation('description','ar') }} </textarea>
                                      <x-validation-error field="description"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-form-label field="pdf"></x-form-label>
                                      <input type="file" name="pdf" class="form-control">
                                      <x-validation-error field="pdf"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-form-label field="image"></x-form-label>
                                        <input type="file" name="image" class="form-control">
                                        <x-validation-error field="image"></x-validation-error>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-form-label field="slider_product"></x-form-label>
                                      <input type="file" name="slider_product[]" class="form-control" multiple>
                                      <x-validation-error field="slider_product"></x-validation-error>
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


@push('scripts')

<script>
    tinymce.init({
        selector: 'textarea',
        menubar: false,
        content_css: 'https://cdn.tiny.cloud/1/no-api-key/tinymce/6/skins/ui/oxide/skin.min.css',
        plugins: 'advlist autolink lists link image charmap print preview anchor',
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
        height: 300,
        setup: function (editor) {
            editor.on('init', function () {
                // Reset the content CSS to make sure no bold formatting is applied
                editor.getBody().style.fontWeight = 'normal';
            });
        }
    });
</script>

@endpush
