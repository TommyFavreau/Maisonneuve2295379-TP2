@extends('layouts.app')
@section('title', trans('lang.student'))
@section('content')

<div class="container flex-grow">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="{{ route('index') }}" class="btn btn-outline-info btn-sm mt-4">@lang('lang.back_list')</a>
            <h4 class="display-one mt-2 py-4 text-uppercase">
                {{ $etudiant->name }}
            </h4>
            <div class="d-md-inline-flex border-thick-rounded p-4">
                <div class="col-12">
                    <p class="p-2"><span class="text-white-50">@lang('lang.student_email') :</span> {{ $etudiant->email }} </p>
                    <p class="p-2"><span class="text-white-50">@lang('lang.student_phone') : </span> {{ $etudiant->phone }} </p>
                    <p class="p-2"><span class="text-white-50">@lang('lang.student_birthday') : </span> {{ $etudiant->birthday }} </p>
                    <p class="p-2"><span class="text-white-50">@lang('lang.student_address') : </span> {{ $etudiant->address }} </p>
                    <p class="p-2"><span class="text-white-50">@lang('lang.student_city') : </span> {{ $etudiant->etudiantHasVille->name}} </p>
                </div>
            </div>
            <div class="col-6 my-3">
                <div class="d-flex flex-row mb-5 justify-content-left">
                    <a href="{{route('etudiant.edit', $etudiant->id)}}" class="btn btn-outline-warning m-2 justify-content-end">@lang('lang.modify')</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-danger m-2 justify-content-end" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        @lang('lang.delete')
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark-theme p-3">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-header no-border justify-content-center">
                <h1 class="modal-title fs-5 text-uppercase" id="exampleModalLabel">@lang('lang.student_delete')</h1>
            </div>
            <div class="modal-body no-border justify-content-center text-center">
                @lang('lang.student_confirm_delete')
            </div>
            <div class="modal-footer no-border justify-content-center">
                <button type="button" class="btn btn-outline-info mx-2" data-bs-dismiss="modal">@lang('lang.cancel')</button>
                <form action="{{ route('etudiant.edit', $etudiant->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-outline-danger mx-2" value="@lang('lang.delete')">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection