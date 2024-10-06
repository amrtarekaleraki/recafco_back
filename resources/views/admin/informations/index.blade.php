@extends('admin.master')

@section('title', __('keywords.informations'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.informations') }}</h2>

                    <div class="page-title-right">
                        {{-- <x-action-button href="{{ route('admin.informations.create') }}" type="create"></x-action-button> --}}
                    </div>
                </div>

                <div class="card shadow">
                    <div class="card-body">

                        <x-success-alert></x-success-alert>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.mission') }}</th>
                                    <th>{{ __('keywords.trusted') }}</th>
                                    <th>{{ __('keywords.quality') }}</th>
                                    <th>{{ __('keywords.hse') }}</th>
                                    <th>{{ __('keywords.annual') }}</th>
                                    <th>{{ __('keywords.increase') }}</th>
                                    <th>{{ __('keywords.employes') }}</th>
                                    <th>{{ __('keywords.projects') }}</th>
                                    <th width="15%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($informations) > 0)
                                    @foreach ($informations as $key => $information)
                                        <tr>
                                            <td>{{ $informations->firstItem() + $loop->index }}</td>
                                            <td>
                                                <a href="{{ asset("storage/mission/$information->mission") }}" download="{{ $information->mission }}">
                                                    Download
                                                </a>
                                            </td>

                                            <td>
                                                <a href="{{ asset("storage/trusted/$information->trusted") }}" download="{{ $information->trusted }}">
                                                    Download
                                                </a>
                                            </td>

                                            <td>
                                                <a href="{{ asset("storage/quality/$information->quality") }}" download="{{ $information->quality }}">
                                                    Download
                                                </a>
                                            </td>

                                            <td>
                                                <a href="{{ asset("storage/hse/$information->hse") }}" download="{{ $information->hse }}">
                                                    Download
                                                </a>
                                            </td>

                                            <td>{{ $information->annual }}</td>
                                            <td>{{ $information->increase }}</td>
                                            <td>{{ $information->employes }}</td>
                                            <td>{{ $information->projects }}</td>



                                            <td>
                                                <x-action-button
                                                    href="{{ route('admin.informations.edit', ['information' => $information]) }}"
                                                    type="edit"></x-action-button>

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $informations->render('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
