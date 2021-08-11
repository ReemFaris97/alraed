@extends('site.layouts.app')
@section('title' , __('trans.volunteer') )
@section('styles')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.11/css/bootstrap-select.min.css">
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
                <span class="wow animated">C</span>
                <span class="wow animated">O</span>
                <span class="wow animated">M</span>
                <span class="wow animated">P</span>
                <span class="wow animated">L</span>
                <span class="wow animated">A</span>
                <span class="wow animated">I</span>
                <span class="wow animated">N</span>
                <span class="wow animated">T</span>
                <span class="wow animated">S</span>
            </h3>
        </div>
    </div><!-- /container -->
    <section>

        <div class="volunteer-form-wrapper container-fluid">
            <div class="container vol-form">
                <div class="the-all-form-title">
                <span>
                    تسجيل الشكاوى والمقترحات
                </span>
                </div>
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}
                    </div>
                @endif

                <form method="post" action="{{ url('complaints') }}">
                    @csrf
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
                        <textarea name="text" class="form-control" rows="5"></textarea>
                        @error('text')
                        <span style="color: red">{{ $message }}</span>
                        @enderror
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
