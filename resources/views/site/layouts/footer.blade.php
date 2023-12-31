<html>

<head>

    <style>
        #scrollBottom {
			border: 2px solid black;
            border-radius: 50%;
            background-color: #B7202B;
            width: 55px;
            height: 55px;
            text-align: center;
            position: fixed;
            bottom: 30px;
            left: 30px;
            z-index: 99999999999;
            font-size: 25px;
            color: #fff;
            display: flex !important;
            align-items: center;
			justify-content: center;
			box-shadow: 0 0 8px rgba(0,0,0,0.6);
        }


        #scrollBottom:hover {
            cursor: pointer;
            background-color: #333;
        }

    </style>
</head>

<body>
    <!--     *************************  Beginnig of Footer ********************-->
    <div class="container-fluid the-footer-section" id="footer">
        <div class="container">
            <h3 class="the-section-title">
                <span class="wow animated">A</span>
                <span class="wow animated">l</span>
                <span class="wow animated">-</span>
                <span class="wow animated">R</span>
                <span class="wow animated">a</span>
                <span class="wow animated">e</span>
                <span class="wow animated">d</span>
            </h3>

            <div class="row report-downloader footer_btns">
                <a href="{{ asset('site/img/report.pdf') }}" class="first-site-btn" target="_blank"
                    rel="noreferrer noopener">@lang('trans.actitvity_report') </a>
                <a href="{{ route('complaints') }}" class="first-site-btn" target="_blank"
                    rel="noreferrer noopener">@lang('trans.complaints') </a>
            </div>
            <div class="footer-contact">
                <div class="contact-single info">
                    <div class="pacifico red-color">@lang('trans.info')</div>
                    <div><a href="mailto:{{ setting('email') }}">{{ setting('email') }}</a></div>
                    <div>
                        <a href="tel:{{ setting('phone1') }}">{{ setting('phone1') }}</a>
                        -
                        <a href="tel:{{ setting('phone2') }}">{{ setting('phone2') }}</a>
                    </div>
                </div>
                <div class="contact-single"><a href="#the-nav-bar" class="jump"><img
                            src="{{ url('site') }}/img/logo.png"></a></div>
                <div class="contact-single addrrress">
                    <div class="pacifico red-color">@lang('trans.address')</div>
                    <div>{{ setting('address') }}</div>
                    {{-- <a href="{{ url('privacy') }}" target="_blank"> --}}
                    {{-- @lang('trans.privacy') --}}
                    {{-- </a> --}}
                    {{-- <div>
							القصيم - بريدة
						</div> --}}
                </div>
            </div>
            <div class="footer-social">
                <a href="{{ setting('facebook') }}" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="{{ setting('twitter') }}" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="{{ setting('google') }}" target="_blank">
                    <i class="fab fa-google"></i>
                </a>
                <a href="{{ setting('snapchat') }}" target="_blank">
                    <i class="fab fa-snapchat-ghost"></i>
                </a>
                <a href="{{ setting('instagram') }}" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid reserved-part">
        <span>@lang('trans.developped') </span>
        <a href="http://panorama-q.com/" rel="noreferrer noopener" target="_blank">
            @lang('trans.panorama')
        </a>
    </div>
    <!--     *************************  End      of Footer ********************-->
    <!--    ********************  Beginnig of  Scripts   ************************-->
    <!--        Jquery-->
    <script type="text/javascript" src="{{ url('site') }}/js/jquery-1.11.2.min.js"></script>
    <!--        Bootstraop-->
    <script type="text/javascript" src="{{ url('site') }}/js/bootstrap.min.js"></script>
    <!--        Wow-->
    <script type="text/javascript" src="{{ url('site') }}/js/wow.js"></script>
    <!--	************	Special Scripts for this page only **************** -->


    @yield('scripts')

    <!--        Main Scripts-->
    <!-- NewsTicker-->

    <script type="text/javascript" src="{{ url('site') }}/js/breaking-news-ticker.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#newsTicker2').breakingNews({
                direction: 'rtl'
            });
        });
    </script>


    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
                '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

    <script type="text/javascript" src="{{ url('site') }}/js/main.js"></script>


    <!-- Back to top button -->
    <a href="#footer" id="scrollBottom">
		<i class="fas fa-phone-volume"></i>
	</a>

    <script>
        $('#scrollBottom').click(function(e) {
            e.preventDefault();
            var target = $($(this).attr('href'));
            if (target.length) {
                var scrollTo = target.offset().top;
                $('body, html').animate({
                    scrollTop: scrollTo + 'px'
                }, 1000);
            }
        });
    </script>
</body>

</html>
