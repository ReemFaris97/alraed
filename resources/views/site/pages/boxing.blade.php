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
    <div class="othersTitle">الملاكمة</div>
    <p class="othersParagraph text-center">
    الصفحة تحت التطوير
    </p>
    <section id="photostack" class="photostack photostack-start">
        <div>
            <figure>
                <a href="{{ url('site') }}/img/boxing/1.jpeg" class="photostack-img" data-fancybox="karateh" data-caption="مدرب الفريق أثناء التكريم بالمركز الثالث">
                    <img src="{{ url('site') }}/img/karateh/1.jpeg" alt="التكريم بالمركز الثالث"/>
                </a>
                <figcaption>
                    <h2 class="photostack-title">التكريم بالمركز الثالث</h2>
                    <div class="photostack-back">
                        <p>
                            صورة أثناء التكريم بالمركز الثالث فى بطولة المملكة للملاكمة المفتوحة عام 1438ه
                        </p>
                    </div>
                </figcaption>
            </figure>
            <figure>
                <a href="{{ url('site') }}/img/boxing/2.jpeg" class="photostack-img" data-fancybox="boxing" data-caption="مرب الفريق مع لاعبين من الفريق">
                    <img src="{{ url('site') }}/img/boxing/2.jpeg" alt="مرب الفريق مع لاعبين من الفريق"/></a>
                <figcaption>
                    <h2 class="photostack-title">مرب الفريق مع لاعبين من الفريق</h2>
                </figcaption>
            </figure>
            <figure data-shuffle-iteration="2">
                <a href="{{ url('site') }}/img/boxing/3.jpeg" class="photostack-img" data-fancybox="boxing" data-caption="تكريم بطل الفريق">
                    <img src="{{ url('site') }}/img/boxing/3.jpeg" alt="تكريم بطل الفريق"/></a>
                <figcaption>
                    <h2 class="photostack-title">تكريم بطل الفريق</h2>
                    <div class="photostack-back">
                        <p>
                            تكريم بطل الفريق
                        </p>
                    </div>
                </figcaption>
            </figure>
            <figure data-shuffle-iteration="2">
                <a href="{{ url('site') }}/img/boxing/4.jpeg" class="photostack-img" data-fancybox="boxing" data-caption="فريق الأشبال العظيم">
                    <img src="{{ url('site') }}/img/boxing/4.jpeg" alt="فريق الأشبال العظيم "/></a>
                <figcaption>
                    <h2 class="photostack-title">فريق الأشبال العظيم</h2>
                    <div class="photostack-back">
                        <p>
                            فريق الأشبال العظيم
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
