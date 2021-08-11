@extends('site.layouts.app')
@section('title' , __('trans.news') )
@section('styles')
<!--		Owl Carousel-->
<link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/questionnaires.css" />
@endsection
@section('content')
<section class="all-soical">
    <div class="container">
        <div class="whole-section-title-wrapper">
        <h4 class="the-above-title"> الاستطلاعات</h4>
        <h3 class="the-section-title">
            <span class="wow animated">S</span>
            <span class="wow animated">U</span>
            <span class="wow animated">R</span>
            <span class="wow animated">V</span>
            <span class="wow animated">E</span>
            <span class="wow animated">Y</span>
            <span class="wow animated">S</span>
            <!-- <span class="wow animated">N</span>
            <span class="wow animated">A</span>
            <span class="wow animated">I</span>
            <span class="wow animated">R</span>
            <span class="wow animated">E</span>
            <span class="wow animated">S</span> -->
        </h3>
        </div>

        <div class="gallery">
           <ol class="questionnaires">
               @foreach($surveys as $survey)
                <li><a href="{{$survey->url}}" target="_blank">{{$survey->name}}</a></li>
               @endforeach
           </ol>
        </div>

    </div>
</section>

    @endsection
    @section('scripts')
    @endsection
