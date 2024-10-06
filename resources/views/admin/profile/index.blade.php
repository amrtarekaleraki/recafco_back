@extends('admin.master')

@section('title', __('keywords.profile'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h5 page-title">{{ __('keywords.profile') }}</h2>

                <div class="card shadow">
                    <div class="card-body">

                        <x-success-alert></x-success-alert>
                        
                        <x-error-alert></x-error-alert>

                        <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class="col-md-6">
                                  <div class="form-group mb-3">
                                    <x-form-label field="name"></x-form-label>
                                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                                    <x-validation-error field="name"></x-validation-error>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="email"></x-form-label>
                                      <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                                      <x-validation-error field="email"></x-validation-error>
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="old_password"></x-form-label>
                                      <input type="password" name="old_password" class="form-control">
                                      <x-validation-error field="old_password"></x-validation-error>
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="new_password"></x-form-label>
                                      <input type="password" name="new_password" class="form-control">
                                      <x-validation-error field="new_password"></x-validation-error>
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
