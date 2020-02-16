@extends('site.layouts.app')

@section('styles')



@endsection
@section('content')
<section class="all-soical">
    <div class="container">
        <div class="whole-section-title-wrapper">
            <h4 class="the-above-title"> الفاعليات</h4>
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
            <a class="col-md-12 wrap-grids" href="#">

                <div class="gallery-item">
                    <img class="gallery-image" src="{{ url('site') }}/img/slider2.jpg">

                </div>
                <h3>اسم الفاعليه </h3>
            </a>
            <a class="col-md-12 wrap-grids" href="#">

                <div class="gallery-item">
                    <img class="gallery-image" src="{{ url('site') }}/img/slider2.jpg">

                </div>
                <h3>اسم الفاعليه </h3>
            </a>
            <a class="col-md-12 wrap-grids" href="#">

                <div class="gallery-item">
                    <img class="gallery-image" src="{{ url('site') }}/img/slider3.jpg">

                </div>
                <h3>اسم الفاعليه </h3>
            </a>

            <a class="col-md-12 wrap-grids" href="#">

                <div class="gallery-item">
                    <img class="gallery-image" src="{{ url('site') }}/img/slider2.jpg">

                </div>
                <h3>اسم الفاعليه </h3>
            </a>

            <a class="col-md-12 wrap-grids" href="#">

                <div class="gallery-item">
                    <img class="gallery-image" src="{{ url('site') }}/img/slider2.jpg">

                </div>
                <h3>اسم الفاعليه </h3>
            </a>
            <a class="col-md-12 wrap-grids" href="#">

                <div class="gallery-item">
                    <img class="gallery-image" src="{{ url('site') }}/img/slider2.jpg">

                </div>
                <h3>اسم الفاعليه </h3>
            </a>
            <a class="col-md-12 wrap-grids" href="#">

                <div class="gallery-item">
                    <img class="gallery-image" src="{{ url('site') }}/img/slider2.jpg">

                </div>
                <h3>اسم الفاعليه </h3>
            </a>
            <a class="col-md-12 wrap-grids" href="#">

                <div class="gallery-item">
                    <img class="gallery-image" src="{{ url('site') }}/img/slider2.jpg">

                </div>
                <h3>اسم الفاعليه </h3>
            </a>

        </div>

    </div>
</section>


<div class="container">
    <div class="row">
        <div class="paginations">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('scripts')


@endsection
