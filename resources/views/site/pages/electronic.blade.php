<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--		FancyBox-->
    <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/jquery.fancybox.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/polaroids/component.css" />
    <script src="{{ url('site') }}/js/polaroids/modernizr.min.js"></script>
</head>
<body>
<div class="container">
    <div class="othersTitle">الالعاب الالكترونية</div>
    <p class="othersParagraph text-center">
    </p>
    <section id="photostack" class="photostack photostack-start">
        <div>
            <figure>
                <a href="{{ asset('site/img/maged-egames.jpg') }}" class="photostack-img" data-fancybox="karateh" data-caption="الرياضات الالكترونية">
                    <img src="{{ asset('site/img/egames.jpg') }}" alt="الرياضات الالكترونية"/>
                </a>
                <figcaption>
                    <h2 class="photostack-title">الرياضات الالكترونية</h2>
                    <div class="photostack-back">
                        <p>
حجز اللاعب ماجد الرشيد لاعب الرائد للرياضات الالكترونية بطاقة المشاركة في بطولة غرب اسيا المؤهلة لكأس العالم في بطولة FIFA21 و التي ستقام في الفترة (11 - 10 ابريل القادم )
                        </p>
                    </div>
                </figcaption>
            </figure>
        </div>
    </section>
</div>
<!--        Jquery-->
<script type="text/javascript" src="{{ url('site') }}/js/jquery-1.11.2.min.js"></script>
<!--		Fancy Box-->
<script type="text/javascript" src="{{ url('site') }}/js/jquery.fancybox.min.js"></script>
<script src="{{ url('site') }}/js/polaroids/classie.js"></script>
<script src="{{ url('site') }}/js/polaroids/photostack.js"></script>
<script>
    new Photostack( document.getElementById( 'photostack' ), {
        callback : function( item ) {
        }
    } );
</script>
</body>
</html>
