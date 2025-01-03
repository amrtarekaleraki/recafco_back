@extends('admin.master')

@section('title', __('keywords.products'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.products') }}</h2>

                    <div class="page-title-right">
                        {{-- <x-action-button href="{{ route('admin.products.create') }}" type="create"></x-action-button> --}}
                    </div>
                </div>

                <div class="card shadow">
                    <div class="card-body">

                        <x-success-alert></x-success-alert>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.title') }}</th>
                                    <th>{{ __('keywords.description') }}</th>
                                    <th>{{ __('keywords.pdf') }}</th>
                                    <th>{{ __('keywords.image') }}</th>
                                    <th width="15%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($products) > 0)
                                    @foreach ($products as $key => $product)
                                        <tr>
                                            <td>{{ $products->firstItem() + $loop->index }}</td>
                                            <td>{{ $product->title }}</td>
                                            <td>{!! $product->description !!}</td>
                                            <td>
                                                <a href="{{ asset("storage/products_pdf/$product->pdf") }}" download="{{ $product->pdf }}">
                                                    {{ __('keywords.download') }}
                                                </a>
                                            </td>
                                            <td>
                                                <img src="{{ asset("storage/products_images/$product->image") }}"  width="50px">
                                            </td>
                                            <td>
                                                <x-action-button
                                                    href="{{ route('admin.products.edit', ['product' => $product]) }}"
                                                    type="edit"></x-action-button>

                                                <x-action-button
                                                    href="{{ route('admin.products.show', ['product' => $product]) }}"
                                                    type="show"></x-action-button>

                                                {{-- <x-delete-button
                                                    href="{{ route('admin.products.destroy', ['product' => $product]) }}"
                                                    id="{{ $product->id }}"></x-delete-button> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $products->render('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
