@extends('site.layouts.app')
@section('title', __('trans.news'))
@section('styles')
    <!--		Owl Carousel-->
    <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/owl.theme.default.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/news.css" />
    <script src="{{ url('site') }}/js/modernizr.custom.js"></script>
@endsection


@section('content')
    <!--     *************************   Beginnig of ٍSection ********************-->
    <div class="container single-section-padding news-sec-wrapper">
        <div class="whole-section-title-wrapper">
            <h4 class="the-above-title"> @lang('trans.alraed')</h4>
            <h3 class="the-section-title">
                <span class="wow animated">N</span>
                <span class="wow animated">E</span>
                <span class="wow animated">W</span>
                <span class="wow animated">S</span>
            </h3>
            <button id="menu-toggle" class="menu-toggle"><span>Menu</span></button>
            <div id="theGrid" class="main">
                <section class="grid">
                        <a class="grid__item" id="myLink">
                            <h2 class="title title--preview">{{ $news->title }}</h2>
                            <div class="loader"></div>
                            <span class="category">{{ $news->category->name }}</span>
                            <div class="meta meta--preview">
                                <img class="meta__avatar" src="{{ getimg($news->image) }}"
                                    alt="{{ $news->title }}" />
                                <span class="meta__date"><i class="fa fa-calendar-o"></i>
                                    {{ $news->created_at->format('d M') }}</span>
                                <span class="meta__reading-time"><i class="fa fa-clock-o"></i>
                                    {{ $news->created_at->format('h:i a') }}</span>
                            </div>
                        </a>

                </section>
                <section class="content">
                    <div class="scroll-wrap">
                            <article class="content__item">
                                <span class="category category--full">{{ $news->category->name }}</span>
                                <h2 class="title title--full">{{ $news->title }}</h2>
                                <div class="meta meta--full">
                                    <img class="meta__avatar" src="{{ getimg($news->image) }}" alt="author01" />
                                    <span class="meta__author">{{ $news->writer_name }}</span>
                                    <span class="meta__date"><i
                                            class="fa fa-calendar-o"></i>{{ $news->created_at->format('d M') }}</span>
                                    <span class="meta__reading-time"><i class="fa fa-clock-o"></i>
                                        {{ $news->created_at->format('h:i a') }}</span>
                                </div>

                                <!--							images slider here if isset-->
                                <div class="inner-news-slider owl-carousel owl-theme news-slider-caro">
                                    @foreach ($news->images as $img)
                                        <div class="item">
                                            <div class="news-image-wrapper">
                                                <a href="{{ asset($img->image) }}" data-fancybox="news">
                                                    <img src="{{ asset($img->image) }}" alt="صورة للخبر">
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>



                                <p>
                                    {{ $news->description }}
                                </p>

                            </article>



                    </div>
                    <button class="close-button" id="close-it"><i class="fa fa-times"></i><span>Close</span></button>
                </section>
            </div>
        </div><!-- /container -->
        <!--     *************************  End      of ٍSection ********************-->
    @endsection
    @section('scripts')
        <!--		Fancy Box-->
        <script type="text/javascript" src="{{ url('site') }}/js/jquery.fancybox.min.js"></script>
        <!--		Owl Carousel-->
        <script type="text/javascript" src="{{ url('site') }}/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="{{ url('site') }}/js/news/classie.js"></script>
        <script type="text/javascript" src="{{ url('site') }}/js/news/main-news.js"></script>
        {{-- <script type="text/javascript">
			$(document).ready(function(){
				$('.grid__item').click(function(){
					NewsFunction();
				});
			})
		</script> --}}




        <script>
            $(document).ready(function() {
                document.getElementById('myLink').click();
                $('.news-slider-caro').owlCarousel({
                    animateOut: 'slideOutDown',
                    animateIn: 'flipInX',
                    items: 1,
                    margin: 0,
                    loop: true,
                    stagePadding: 0,
                    dots: true,
                    rtl: true,
                    nav: false,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 5000,
                });

            })
        </script>


    @endsection
