@extends('layouts.app')
@section('title', trans('lang.files_list'))
@section('content')
@php $locale = session()->get('locale'); @endphp

<div class="container flex-grow">    
    <div class="row">
        
        <div class="col-12 text-center pt-5">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="{{ route('file.create')}}" class="btn btn-outline-info">
                        @lang('lang.add_new_file')
                    </a>
                </div>
            </div>
        </div>

        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section text-white">@lang('lang.files_list')</h2>
                </div>
            </div>
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> {{session('success')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row">
                <div class="col-md-12 border-thick-rounded p-4">
                    <div class="table-wrap ">
                        <div class="d-flex justify-content-center align-items-center">
                            {{ $files }}
                        </div>
                        <table class="table text-white">
                            <thead>
                                <tr class="text-white">
                                    <th>@lang('lang.files_name')</th>
                                    <th>@lang('lang.files_path')</th>
                                    <th>@lang('lang.files_user')</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($files as $file)
                                    <tr>
                                        @if ($locale === "fr")
                                            <th><a href="{{ route('file.show', $file->id)}}" class="text-decoration-none text-warning my-2">@if (!$file->name_fr) {{ $file->name }} @else {{ $file->name_fr }} @endif</a></th>
                                        @else
                                            <th><a href="{{ route('file.show', $file->id)}}" class="text-decoration-none text-warning my-2">@if (!$file->name) {{ $file->name_fr }} @else {{ $file->name }} @endif</a></th>
                                        @endif
                                        <td class="align-middle">{{ Str::limit($file->path, 30) }}</td>
                                        <td class="align-middle">{{ $file->fileHasUser->name }}</td>
                                        <td class="align-middle">{{ $file->created_at }}</td>
                                        <td>
                                            <a href="{{ route('file.show', $file->id)}}" class="btn btn-outline-warning mt-1"> @lang('lang.details') </a>
                                        </td>
                                    </tr>
                                @empty
                                    <td class="text-danger">@lang('lang.files_empty')</td>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center align-items-center mt-30">
                            {{ $files }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection