@extends('layouts.app')
@section('title', trans('lang.post'))
@section('content')
@php $locale = session()->get('locale'); @endphp
@php $user = Auth::user() @endphp

<div class="container flex-grow">
    <div class="row">
        @foreach($errors->all() as $error)
        <li class="text-danger">{{$error}}</li>
        @endforeach

        <div class="col-12 pt-2">
            <a href="{{ route('blog.index') }}" class="btn btn-outline-info btn-sm mt-4">@lang('lang.back_list')</a>
            @if ($locale == "fr")
            <h4 class="display-one mt-5 py-4 text-uppercase">@if (!$blog->title_fr) {{ $blog->title }} @else {{ $blog->title_fr }} @endif </h4>
            @else
            <h4 class="display-one mt-5 py-4 text-uppercase">@if (!$blog->title) {{ $blog->title_fr }} @else {{ $blog->title }} @endif </h4>
            @endif
            <div class="d-flex flex-column border-thick-rounded p-4 mb-5">
                @if ($locale == "fr")
                <div class="col-6">
                    <p><span class="text-white-50">@lang('lang.article_title') :</span>@if (!$blog->title_fr) {{ $blog->title }} @else {{ $blog->title_fr }} @endif</p>
                    <p><span class="text-white-50">@lang('lang.article_content') :</span> @if (!$blog->body_fr) {{ $blog->body }} @else {{ $blog->body_fr }} @endif </p>
                </div>
                @else
                <div class="col-6">
                    <p><span class="text-white-50">@lang('lang.article_title') :</span> @if (!$blog->title) {{ $blog->title_fr }} @else {{ $blog->title }} @endif </p>
                    <p><span class="text-white-50">@lang('lang.article_content') :</span> @if (!$blog->body) {{ $blog->body_fr }} @else {{ $blog->body }} @endif </p>
                </div>
                @endif
                <p><span class="text-white-50">@lang('lang.article_date_create') : </span> {{ $blog->date }} </p>
                <p><span class="text-white-50">@lang('lang.article_author') : </span> {{ $blog->blogHasUser->name }} </p>
            </div>
            @if ($blog->user_id == $user->id)
            <div class="col-6 my-3">
                <div class="d-flex flex-row mb-5 justify-content-left">
                    <a href="{{route('blog.edit', $blog->id)}}" class="btn btn-outline-warning m-2 ">@lang('lang.modify')</a>
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
                <h1 class="modal-title fs-5 text-uppercase" id="exampleModalLabel">@lang('lang.delete_post')</h1>
            </div>
            <div class="modal-body no-border justify-content-center text-center">
                @lang('lang.confirm_delete')
            </div>
            <div class="modal-footer no-border justify-content-center">
                <button type="button" class="btn btn-outline-info mx-2" data-bs-dismiss="modal">@lang('lang.cancel')</button>
                <form action="{{ route('blog.edit', $blog->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-outline-danger" value="@lang('lang.delete')">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection