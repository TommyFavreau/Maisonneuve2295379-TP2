@extends('layouts.app')
@section('title', trans('lang.new-pass'))
@section('content')
<main class="login-form flex-grow">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-4 pt-4">
                <div class="card">
                    <h3 class="card-header text-center text-dark">
                        @lang('lang.new-pass')
                    </h3>
                    <div class="card-body">
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

                        <form action="{{route('new.pass')}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group mb-3">
                                <input type="email" placeholder="@lang('lang.student_email')" class="form-control" name="email" value="{{ old('email')}}">
                                @if($errors->has('email'))
                                    <div class="text-danger mt-2">
                                        {{ $errors->first('email')}}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="@lang('lang.new_password')" class="form-control" name="password">
                                @if($errors->has('password'))
                                    <div class="text-danger mt-2">
                                        {{ $errors->first('password')}}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="@lang('lang.confirm_password')" class="form-control" name="password_confirmation">
                                @if($errors->has('password_confirmation'))
                                    <div class="text-danger mt-2">
                                        {{ $errors->first('password_confirmation')}}
                                    </div>
                                @endif
                            </div>
                            <div class="d-grid mx-auto">
                                <input type="submit" value="@lang('lang.save')" class="btn btn-dark btn-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>  

@endsection