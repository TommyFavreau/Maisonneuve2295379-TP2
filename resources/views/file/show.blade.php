@extends('layouts.app')
@section('title', trans('lang.files_file'))
@section('content')
@php $locale = session()->get('locale'); @endphp
@php $user = Auth::user() @endphp

<div class="container flex-grow">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="{{ route('file.index') }}" class="btn btn-outline-info btn-sm mt-4">@lang('lang.back_list')</a>

            @if ($locale == "fr")
            <h4 class="display-one mt-5 py-4 text-uppercase">@if (!$file->name_fr) {{ $file->name }} @else {{ $file->name_fr }} @endif </h4>
            @else
            <h4 class="display-one mt-5 py-4 text-uppercase">@if (!$file->name) {{ $file->name_fr }} @else {{ $file->name }} @endif </h4>
            @endif

            <div class="d-inline-flex border-thick-rounded p-4 mb-5">
                <div class="col-12 my-1">
                    @if ($locale == "fr")
                    <p class="p-2"><span class="text-white-50">@lang('lang.files_name') :</span>@if (!$file->name_fr) {{ $file->name }} @else {{ $file->name_fr }} @endif</p>
                    @else
                    <p class="p-2"><span class="text-white-50">@lang('lang.files_name') :</span> @if (!$file->name) {{ $file->name_fr }} @else {{ $file->name }} @endif </p>
                    @endif
                    <p class="p-2"><span class="text-white-50">@lang('lang.files_path') : </span> {{ $file->path }} </p>
                    <p class="p-2"><span class="text-white-50">@lang('lang.files_user') : </span> {{ $file->fileHasUser->name }} </p>
                    <p class="p-2"><span class="text-white-50">@lang('lang.files_date') : </span> {{ $file->created_at }} </p>
                </div>

            </div>
            @if ($file->users_id == $user->id)
            <div class="col-6 row my-3">
                <div class="d-flex flex-row mb-5 justify-content-left">
                    <a href="{{route('file.edit', $file->id)}}" class="btn btn-outline-warning m-2">@lang('lang.modify')</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-danger m-2" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        @lang('lang.delete')
                    </button>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark-theme p-3">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-header no-border justify-content-center">
                <h1 class="modal-name fs-5 text-uppercase" id="exampleModalLabel">@lang('lang.files_delete')</h1>
            </div>
            <div class="modal-body no-border justify-content-center text-center">
                @lang('lang.files_confirm_delete')
            </div>
            <div class="modal-footer no-border justify-content-center">
                <button type="button" class="btn btn-outline-info mx-2" data-bs-dismiss="modal">@lang('lang.cancel')</button>
                <form action="{{ route('file.edit', $file->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-outline-danger" value="@lang('lang.delete')">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection