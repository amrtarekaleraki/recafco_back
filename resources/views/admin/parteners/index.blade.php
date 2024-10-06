@extends('admin.master')

@section('title', __('keywords.parteners'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.parteners') }}</h2>

                    <div class="page-title-right">
                        <x-action-button href="{{ route('admin.parteners.create') }}" type="create"></x-action-button>
                    </div>
                </div>

                <div class="card shadow">
                    <div class="card-body">

                        <x-success-alert></x-success-alert>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="25%">#</th>
                                    <th>{{ __('keywords.image') }}</th>
                                    <th width="25%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($parteners) > 0)
                                    @foreach ($parteners as $key => $partener)
                                        <tr>
                                            <td>{{ $parteners->firstItem() + $loop->index }}</td>
                                            <td>
                                                <img src="{{ asset("storage/parteners/$partener->image") }}"  width="50px">
                                            </td>
                                            <td>
                                                <x-action-button
                                                    href="{{ route('admin.parteners.edit', ['partener' => $partener]) }}"
                                                    type="edit"></x-action-button>

                                                <x-action-button
                                                    href="{{ route('admin.parteners.show', ['partener' => $partener]) }}"
                                                    type="show"></x-action-button>

                                                <x-delete-button
                                                    href="{{ route('admin.parteners.destroy', ['partener' => $partener]) }}"
                                                    id="{{ $partener->id }}"></x-delete-button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $parteners->render('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
