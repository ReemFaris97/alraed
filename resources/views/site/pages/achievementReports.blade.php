@extends('site.layouts.app')
@section('title' , __('الهيكل التنظيمى') )
@section('styles')
@endsection
@section('content')
<section class="all-soical">
    <div class="container">
        <div class="whole-section-title-wrapper">
            <h4 class="the-above-title"> تقارير الإنجاز</h4>
            <h3 class="the-section-title">
                <span class="wow animated">R</span>
                <span class="wow animated">E</span>
                <span class="wow animated">P</span>
                <span class="wow animated">O</span>
                <span class="wow animated">R</span>
                <span class="wow animated">T </span>
            </h3>
        </div>
        <div class="reports_wrap">
        <div class="row">
            @foreach(\App\Achievement::all() as $achievement)
                <div class="col-sm-6 col-xs-12">
                    <div class="bdf-wrap">
                        <a href="{{$achievement->url}}" target="_blank"> {{$achievement->name}}</a>
                        <a class="bdf-download" href="{{$achievement->url}}" download=""><i class="fas fa-download"></i></a>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
@endsection
