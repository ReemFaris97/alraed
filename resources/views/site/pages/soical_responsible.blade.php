@extends('site.layouts.app')
@section('title' , __('trans.soical_responsible') )
@section('styles')



@endsection
@section('content')
<section class="all-soical">
    <div class="container">
        <div class="whole-section-title-wrapper">
            <h4 class="the-above-title"> الفعاليات</h4>
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
            @foreach($events as $event)
            <a class="col-md-12 wrap-grids" href="{{ url('event/'.$event->id) }}">

                <div class="gallery-item">
                    <img class="gallery-image" src="{{ $event->attach_list[0] }}">

                </div>
                <h3> {{ $event->title }} </h3>
            </a>
            @endforeach

        </div>

    </div>
</section>


<div class="container">
    <div class="row">
        <div class="paginations">
            {{-- <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul> --}}
            <p class="paginations">{!! $events !!}</p>
        </div>
    </div>
</div>
@endsection

@section('scripts')


@endsection
