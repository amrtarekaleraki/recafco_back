@extends('admin.master')

@section('title', __('keywords.add_new_counter'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h5 page-title">{{ __('keywords.add_new_counter') }}</h2>

                <div class="card shadow">
                    <div class="card-body">

                        <form action="{{ route('admin.counters.store') }}" method="POST">
                            @csrf

                            <div class="row">

                                <div class="col-md-6">
                                  <div class="form-group mb-3">
                                    <x-form-label field="projects"></x-form-label>
                                    <input type="number" name="projects" class="form-control" >
                                    <x-validation-error field="projects"></x-validation-error>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                      <x-form-label field="employes"></x-form-label>
                                      <input type="number" name="employes" class="form-control" >
                                      <x-validation-error field="employes"></x-validation-error>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-form-label field="awards"></x-form-label>
                                        <input type="number" name="awards" class="form-control" >
                                        <x-validation-error field="awards"></x-validation-error>
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
