@extends('layouts.app')
@section('title', trans('lang.student_update'))
@section('content')

<div class="form-body  flex-grow">
    <div class="container">
        <div class="form-holder">
            <div class="form-content">
                <h1 class="display-one mr-3">
                    @lang('lang.student_update')
                </h1>

                <div class="form-items border-thick-rounded">
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

                    <form method="post">
                        @csrf
                        @method('put')

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="name">@lang('lang.student_name') </label>
                            <div class="col-sm-10">
                                <input type="text" id="name" name="name" class="form-control" value="{{ $etudiant->name}}" required>
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
                                <input type="text" id="address" name="address" class="form-control" value="{{ $etudiant->address}}" required>
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
                                <input type="text" id="email" name="email" class="form-control" value="{{ $etudiant->email}}" required>
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
                                <input type="tel" id="phone" name="phone" class="form-control mt-3" value="{{ $etudiant->phone}}" required>
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
                                <input type="date" id="birthday" name="birthday" class="form-control mt-3" value="{{ $etudiant->birthday}}" required>
                            </div>
                            @if($errors->has('birthday'))
                            <div class="text-danger mt-2">
                                {{ $errors->first('birthday')}}
                            </div>
                            @endif
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="ville_id">@lang('lang.student_city')</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="ville_id" id="ville_id" required>
                                    @foreach($villes as $ville)
                                    @if($etudiant->ville_id == $ville->id)
                                    <option value="{{ $ville->id }}" selected>{{ $ville->name }}</option>
                                    @else
                                    <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            @if($errors->has('ville_id'))
                            <div class="text-danger mt-2">
                                {{ $errors->first('ville_id')}}
                            </div>
                            @endif
                        </div>
                        <input type="hidden" id="users_id" name="users_id" class="form-control mt-3" value="{{ $etudiant->users_id}}">
                        <div class="form-button mt-3 my-auto">
                            <input type="submit" value="@lang('lang.update')" class="btn btn-outline-success">
                            <a href="{{ route('index')}}" class="btn btn-outline-danger m-2 justify-self-end">@lang('lang.cancel')</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection