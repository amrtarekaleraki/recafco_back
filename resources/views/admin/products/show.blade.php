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
                                    <a href="{{ asset("storage/products_pdf/$product->pdf") }}" download="{{ $product->pdf }}">
                                        Download PDF
                                    </a>
                                </div>

                                <div class="col-md-6">
                                    <x-form-label field="image"></x-form-label> <br>
                                    <img src="{{ asset("storage/products_images/$product->image") }}"  width="50px">
                                </div>


                                @php
                                    $images = json_decode($product->slider_product,true);
                                @endphp
                                <div class="col-md-6">
                                    <x-form-label field="slider_product"></x-form-label> <br>
                                    {{-- <img src="{{ asset("storage/products_slider_images/$product->image") }}"  width="50px"> --}}
                                    @if(is_array($images) && count($images) > 0)
                                        @foreach($images as $image)
                                            <img src="{{ asset('storage/products_slider_images/' . $image) }}" width="50px">
                                        @endforeach
                                    @endif
                                </div>



                            </div>





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
