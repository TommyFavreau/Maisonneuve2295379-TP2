@extends('layouts.app')
@section('title', trans('lang.write_post'))
@section('content')
@php $locale = session()->get('locale'); @endphp

<div class="form-body flex-grow">
    <div class="container">
        <div class="form-holder">
            <div class="form-content">
                <h1 class="display-one"> @lang('lang.write_post') </h1>
                <div class="form-items border-thick-rounded m-3">
                    @foreach($errors->all() as $error)
                    <li class="text-danger m-3">{{$error}}</li>
                    @endforeach
                    <form class="" method="post">
                        @csrf
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-en-tab" data-bs-toggle="tab" data-bs-target="#nav-en" type="button" role="tab" aria-controls="nav-en" aria-selected="true">EN</button>
                                <button class="nav-link" id="nav-fr-tab" data-bs-toggle="tab" data-bs-target="#nav-fr" type="button" role="tab" aria-controls="nav-fr" aria-selected="false">FR</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-en" role="tabpanel" aria-labelledby="nav-en-tab" tabindex="0">
                                <div class="mt-3 form-group row">
                                    <label class="col-form-label col-sm-2 mt-2" for="title">Title :</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="title" name="title" class="form-control" value="{{old('title')}}">
                                        @if($errors->has('title'))
                                        <div class="text-danger mt-2">
                                            {{ $errors->first('title')}}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="mt-3 form-group row">
                                    <label class="col-form-label col-sm-2 mt-2" for="body">Content :</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="body" name="body" rows="3">{{old('body')}}</textarea>
                                    </div>
                                    @if($errors->has('body'))
                                    <div class="text-danger mt-2">
                                        {{ $errors->first('body')}}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-fr" role="tabpanel" aria-labelledby="nav-fr-tab" tabindex="0">
                                <div class="mt-3 form-group row">
                                    <label class="col-form-label col-sm-2 mt-2" for="title_fr">Titre :</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="title_fr" name="title_fr" class="form-control" value="{{old('title_fr')}}">
                                    </div>
                                    @if($errors->has('title_fr'))
                                    <div class="text-danger mt-2">
                                        {{ $errors->first('title_fr')}}
                                    </div>
                                    @endif
                                </div>
                                <div class="mt-3 form-group row">
                                    <label class="col-form-label col-sm-2 mt-2" for="body_fr">Contenu :</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="body_fr" name="body_fr" rows="3">{{old('body_fr')}}</textarea>
                                    </div>
                                    @if($errors->has('body_fr'))
                                    <div class="text-danger mt-2">
                                        {{ $errors->first('body_fr')}}
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-button mt-3">
                            <input type="submit" value="@lang('lang.confirm')" class="btn btn-outline-success">
                            <a href="{{ route('blog.index')}}" class="btn btn-outline-danger m-2 justify-self-end">@lang('lang.cancel')</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection