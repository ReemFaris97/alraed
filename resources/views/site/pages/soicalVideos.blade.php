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
            <div class="row">
                @foreach(\App\Video::all() as $video)
                <div class="col-md-6">
                    <iframe id="ytplayer" type="text/html" width="580" height="300"
                            src="https://www.youtube.com/embed/{{$video->code}}"
                            frameborder="0"></iframe>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
@endsection
@section('scripts')
@endsection
