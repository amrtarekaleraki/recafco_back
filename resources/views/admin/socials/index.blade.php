@extends('admin.master')

@section('title', __('keywords.socials'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.socials') }}</h2>

                    <div class="page-title-right">
                        {{-- <x-action-button href="{{ route('admin.socials.create') }}" type="create"></x-action-button> --}}
                    </div>
                </div>

                <div class="card shadow">
                    <div class="card-body">

                        <x-success-alert></x-success-alert>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.email') }}</th>
                                    <th>{{ __('keywords.comercial_no') }}</th>
                                    {{-- <th>{{ __('keywords.career_open') }}</th> --}}
                                    <th width="15%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($socials) > 0)
                                    @foreach ($socials as $key => $social)
                                        <tr>
                                            <td>{{ $socials->firstItem() + $loop->index }}</td>
                                            <td>{{ $social->email }}</td>
                                            <td>{{ $social->comercial_no }}</td>
                                            {{-- <td>{{ $social->career_open }}</td> --}}
                                            <td>
                                                <x-action-button
                                                    href="{{ route('admin.socials.edit', ['social' => $social]) }}"
                                                    type="edit"></x-action-button>

                                                <x-action-button
                                                    href="{{ route('admin.socials.show', ['social' => $social]) }}"
                                                    type="show"></x-action-button>

                                                {{-- <x-delete-button
                                                    href="{{ route('admin.socials.destroy', ['social' => $social]) }}"
                                                    id="{{ $social->id }}"></x-delete-button> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $socials->render('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
