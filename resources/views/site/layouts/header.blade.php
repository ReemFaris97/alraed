    <!DOCTYPE html>
    <html lang="ar">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- <title>نادى الرائد السعودي :: الصفحة الرئيسية</title> -->
        <title>@lang('trans.alraed_club') :: @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0 , user-scalable=no">
        <meta name="description" content="Al'Ra'ed is A professional spots club located in Saudi Arabia , Al qassiem" />
        <meta name="keywords"
            content="Al Ra'ed, Saudi Club, Alra'ed Football Club, Alra'ed SC, Alraed Club, Al-raed, Saudi League" />
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="author" content="Panorama Al-Qassim" />
        <link rel="apple-touch-icon" sizes="57x57" href="{{ url('site/') }}img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ url('site') }}/img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ url('site') }}/img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ url('site') }}/img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ url('site') }}/img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ url('site') }}/img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ url('site') }}/imاg/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ url('site') }}/img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ url('site') }}/img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"
            href="{{ url('site') }}/img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ url('site') }}/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ url('site') }}/img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ url('site') }}/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="{{ url('site') }}/img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#B7202B">
        <meta name="msapplication-TileImage" content="{{ url('site') }}/img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#B7202B">
        <!--        Bootstrap-->
        <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/bootstrap-theme.min.css" />
        @if (App::getLocale() == 'ar')
            <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/bootstrap-rtl.min.css" />
        @endif
        <!--		Font Awesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
            integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <!--		Animate-->
        <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/animate.css" />
        <!--		FancyBox-->
        <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/jquery.fancybox.min.css" />
        <!--	********************Begin	Special Styles for this page only *************************-->
        @yield('styles')
        <!--	********************End  	Special Styles for this page only *************************-->
        <!--- newsticker -->
        <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/breaking-news-ticker.css" />
        <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/demo-page-styles.css" />
        @if (App::getLocale() == 'en')
            <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/breaking-news-ticker-ltr.css" />
            <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/main-ltr.css" />
        @else
            <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/breaking-news-ticker-rtl.css" />
            <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/main-rtl.css" />
        @endif
    </head>

    <body>
        <!--     *************************   Beginning of Header ********************-->
        <header>
            <div class="nav-wrapper" id="the-nav-bar">
                <div class="logo-container">
                    <a href="{{ url('/') }}" class="">
                        <img class="logo" src="{{ url('site') }}/img/logo.png" alt="Club Logo">

                        {{-- @if (App::getLocale() == 'en')
                            <img class="logo" src="{{ url('site') }}/img/en-logo.png" alt="Club Logo">
                        @else
                            <img class="logo" src="{{ url('site') }}/img/ar-logo.png" alt="Club Logo">
                        @endif --}}


                    </a>
                </div>
                <nav>
                    <input class="hidden" type="checkbox" id="menuToggle">
                    <label class="menu-btn" for="menuToggle">
                        <div class="menu"></div>
                        <div class="menu"></div>
                        <div class="menu"></div>
                    </label>
                    <div class="nav-container">
                        <ul class="nav-tabs navigation-bar">
                            <li class="nav-tab {{ actived('/') }}"><a
                                    href="{{ url('/') }}">@lang('trans.main')</a></li>
                            <!-------------------------------------->
                            <li class="nav-tab hoverable-droppy-wrap {{ actived('about-alraed') }}">
                                <a href="#">@lang('trans.about_alraed')<b class="caret"></b></a>
                                <div class="hoverable-droppy">
                                    <div class="hoverable-inner">
                                        <a href="{{ url('about-alraed') }}">نبذة تاريخية</a>
                                        @foreach (\App\Page::all() as $page)
                                            <a href="{{ route('pages.show', $page->id) }}">{{ $page->name }}</a>
                                            {{-- <a href="#">مجلس الإدارة</a>
                                        <a href="#">الإدارة العليا</a> --}}
                                        @endforeach

                                        <a href="{{ route('contacts.index') }}">اتصل بنا</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-tab hoverable-droppy-wrap">
                                <a href="#">الاستراتيجية<b class=" caret"></b></a>
                                <div class="hoverable-droppy">
                                    <div class="hoverable-inner">
                                        <a href="{{ url('clubVision') }}">رؤية النادى ورسالته وقيمه</a>
                                        <a href="{{ url('strategicGoals') }}">الأهداف الاستراتيجية</a>
                                        <a href="{{ asset('site/img/wathika.pdf') }}" target="_blank"
                                            rel=" noopener">
                                            @lang('trans.Document_strategic_club')
                                        </a>

                                        <a href="{{ asset('site/التقرير السنوي 2020-2021.pdf') }}" target="_blank"
                                            rel=" noopener">
                                            @lang('trans.annual_report')
                                        </a>

                                        <!--<a href="{{ url('achievementReports') }}">تقارير الإنجاز</a>-->
                                    </div>
                                </div>
                            </li>
                            <li class="nav-tab hoverable-droppy-wrap">
                                <a href="#">الرياضات<b class="caret"></b></a>
                                <div class="hoverable-droppy">
                                    <div class="hoverable-inner">
                                        <a href="{{ route('first-team') }}">كرة القدم</a>
                                        <a href="{{ route('other-sports') }}">الألعاب المختلفة</a>
                                        <a href="{{ route('academy') }}">الأكاديمية</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-tab hoverable-droppy-wrap">
                                <a href="#">المركز الإعلامى<b class="caret"></b></a>
                                <div class="hoverable-droppy">
                                    <div class="hoverable-inner">
                                        <a href="{{ url('news') }}">الأخبار</a>
                                        <a href="{{ url('multimedia') }}">ألبوم الصور</a>
                                        <!--<a href="{{ route('videos.index') }}">الفيديوهات</a>-->
                                        <a href="{{ route('schedule') }}">مباريات النادى</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-tab "><a href="https://store.alraedclub.sa/"
                                    target="_blank">@lang('trans.store')</a></li>
                            <li class="nav-tab "><a href="https://www.alraed.evento.sa/home"
                                    target="_blank">@lang('trans.my_ticket')</a></li>
                            <li class="nav-tab hoverable-droppy-wrap">
                                <a href="#">استطلاعات<b class="caret"></b></a>
                                <div class="hoverable-droppy">
                                    <div class="hoverable-inner">
                                        {{-- @foreach (\laravelsurveyjs\app\Models\Survey::all() as $survey)
                                            <a href="{{route('survey-manager.run',$survey->slug)}}">{{$survey->name}}</a>
                                        @endforeach --}}

                                        <a target="_blank"
                                            href="https://docs.google.com/forms/d/e/1FAIpQLSdMDeUwo5Hby3LtH9OL2zHlTvD_107wRqq0SFqyPAmA5JwlEg/viewform">

                                            استبيان الزوار
                                        </a>


                                        <a target="_blank"
                                            href="https://docs.google.com/forms/d/e/1FAIpQLSeQ1wrBdcBO8BkZCpodHp3R6lPKTVF2FbzxwtRFD3CGKmOCdA/viewform">استبيان
                                            الانطباعات العامه </a>


                                        <a target="_blank"
                                            href="https://docs.google.com/forms/d/e/1FAIpQLSeUHNTAR_6zwHPC70bxUIY5Z38f5km0B2MgCMXWKdmhL38dww/viewform">
                                            رايك يهمنا
                                        </a>




                                    </div>
                                </div>
                            </li>
                            <li class="nav-tab "><a href="{{ route('complaints') }}" target="_blank"
                                    rel="noreferrer noopener">@lang('trans.complaints')</a>
                            </li>

                            <!-------------------------------------->
                            <li class="nav-tab hoverable-droppy-wrap">
                                <a href="#">{{ __('trans.more') }}<b class="caret"></b></a>
                                <div class="hoverable-droppy">
                                    <div class="hoverable-inner">
                                        <a href="{{ url('volunteer') }}" target="_blank"
                                            rel="noreferrer noopener">المتطوعون</a>
                                        <a href="{{ url('desires') }}" target="_blank"
                                            rel="noreferrer noopener">الراغبون في التسجيل</a>

                                        <!--<a href="{{ asset('site/img/dalil.pdf') }}" target="_blank" rel=" noopener">-->
                                        <!--    @lang('trans.Organizational_guide')-->
                                        <!--</a>-->
                                        <a
                                            href="{{ url('soical-responsible') }}">@lang('trans.soical_responsible')</a>
                                    </div>
                                </div>
                            </li>
                            <div id="changeLang">

                                @if (App::getLocale() == 'en')

                                    <a href="{{ route('lang', ['ar']) }}" id="en-lan" class="chooose-lang">
                                        <span>ع</span>
                                        <img src="{{ asset('site/img/ar.png') }}" alt="">
                                    </a>
                                @else

                                    <a href="{{ route('lang', ['en']) }}" class="chooose-lang">
                                        <span>En</span>
                                        <img src="{{ asset('site/img/en.png') }}" alt="">
                                    </a>
                                @endif

                            </div>
                        </ul>
                    </div>
                </nav>
            </div>



        </header>
        <!--     *************************   End      of Header  ********************-->
