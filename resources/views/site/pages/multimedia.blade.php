@extends('site.layouts.app')
@section('title', __('trans.multimedia'))
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/grid.css" />
    <script src="{{ url('site') }}/js/multimedia/modernizr.custom.js"></script>

@endsection

@section('content')

    <!--     *************************   Beginnig of ٍSection ********************-->
    <div class="container single-section-padding">
        <div class="whole-section-title-wrapper">
            <h3 class="the-section-title">
                <span class="wow animated">M</span>
                <span class="wow animated">U</span>
                <span class="wow animated">L</span>
                <span class="wow animated">T</span>
                <span class="wow animated">I</span>
                <span class="wow animated">M</span>
                <span class="wow animated">E</span>
                <span class="wow animated">D</span>
                <span class="wow animated">I</span>
                <span class="wow animated">A</span>
            </h3>
        </div>

        <div id="grid-gallery" class="grid-gallery">
            <section class="grid-wrap">
                <ul class="grid">
                    <li class="grid-sizer"></li><!-- for Masonry column width -->
                    @foreach ($multimedia as $media)
                        <li>
                            <figure>
                                {{-- @foreach ($media->images as $item) --}}
                                {{-- <img src="{{ asset($item->path) }}" alt="{{ $media->title }}"/> --}}
                                {{-- @endforeach --}}
                                <img src="{{ $media->image }}" alt="{{ $media->title }}" />
                                <figcaption>
                                    <h3>{{ $media->title }}</h3>
                                    <p>{{ $media->description }}</p>
                                </figcaption>
                            </figure>
                        </li>
                    @endforeach
                </ul>

                <footer class="page-meta" v-show="show">
                    <span class="transparented">{{ $multimedia->links() }}</span>
                </footer>

            </section><!-- // grid-wrap -->
            <section class="slideshow">
                <ul>
                    @foreach ($multimedia as $media)
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>{{ $media->title }}</h3>
                                    <p>{{ $media->description }} </p>
                                </figcaption>
                                <img src="{{ getimg($media->image) }}" alt="{{ $media->title }}" />
                            </figure>
                        </li>
                    @endforeach
                </ul>
                <nav>
                    <span class="icon nav-prev"></span>
                    <span class="icon nav-next"></span>
                    <span class="icon nav-close"></span>
                </nav>
                <div class="info-keys icon">@lang('trans.arrow_turn')</div>
            </section><!-- // slideshow -->
        </div><!-- // grid-gallery -->



    </div>

    <!--     *************************  End      of ٍSection ********************-->

@endsection

@section('scripts')
    <script src="{{ url('site') }}/js/multimedia/imagesloaded.pkgd.min.js"></script>
    <script src="{{ url('site') }}/js/multimedia/masonry.pkgd.min.js"></script>
    <script src="{{ url('site') }}/js/multimedia/classie.js"></script>
    <script src="{{ url('site') }}/js/multimedia/cbpGridGallery.js"></script>
    <script>
        new CBPGridGallery(document.getElementById('grid-gallery'));
    </script>
@endsection
