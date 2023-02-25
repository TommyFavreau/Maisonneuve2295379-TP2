@extends('layouts.app')
@section('title', trans('lang.add_student'))
@section('content')

<div class="form-body flex-grow">
    <div class="container">
        <div class="form-holder">
            <div class="form-content">
                <h1 class="display-one"> @lang('lang.add_student') </h1>
                <div class="form-items border-thick-rounded m-3">
                    @if(!$errors->isEmpty())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <form class="" method="post">
                        @csrf

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="name">@lang('lang.student_name')</label>
                            <div class="col-sm-10">
                                <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}" required>
                            </div>
                            @if($errors->has('name'))
                            <div class="text-danger mt-2">
                                {{ $errors->first('name')}}
                            </div>
                            @endif
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="address">@lang('lang.student_address')</label>
                            <div class="col-sm-10">
                                <input type="text" id="address" name="address" class="form-control" value="{{old('address')}}" required>
                            </div>
                            @if($errors->has('address'))
                            <div class="text-danger mt-2">
                                {{ $errors->first('address')}}
                            </div>
                            @endif
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="email">@lang('lang.student_email')</label>
                            <div class="col-sm-10">
                                <input type="text" id="email" name="email" class="form-control" value="{{old('email')}}" required>
                            </div>
                            @if($errors->has('email'))
                            <div class="text-danger mt-2">
                                {{ $errors->first('email')}}
                            </div>
                            @endif
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="phone">@lang('lang.student_phone')</label>
                            <div class="col-sm-10">
                                <input type="tel" id="phone" name="phone" class="form-control mt-3" value="{{old('phone')}}" required>
                            </div>
                            @if($errors->has('phone'))
                            <div class="text-danger mt-2">
                                {{ $errors->first('phone')}}
                            </div>
                            @endif
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="birthday">@lang('lang.student_birthday')</label>
                            <div class="col-sm-10">
                                <input type="date" id="birthday" name="birthday" class="form-control mt-3" value="{{old('birthday')}}" required>
                            </div>
                            @if($errors->has('birthday'))
                            <div class="text-danger mt-2">
                                {{ $errors->first('birthday')}}
                            </div>
                            @endif
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="ville_id"> @lang('lang.student_city') </label>
                            <div class="col-sm-10">
                                <select class="form-select" name="ville_id" id="ville_id" required>
                                    <option selected disabled value="">@lang('lang.city_list')</option>
                                    @foreach($villes as $ville)
                                    <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if($errors->has('ville_id'))
                            <div class="text-danger mt-2">
                                {{ $errors->first('ville_id')}}
                            </div>
                            @endif
                        </div>

                        <div class="form-button mt-3">
                            <input type="submit" value="@lang('lang.confirm')" class="btn btn-outline-success">
                            <a href="{{ route('index')}}" class="btn btn-outline-danger m-2 justify-self-end">@lang('lang.cancel')</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection