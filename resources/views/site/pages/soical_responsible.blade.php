@extends('site.layouts.app')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/scrolling.css" />
<link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/pater.css" />
@endsection
<link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/bee3D.min.css" />
@section('content')
<div class="soical">
    <div class="whole-section-title-wrapper">
        <h4 class="the-above-title"> أسم الفاعلية</h4>
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
                <a class="watch-vid-btn" data-fancybox="multimedia" data-caption="" href="{{ url('site') }}/img/slider1.jpg" data-toggle="tooltip" title="شاهد المرفق">
                    <img class="content__img" src="{{ url('site') }}/img/theteam.jpeg" alt="لااتةلتلعالبعه">
                </a>
            </div>
        </section>
        <section class="bee3D--slide">
            <div class="bee3D--inner">
                <a class="watch-vid-btn" data-fancybox="multimedia" data-caption="" href="{{ url('site') }}/img/slider1.jpg" data-toggle="tooltip" title="شاهد المرفق">
                    <img class="content__img" src="{{ url('site') }}/img/slider3.jpg" alt="لااتةلتلعالبعه">
                </a>
            </div>
        </section>
        <section class="bee3D--slide">
            <div class="bee3D--inner">
                <a class="watch-vid-btn" data-fancybox="multimedia" data-caption="" href="https://www.youtube.com/watch?v=8752FbUEy_w" data-toggle="tooltip" title="شاهد الفيديو">
                    <img class="content__img" src="{{ url('site') }}/img/slider2.jpg" alt="لااتةلتلعالبعه">
                </a>
            </div>
        </section>
        <section class="bee3D--slide">
            <div class="bee3D--inner">
                <a class="watch-vid-btn" data-fancybox="multimedia" data-caption="" href="{{ url('site') }}/img/slider1.jpg" data-toggle="tooltip" title="شاهد المرفق">
                    <img class="content__img" src="{{ url('site') }}/img/slider1.jpg" alt="لااتةلتلعالبعه">
                </a>
            </div>
        </section>
        <section class="bee3D--slide">
            <div class="bee3D--inner">
                <a class="watch-vid-btn" data-fancybox="multimedia" data-caption="" href="https://www.youtube.com/watch?v=8752FbUEy_w" data-toggle="tooltip" title="شاهد الفيديو">
                    <img class="content__img" src="{{ url('site') }}/img/slider3.jpg" alt="لااتةلتلعالبعه">
                </a>
            </div>
        </section>
        <section class="bee3D--slide">
            <div class="bee3D--inner">
                <a class="watch-vid-btn" data-fancybox="multimedia" data-caption="" href="{{ url('site') }}/img/slider1.jpg" data-toggle="tooltip" title="شاهد المرفق">
                    <img class="content__img" src="{{ url('site') }}/img/slider1.jpg" alt="لااتةلتلعالبعه">
                </a>
            </div>
        </section>
        <section class="bee3D--slide">
            <div class="bee3D--inner">
                <a class="watch-vid-btn" data-fancybox="multimedia" data-caption="" href="https://www.youtube.com/watch?v=8752FbUEy_w" data-toggle="tooltip" title="شاهد الفيديو">
                    <img class="content__img" src="{{ url('site') }}/img/slider3.jpg" alt="لااتةلتلعالبعه">
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

        <p class="description-">النادي في لعبة كرة القدم حيث يلعب في الدوري الممتاز منذ عام ١٤٠٦هـ والذي يطلق عليه حاليا اسم دوري محمد بن سلمان للمحترفين. وحقق النادي أفضل ترتيب له في بعض المواسم باحتلاله المركز الخامس، وحصل مرّتين على بطولة دوري الدرجة الأولى السعودي عامي 1992م و2008م، كما فاز بدوري الدرجة الثانية السعودي في عام 2006م، وكأس الأمير فيصل بن فهد لأندية الدرجة الأولى والثانية عام 2006م. ويعتمد النادي أساساً في تزويد الفريق الأول لكرة القدم باللّاعبين على الفئات السنّية التي يعتني النادي بتطويرها إضافة إلى استقطاب عدد محدود من اللّاعبين الأجانب. ويُشارك النادي في عدة ألعاب رياضية مختلفة (غير كرة القدم) وهي: الملاكمة، كرة اليد، الكاراتيه، والألعاب الإلكترونية. وتحقيقاً لتوجهات الهيئة العامة للرياضة بتطوير مختلف الألعاب الرياضية في المملكة، فقد سارع النادي في بداية عام 1441هـ بإنشاء ست رياضات جديدة وهي: الدّراجات، التايكوندو، كرة الطاائرة، السباحة، تنس الطاولة، القدرة والتحمّل. </p>

    </div>
</div>



@endsection

@section('scripts')

<!--
<script src="{{ url('site') }}/js/imagesloaded.pkgd.min.js"></script>
<script src="{{ url('site') }}/js/anime.min.js"></script>
<script src="{{ url('site') }}/js/scrollMonitor.js"></script>
<script src="{{ url('site') }}/js/scrolling.js"></script>
-->
<script type="text/javascript" src="{{ url('site') }}/js/jquery.fancybox.min.js"></script>

<script src="{{ url('site') }}/js/classie.js"></script>
<script src="{{ url('site') }}/js/parallax.custom.js"></script>
<script type="text/javascript" src="{{ url('site') }}/js/bee3D.min.js"></script>
<script>
    var element = document.querySelector('#images-video-slider');
    var slider = new Bee3D(element, {
        effect: 'wave',
        focus: 2,
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
