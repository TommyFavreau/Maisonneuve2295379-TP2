@extends('layouts.app')
@section('title', trans('lang.add_new_file'))
@section('content')
@php $locale = session()->get('locale'); @endphp


<div class="form-body flex-grow">
    <div class="container">
        <div class="form-holder">
            <div class="form-content">
                <h1 class="display-one text-right"> @lang('lang.add_new_file') </h1>
                <div class="form-items border-thick-rounded m-3">

                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        @if ($locale == "fr")
                        <div class="mt-3 form-group row align-items-center">
                            <label class="col-form-label col-sm-3" for="name_fr"> @lang('lang.files_name') :</label>
                            <div class="col-sm-9">
                                <input type="text" id="name_fr" name="name_fr" class="form-control m-2 justify-self-end" value="{{old('name_fr')}}" required>
                            </div>
                        </div>
                        @if($errors->has('name_fr'))
                        <div class="text-danger mt-2">
                            {{ $errors->first('name_fr')}}
                        </div>
                        @endif
                        @else
                        <div class="mt-3 form-group row align-items-center">
                            <label class="col-form-label col-sm-3" for="name"> @lang('lang.files_name') :</label>
                            <div class="col-sm-9">
                                <input type="text" id="name" name="name" class="form-control m-2 justify-self-end " value="{{old('name')}}" required>
                            </div>
                        </div>
                        @if($errors->has('name'))
                        <div class="text-danger mt-2">
                            {{ $errors->first('name')}}
                        </div>
                        @endif
                        @endif

                        <div class="mt-3 form-group row align-items-center">
                            <label class="col-form-label col-sm-3" for="file">@lang('lang.files_file') :</label>
                            <div class="col-sm-9">
                                <input class="btn btn-outline-light m-2 justify-self-end form-control" type="file" name="file" id="file">
                            </div>
                        </div>
                        @if($errors->has('file'))
                        <div class="text-danger mt-2">
                            {{ $errors->first('file')}}
                        </div>
                        @endif
                        <div class="mt-4">
                            <button class="btn btn-outline-success mr-2 justify-self-end" type="submit">@lang('lang.files_upload')</button>
                            <a href="{{ route('file.index') }}" class="btn btn-outline-danger m-2 justify-self-end">@lang('lang.cancel')</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection