@extends('admin.master')

@section('title',__('keywords.index'))

@section('content')


<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="row align-items-center mb-2">
          <div class="col">
            <h2 class="h5 page-title">{{ __('keywords.welcome') }}!</h2>
          </div>

        </div>

        @php
            $parteners = App\Models\Partener::get();
            $projects = App\Models\Project::get();
            $products = App\Models\Product::get();
        @endphp

        <!-- info small box -->
            <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                <div class="card-body">
                    <div class="row align-items-center">
                    <div class="col">
                        <span class="h2 mb-0">{{ count($parteners) }}</span>
                        <p class="small text-muted mb-0">{{ __('keywords.parteners') }}</p>
                    </div>
                    <div class="col-auto">
                        <span class="fe fe-32 fe-users text-muted mb-0"></span>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                <div class="card-body">
                    <div class="row align-items-center">
                    <div class="col">
                        <span class="h2 mb-0">{{ count($projects) }}</span>
                        <p class="small text-muted mb-0">{{ __('keywords.projects') }}</p>
                    </div>
                    <div class="col-auto">
                        <span class="fe fe-32 fe-clipboard text-muted mb-0"></span>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                <div class="card-body">
                    <div class="row align-items-center">
                    <div class="col">
                        <span class="h2 mb-0">{{ count($products) }}</span>
                        <p class="small text-muted mb-0">{{ __('keywords.products') }}</p>
                    </div>
                    <div class="col-auto">
                        <span class="fe fe-32 fe-shopping-bag text-muted mb-0"></span>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        <!-- end section -->
      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->



@endsection
