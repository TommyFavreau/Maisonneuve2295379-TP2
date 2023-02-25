@extends('layouts.app')
@section('title', trans('lang.home'))
@section('content')
@php $locale = session()->get('locale'); @endphp

<section class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="about-left">
                    <div class="about-title align-left">
                        <span class="wow fadeInDown" data-wow-delay=".2s"> @lang('lang.about_college')</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s"> @lang('lang.welcome_campus') </h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">@lang('lang.college_info')</p>
                        <div class="button wow fadeInUp" data-wow-delay="1s">
                            <a href="" class="btn">@lang('lang.read_more')</a>
                            <a href="https://www.youtube.com/watch?v=7h0ndoYeOCY" target="_blank" class="glightbox video btn"> @lang('lang.play_video')<i class="lni lni-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="about-right wow fadeInRight" data-wow-delay=".4s">
                    <img src="{{ asset('assets/images/about/about-img22.png')}}" alt="Students and stuff">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection