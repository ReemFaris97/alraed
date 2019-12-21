<!DOCTYPE html>
<html lang="ar">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>نادى الرائد السعودي :: الصفحة الرئيسية</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0 , user-scalable=no"> 
        <meta name="description" content="Al'Ra'ed is A professional spots club located in Saudi Arabia , Al qassiem" />
        <meta name="keywords" content="Al Ra'ed, Saudi Club, Alra'ed Football Club, Alra'ed SC, Alraed Club, Al-raed, Saudi League" />
		<meta name="HandheldFriendly" content="True">
  		<meta name="MobileOptimized" content="320">
        <meta name="author" content="Panorama Al-Qassim" />
        <link rel="apple-touch-icon" sizes="57x57" href="{{ url('site/') }}img/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="{{ url('site') }}/img/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="{{ url('site') }}/img/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="{{ url('site') }}/img/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="{{ url('site') }}/img/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="{{ url('site') }}/img/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="{{ url('site') }}/img/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="{{ url('site') }}/img/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="{{ url('site') }}/img/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="{{ url('site') }}/img/favicon/android-icon-192x192.png">
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
        <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/bootstrap-rtl.min.css" />
		<!--		Font Awesome-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
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
        
        <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/main.css" />
    </head>
    <body>
<!--     *************************   Beginning of Header ********************-->
         <header>
        <div class="nav-wrapper" id="the-nav-bar">
            <div class="logo-container">
                <a href="{{ url('/') }}">
                    <img class="logo" src="{{ url('site') }}/img/logo.png" alt="Club Logo">
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
                        <li class="nav-tab {{ actived('/') }}"><a href="{{ url('/') }}">@lang('trans.main')</a></li>
                        <li class="nav-tab {{ actived('first-team') }}"><a href="{{ url('first-team') }}">@lang('trans.first_team')</a></li>
                        <li class="nav-tab {{ actived('schedule') }}"><a href="{{ url('schedule') }}">@lang('trans.tables')</a></li>
                        <li class="nav-tab {{ actived('news') }}"><a href="{{ url('news') }}">@lang('trans.news')</a></li>
                        <!--<li class="nav-tab "><a href="404.html">@lang('trans.tickets')</a></li>-->
                        <li class="nav-tab {{ actived('multimedia') }}"><a href="{{ url('multimedia') }}">@lang('trans.multimedia')</a>
                        </li>
                        {{-- <li class="nav-tab {{ actived('volunteer') }}"><a href="{{ url('volunteer') }}">@lang('trans.volunteers')</a>
                        </li>
                        <li class="nav-tab {{ actived('desires') }}"><a href="{{ url('desires') }}">@lang('trans.record_desires')</a>
                        </li> --}}
                        <li class="nav-tab {{ actived('about-alraed') }}"><a href="{{ url('about-alraed') }}">@lang('trans.about_alraed')</a></li>
                        <li class="nav-tab"><a href="{{ url('other-sports') }}">@lang('trans.more_sports')</a></li>
                    </ul>
                </div>
            </nav>
        </div>
             
             
             
    </header>
<!--     *************************   End      of Header  ********************-->