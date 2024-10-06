@extends('admin.master')

@section('title', __('keywords.counters'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.counters') }}</h2>

                    {{-- <div class="page-title-right">
                        <x-action-button href="{{ route('admin.counters.create') }}" type="create"></x-action-button>
                    </div> --}}
                </div>

                <div class="card shadow">
                    <div class="card-body">

                        <x-success-alert></x-success-alert>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.projects') }}</th>
                                    <th>{{ __('keywords.employes') }}</th>
                                    <th>{{ __('keywords.awards') }}</th>
                                    <th width="15%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($counters) > 0)
                                    @foreach ($counters as $key => $counter)
                                        <tr>
                                            <td>{{ $counters->firstItem() + $loop->index }}</td>
                                            <td>{{ $counter->projects }}</td>
                                            <td>{{ $counter->employes }}</td>
                                            <td>{{ $counter->awards }}</td>
                                            <td>
                                                <x-action-button
                                                    href="{{ route('admin.counters.edit', ['counter' => $counter]) }}"
                                                    type="edit"></x-action-button>

                                                {{-- <x-action-button
                                                    href="{{ route('admin.counters.show', ['counter' => $counter]) }}"
                                                    type="show"></x-action-button> --}}

                                                {{-- <x-delete-button
                                                    href="{{ route('admin.counters.destroy', ['counter' => $counter]) }}"
                                                    id="{{ $counter->id }}"></x-delete-button> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $counters->render('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
