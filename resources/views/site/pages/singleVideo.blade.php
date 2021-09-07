@extends('site.layouts.app')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/scrolling.css" />
<link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/pater.css" />
@endsection
<link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/bee3D.min.css" />
@section('content')
<div class="soical">
    <div class="whole-section-title-wrapper">
        <h4 class="the-above-title"> الرائد يكرم علي المقبل عبر المسؤولية الاجتماعية</h4>
        <h3 class="the-section-title">
            <span class="wow animated">S</span>
            <span class="wow animated">O</span>
            <span class="wow animated">I</span>
            <span class="wow animated">C</span>
            <span class="wow animated">A </span>
            <span class="wow animated">L</span>
        </h3>
    </div>
    <article id="images-video-slider">
        <section class="bee3D--slide">
            <div class="bee3D--inner">
                <a class="watch-vid-btn" data-fancybox="multimedia" data-caption="" href="{{asset('site/img/videoplayback.mp4')}}" data-toggle="tooltip">
                    <video class="content__img" controls>
                        <source src="{{asset('site/img/videoplayback.mp4')}}" type="video/mp4">
                        <source src="{{asset('site/img/videoplayback.mp4')}}" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </a>
            </div>
        </section>
        <!-- Navigation Arrows -->
        <span class="bee3D--nav bee3D--nav__prev">
            <i class="fas fa-chevron-left"></i>
        </span>
        <span class="bee3D--nav bee3D--nav__next">
            <i class="fas fa-chevron-right"></i>
        </span>
    </article>
    <div class="container">
        <p class="description-"> الرائد يكرم علي المقبل عبر المسؤولية الاجتماعية </p>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ url('site') }}/js/jquery.fancybox.min.js"></script>
<script src="{{ url('site') }}/js/classie.js"></script>
<script src="{{ url('site') }}/js/parallax.custom.js"></script>
<script type="text/javascript" src="{{ url('site') }}/js/bee3D.min.js"></script>
<script>
    var element = document.querySelector('#images-video-slider');
    var slider = new Bee3D(element, {
        effect: 'wave',
        focus: 1,
        listeners: {
            keys: true,
            touches: true
        },
        navigation: {
            enabled: true
        },
        parallax: {
            enabled: true
        },
        shadows: {
            enabled: true
        },
        autoplay: {
            enabled: false,
            speed: 8000
        },
        loop: {
            enabled: true,
            continuous: true
        },
    });
</script>
@endsection