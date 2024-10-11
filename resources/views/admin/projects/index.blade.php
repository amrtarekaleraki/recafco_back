@extends('admin.master')

@section('title', __('keywords.projects'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.projects') }}</h2>

                    <div class="page-title-right">
                        <x-action-button href="{{ route('admin.projects.create') }}" type="create"></x-action-button>
                    </div>
                </div>

                <div class="card shadow">
                    <div class="card-body">

                        <x-success-alert></x-success-alert>
                        
                        <x-error-alert></x-error-alert>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.title') }}</th>
                                    <th>{{ __('keywords.location') }}</th>
                                    <th>{{ __('keywords.image_home') }}</th>
                                    <th>{{ __('keywords.client') }}</th>
                                    <th>{{ __('keywords.value') }}</th>
                                    <th>{{ __('keywords.featured') }}</th>
                                    <th width="15%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($projects) > 0)
                                    @foreach ($projects as $key => $project)
                                        <tr>
                                            <td>{{ $projects->firstItem() + $loop->index }}</td>
                                            <td>{{ $project->title }}</td>
                                            <td>{{ $project->location }}</td>
                                            <td>
                                                <img src="{{ asset("storage/project_image1/$project->image") }}"  width="50px">
                                            </td>
                                            <td>{{ $project->client }}</td>
                                            <td>{{ $project->value }}</td>
                                            <td>{{ $project->featured }}</td>
                                            <td>
                                                <x-action-button
                                                    href="{{ route('admin.projects.edit', ['project' => $project]) }}"
                                                    type="edit"></x-action-button>

                                                <x-action-button
                                                    href="{{ route('admin.projects.show', ['project' => $project]) }}"
                                                    type="show"></x-action-button>

                                                <x-delete-button
                                                    href="{{ route('admin.projects.destroy', ['project' => $project]) }}"
                                                    id="{{ $project->id }}"></x-delete-button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $projects->render('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
