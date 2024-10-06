@extends('admin.master')

@section('title', __('keywords.contacts'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.contacts') }}</h2>


                </div>

                <div class="card shadow">
                    <div class="card-body">

                        <x-success-alert></x-success-alert>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.f_name') }}</th>
                                    <th>{{ __('keywords.l_name') }}</th>
                                    <th>{{ __('keywords.email') }}</th>
                                    <th>{{ __('keywords.created_at') }}</th>
                                    <th width="15%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($contacts) > 0)
                                    @foreach ($contacts as $key => $contact)
                                        <tr>
                                            <td>{{ $contacts->firstItem() + $loop->index }}</td>
                                            <td>{{ $contact->f_name }}</td>
                                            <td>{{ $contact->l_name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->created_at->format('d/m/Y') }}</td>

                                            <td>

                                                <x-action-button
                                                    href="{{ route('admin.contacts.show', ['contact' => $contact]) }}"
                                                    type="show"></x-action-button>

                                                <x-delete-button
                                                    href="{{ route('admin.contacts.destroy', ['contact' => $contact]) }}"
                                                    id="{{ $contact->id }}"></x-delete-button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $contacts->render('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
