@extends('admin.master')

@section('title', __('keywords.edit_information'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h5 page-title">{{ __('keywords.edit_information') }}</h2>

                <div class="card shadow">
                    <div class="card-body">

                        <form action="{{ route('admin.informations.update',$information) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-form-label field="mission"></x-form-label>
                                      <input type="file" name="mission" class="form-control">
                                      <x-validation-error field="mission"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-form-label field="trusted"></x-form-label>
                                      <input type="file" name="trusted" class="form-control">
                                      <x-validation-error field="trusted"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-form-label field="quality"></x-form-label>
                                      <input type="file" name="quality" class="form-control">
                                      <x-validation-error field="quality"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-form-label field="hse"></x-form-label>
                                      <input type="file" name="hse" class="form-control">
                                      <x-validation-error field="hse"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="annual"></x-form-label>
                                      <input type="number" name="annual" class="form-control" value="{{ $information->annual }}">
                                      <x-validation-error field="annual"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="increase"></x-form-label>
                                      <input type="number" name="increase" class="form-control" value="{{ $information->increase }}">
                                      <x-validation-error field="increase"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="employes"></x-form-label>
                                      <input type="number" name="employes" class="form-control" value="{{ $information->employes }}">
                                      <x-validation-error field="employes"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="projects"></x-form-label>
                                      <input type="number" name="projects" class="form-control" value="{{ $information->projects }}">
                                      <x-validation-error field="projects"></x-validation-error>
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
