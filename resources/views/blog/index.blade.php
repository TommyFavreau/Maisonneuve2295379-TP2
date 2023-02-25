@extends('layouts.app')
@section('title', trans('lang.add_new_post'))
@section('content')
@php $locale = session()->get('locale'); @endphp

<div class="container flex-grow">
    <div class="row">

        <div class="col-12 text-center pt-5">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="{{ route('blog.create')}}" class="btn btn-outline-info">
                        @lang('lang.add_new_post')
                    </a>
                </div>
            </div>
        </div>


        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section text-white">@lang('lang.article_list')</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 border-thick-rounded p-4">
                    <div class="table-wrap ">
                        <div class="d-flex justify-content-center align-items-center">
                            {{ $blogs }}
                        </div>
                        <table class="table text-white">
                            <thead>
                                <tr class="text-white">
                                    <th>@lang('lang.article_title')</th>
                                    <th>@lang('lang.article_content')</th>
                                    <th>@lang('lang.article_author')</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($blogs as $blog)
                                <tr>
                                    @if ($locale === "fr")
                                        <th><a href="{{ route('blog.show', $blog->id)}}" class="text-decoration-none text-warning my-2">@if (!$blog->title_fr) {{ $blog->title }} @else {{ $blog->title_fr }} @endif</a></th>
                                        <td class="align-middle">@if (!$blog->body_fr) {{ Str::limit($blog->body, 30) }} @else {{ Str::limit($blog->body_fr, 30) }} @endif</td>
                                    @else
                                        <th><a href="{{ route('blog.show', $blog->id)}}" class="text-decoration-none text-warning my-2">@if (!$blog->title) {{ $blog->title_fr }} @else {{ $blog->title }} @endif</a></th>
                                        <td class="my-2">@if (!$blog->body) {{ Str::limit($blog->body_fr, 30) }} @else {{ Str::limit($blog->body, 30) }} @endif</td>
                                    @endif
                                    <td class="align-middle">{{ $blog->blogHasUser->name }}</td>
                                    <td class="align-middle">{{ $blog->date }}</td>
                                    <td>
                                        <a href="{{ route('blog.show', $blog->id)}}" class="btn btn-outline-warning mt-1"> @lang('lang.details') </a>
                                    </td>
                                </tr>
                                @empty
                                <td class="text-danger align-middle">@lang('lang.article_empty')</td>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center align-items-center mt-30">
                            {{ $blogs }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection