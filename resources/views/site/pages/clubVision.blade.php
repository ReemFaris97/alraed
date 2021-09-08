@extends('site.layouts.app')
@section('title' , )
@section('title' , __('رؤية النادي ورسالته وقيمه') )
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/scrolling.css" />
<link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/pater.css" />
@endsection
@section('content')
<main class="single-section-padding about-us-section">
    <div class="morph-wrap">
        <svg class="morph" width="1400" height="770" viewBox="0 0 1400 770">
            <path
                d="M 262.9,252.2 C 210.1,338.2 212.6,487.6 288.8,553.9 372.2,626.5 511.2,517.8 620.3,536.3 750.6,558.4 860.3,723 987.3,686.5 1089,657.3 1168,534.7 1173,429.2 1178,313.7 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z"/>
        </svg>
    </div>
    <div class="content-wrap">
        <h3 class="content__title lg_title">رؤية النادى</h3>
        <div class="content content--layout content--layout-1">
            <img class="content__img" src="{{ url('site') }}/img/logo.png" alt="رؤية النادى"/>
            <p class="content__desc">{!!  getsetting('vision')!!} </p>
        </div>
    </div>
    <div class="content-wrap">
        <h3 class="content__title lg_title">رسالة النادى</h3>
        <div class="content content--layout content--layout-1">
            <img class="content__img" src="{{ url('site') }}/img/ball.jpg" alt="رسالة النادى"/>
            <p class="content__desc">{!!  getsetting('club_message')!!} </p>

        </div>
    </div>
    <div class="content-wrap">
        <h3 class="content__title lg_title">هدف النادى</h3>
        <div class="content content--layout content--layout-1">
            <img class="content__img" src="{{ url('site') }}/img/logo.png" alt="هدف النادى"/>
            <p class="content__desc">{!! getsetting('club_goal') !!} </p>

        </div>
    </div>
</main>
@endsection
@section('scripts')
    <script src="{{ url('site') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ url('site') }}/js/anime.min.js"></script>
    <script src="{{ url('site') }}/js/scrollMonitor.js"></script>
    <script src="{{ url('site') }}/js/scrolling.js"></script>
@endsection
