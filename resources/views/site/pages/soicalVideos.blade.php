@extends('site.layouts.app')
@section('title' , __('الفيديوهات') )
@section('styles')
@endsection
@section('content')
<section class="all-soical">
    <div class="container">
        <div class="whole-section-title-wrapper">
            <h4 class="the-above-title"> الفيديوهات</h4>
            <h3 class="the-section-title">
                <span class="wow animated">S</span>
                <span class="wow animated">O</span>
                <span class="wow animated">I</span>
                <span class="wow animated">C</span>
                <span class="wow animated">A </span>
                <span class="wow animated">L</span>
            </h3>
        </div>
        <div class="gallery">
            <a class="col-md-12 wrap-grids" href="{{ url('singleVideo') }}">
                <div class="gallery-item">
                    <img class="gallery-image" src="{{asset('site/img/multi4.jpg')}}">
                </div>
                <h3>  الرائد يكرم علي المقبل عبر المسؤولية الاجتماعية  </h3>
            </a>
            <a class="col-md-12 wrap-grids" href="{{ url('singleVideo') }}">
                <div class="gallery-item">
                    <img class="gallery-image" src="{{asset('site/img/multi4.jpg')}}">
                </div>
                <h3>  الرائد يكرم علي المقبل عبر المسؤولية الاجتماعية  </h3>
            </a>
            <a class="col-md-12 wrap-grids" href="{{ url('singleVideo') }}">
                <div class="gallery-item">
                    <img class="gallery-image" src="{{asset('site/img/multi4.jpg')}}">
                </div>
                <h3>  الرائد يكرم علي المقبل عبر المسؤولية الاجتماعية  </h3>
            </a>
            <a class="col-md-12 wrap-grids" href="{{ url('singleVideo') }}">
                <div class="gallery-item">
                    <img class="gallery-image" src="{{asset('site/img/multi4.jpg')}}">
                </div>
                <h3>  الرائد يكرم علي المقبل عبر المسؤولية الاجتماعية  </h3>
            </a>
            <a class="col-md-12 wrap-grids" href="{{ url('singleVideo') }}">
                <div class="gallery-item">
                    <img class="gallery-image" src="{{asset('site/img/multi4.jpg')}}">
                </div>
                <h3>  الرائد يكرم علي المقبل عبر المسؤولية الاجتماعية  </h3>
            </a>
        </div>
    </div>
</section>
@endsection
@section('scripts')
@endsection