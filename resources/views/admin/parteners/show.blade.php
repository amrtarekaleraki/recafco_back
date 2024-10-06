@extends('admin.master')

@section('title', __('keywords.show_partener'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h5 page-title">{{ __('keywords.show_partener') }}</h2>

                <div class="card shadow">
                    <div class="card-body">



                            <div class="row">

                                <div class="col-md-6">
                                    <x-form-label field="image"></x-form-label> <br>
                                    <img src="{{ asset("storage/parteners/$partener->image") }}"  width="100%">
                                </div>

                            </div>





                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
