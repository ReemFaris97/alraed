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
        <h4 class="the-above-title"> الاستبيانات</h4>
        <h3 class="the-section-title">
            <span class="wow animated">Q</span>
            <span class="wow animated">U</span>
            <span class="wow animated">E</span>
            <span class="wow animated">S</span>
            <span class="wow animated">T</span>
            <span class="wow animated">I</span>
            <span class="wow animated">O</span>
            <span class="wow animated">N</span>
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
                <li><a href="#" target="_blank">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص</a></li>
                <li><a href="#" target="_blank">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما</a></li>
                <li><a href="#" target="_blank">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص</a></li>
                <li><a href="#" target="_blank">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما</a></li>
                <li><a href="#" target="_blank">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما</a></li>
           </ol>
        </div>

    </div>
</section>

    @endsection
    @section('scripts')
    @endsection