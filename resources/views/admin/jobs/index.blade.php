@extends('admin.master')

@section('title', __('keywords.jobs'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.jobs') }}</h2>

                    <div class="page-title-right">
                        <x-action-button href="{{ route('admin.jobs.create') }}" type="create"></x-action-button>
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
                                    <th>{{ __('keywords.link') }}</th>
                                    <th width="15%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($jobs) > 0)
                                    @foreach ($jobs as $key => $job)
                                        <tr>
                                            <td>{{ $jobs->firstItem() + $loop->index }}</td>
                                            <td>{{ $job->title }}</td>
                                            <td>{{ $job->link }}</td>
                                            <td>
                                                <x-action-button
                                                    href="{{ route('admin.jobs.edit', ['job' => $job]) }}"
                                                    type="edit"></x-action-button>

                                                {{-- <x-action-button
                                                    href="{{ route('admin.jobs.show', ['job' => $job]) }}"
                                                    type="show"></x-action-button> --}}

                                                <x-delete-button
                                                    href="{{ route('admin.jobs.destroy', ['job' => $job]) }}"
                                                    id="{{ $job->id }}"></x-delete-button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $jobs->render('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
