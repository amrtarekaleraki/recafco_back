@extends('admin.master')

@section('title', __('keywords.categories'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.categories') }}</h2>

                    <div class="page-title-right">
                        <x-action-button href="{{ route('admin.categories.create') }}" type="create"></x-action-button>
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
                                    <th>{{ __('keywords.image') }}</th>
                                    <th width="15%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($categories) > 0)
                                    @foreach ($categories as $key => $category)
                                        <tr>
                                            <td>{{ $categories->firstItem() + $loop->index }}</td>
                                            <td>{{ $category->title }}</td>
                                            <td>
                                                <img src="{{ asset("storage/categories/$category->image") }}"  width="50px">
                                            </td>
                                            <td>
                                                <x-action-button
                                                    href="{{ route('admin.categories.edit', ['category' => $category]) }}"
                                                    type="edit"></x-action-button>

                                                <x-action-button
                                                    href="{{ route('admin.categories.show', ['category' => $category]) }}"
                                                    type="show"></x-action-button>

                                                <x-delete-button
                                                    href="{{ route('admin.categories.destroy', ['category' => $category]) }}"
                                                    id="{{ $category->id }}"></x-delete-button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $categories->render('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
