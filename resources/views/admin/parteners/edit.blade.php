@extends('admin.master')

@section('title', __('keywords.edit_partener'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h5 page-title">{{ __('keywords.edit_partener') }}</h2>

                <div class="card shadow">
                    <div class="card-body">

                        <form action="{{ route('admin.parteners.update',$partener) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="row">


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
