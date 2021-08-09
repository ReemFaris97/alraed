@extends('site.layouts.app')
@section('title' , __('trans.volunteer') )
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.11/css/bootstrap-select.min.css">
<link rel="stylesheet" href="{{asset('site/css/forma.css')}}">
<script src="{{ url('site') }}/js/modernizr.custom.js"></script>
<meta name="msapplication-TileColor" content="#B7202B">
<meta name="theme-color" content="#B7202B">
@endsection
@section('content')
<!--     *************************   Beginnig of ٍSection ********************-->
<div class="container single-section-padding">
    <div class="whole-section-title-wrapper">
        <h4 class="the-above-title"> @lang('trans.alraed')</h4>
        <h3 class="the-section-title">
            <span class="wow animated">V</span>
            <span class="wow animated">o</span>
            <span class="wow animated">l</span>
            <span class="wow animated">u</span>
            <span class="wow animated">n</span>
            <span class="wow animated">t</span>
            <span class="wow animated">e</span>
            <span class="wow animated">e</span>
            <span class="wow animated">r</span>
        </h3>
    </div>
</div><!-- /container -->
<section>

    <div class="volunteer-form-wrapper container-fluid">
        <div class="container vol-form">
            @if(app()->getLocale() == 'en')
            <a href="{{ url('volunteer/ar') }}" title="عربي" class="btn btn-default pull-left">عربي</a>
            @else
            <a href="{{ url('volunteer/en') }}" title="EN" class="btn btn-default pull-left">EN</a>
            @endif
            <div class="the-all-form-title">
                <span>
                    تسجيل الشكاوى والمقترحات
                </span>
            </div>
            <form method="post" action="{{ url('complaints') }}">
                <div class="form-group col-xs-12">
                    <label for="name">@lang('trans.name')</label>
                    <input type="text" name="name" class="form-control" id="name" required="">
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    <label for="mob">@lang('trans.phone')</label>
                    <input type="text" name="phone" class="form-control" id="mob">
                    @error('phone')
                    <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    <label for="mail">@lang('trans.email')</label>
                    <input type="email" name="email" class="form-control" id="mail">
                    @error('email')
                    <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-xs-12">
						<label for="opinion">الموضوع</label>
						<textarea name="opinion" class="form-control" rows="5"></textarea>
					</div>
                <div class="row">
                    <div class="col-md-12 form-btn-wrapp">
                        <button type="submit" class="first-site-btn">@lang('trans.send')</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!--     *************************  End      of ٍSection ********************-->
@endsection
@section('scripts')

@endsection