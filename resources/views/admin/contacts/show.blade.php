@extends('admin.master')

@section('title', __('keywords.show_contact'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h5 page-title">{{ __('keywords.show_contact') }}</h2>

                <div class="card shadow">
                    <div class="card-body">



                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="f_name"></x-form-label>
                                      <p class="form-control">{{ $contact->f_name }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="l_name"></x-form-label>
                                      <p class="form-control">{{ $contact->l_name }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="email"></x-form-label>
                                      <p class="form-control">{{ $contact->email }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="phone"></x-form-label>
                                      <p class="form-control">{{ $contact->phone }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="subject"></x-form-label>
                                      <p class="form-control">{{ $contact->subject ?? '' }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="message"></x-form-label>
                                      <textarea class="form-control"> {{ $contact->message }} </textarea>
                                    </div>
                                </div>





                            </div>





                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
