@extends('admin.master')

@section('title', __('keywords.certificates'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.certificates') }}</h2>

                    <div class="page-title-right">
                        <x-action-button href="{{ route('admin.certificates.create') }}" type="create"></x-action-button>
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
                                @if (count($certificates) > 0)
                                    @foreach ($certificates as $key => $certificate)
                                        <tr>
                                            <td>{{ $certificates->firstItem() + $loop->index }}</td>
                                            <td>{{ $certificate->title }}</td>
                                            <td>
                                                <img src="{{ asset("storage/certificates/$certificate->image") }}"  width="50px">
                                            </td>
                                            <td>
                                                <x-action-button
                                                    href="{{ route('admin.certificates.edit', ['certificate' => $certificate]) }}"
                                                    type="edit"></x-action-button>

                                                <x-action-button
                                                    href="{{ route('admin.certificates.show', ['certificate' => $certificate]) }}"
                                                    type="show"></x-action-button>

                                                <x-delete-button
                                                    href="{{ route('admin.certificates.destroy', ['certificate' => $certificate]) }}"
                                                    id="{{ $certificate->id }}"></x-delete-button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $certificates->render('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
