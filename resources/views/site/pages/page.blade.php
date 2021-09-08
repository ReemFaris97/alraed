@extends('site.layouts.app')
@section('title' , __($page->title) )
@section('styles')
@endsection
@section('content')
<section class="all-soical">
    <div class="container">
        <div class="whole-section-title-wrapper">
            <h4 class="the-above-title"> {{$page->title}}</h4>
          {{--  <h3 class="the-section-title">
                <span class="wow animated">C</span>
                <span class="wow animated">H</span>
                <span class="wow animated">A</span>
                <span class="wow animated">R</span>
                <span class="wow animated">T </span>
            </h3>--}}
        </div>
        <div class="chart_img">
            <img src="{{$page->image}}">
        </div>
    </div>
</section>
@endsection
@section('scripts')
@endsection
