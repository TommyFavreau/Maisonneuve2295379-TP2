@extends('layouts.app')
@section('title', trans('lang.student_update'))
@section('content')
<div class="container  flex-grow">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="{{ route('etudiant.create')}}" class="btn btn-outline-info">
                        @lang('lang.add_student')
                    </a>
                </div>
            </div>
        </div>

        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section text-white"> @lang('lang.student_list')</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 border-thick-rounded p-4">
                    <div class="table-wrap ">
                        <div class="d-flex justify-content-center align-items-center">
                            {{ $etudiants }}
                        </div>
                        <table class="table text-white">
                            <thead>
                                <tr class="text-white">
                                    <th>@lang('lang.student_name')</th>
                                    <th>@lang('lang.student_address')</th>
                                    <th>@lang('lang.student_email')</th>
                                    <th>@lang('lang.student_phone')</th>
                                    <th>@lang('lang.student_birthday')</th>
                                    <th>@lang('lang.student_city')</th>
                                    <th>@lang('lang.student_actions')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($etudiants as $etudiant)
                                <tr>
                                    <th><a href="{{ route('etudiant.show', $etudiant->id)}}" class="text-decoration-none text-warning">{{ $etudiant->name }}</a></th>
                                    <td>{{ $etudiant->address }}</td>
                                    <td>{{ $etudiant->email }}</td>
                                    <td>{{ $etudiant->phone }}</td>
                                    <td>{{ $etudiant->birthday }}</td>
                                    <td>{{ $etudiant->etudiantHasVille->name }}</td>
                                    <td>
                                        <a href="{{ route('etudiant.show', $etudiant->id)}}" class="btn btn-outline-warning mt-1"> @lang('lang.details') </a>
                                    </td>
                                </tr>
                                @empty
                                <td class="text-danger">@lang('lang.student_empty')</td>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center align-items-center mt-30">
                            {{ $etudiants }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection