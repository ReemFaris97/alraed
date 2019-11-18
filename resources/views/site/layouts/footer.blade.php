<!--     *************************  Beginnig of Footer ********************-->
        <div class="container-fluid the-footer-section">
           	<div class="container">
				<h3 class="the-section-title">
					<span class="wow animated">A</span>
					<span class="wow animated">l</span>
					<span class="wow animated">-</span>
					<span class="wow animated">R</span>
					<span class="wow animated">a</span>
					<span class="wow animated">'</span>
					<span class="wow animated">e</span>
					<span class="wow animated">d</span>
				</h3>
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
					<div class="contact-single"><a href="#the-nav-bar" class="jump"><img src="{{ url('site') }}/img/logo.png"></a></div>
					<div class="contact-single addrrress">
						<div class="pacifico red-color">العنوان</div>
						<div>{{ setting('address') }}</div>
						{{-- <div>
							القصيم - بريدة
						</div> --}}
					</div>
				</div>
				<div class="footer-social">
					<a href="{{ setting('facebook') }}">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a href="{{ setting('twitter') }}">
						<i class="fab fa-twitter"></i>
					</a>
				    <a href="{{ setting('google') }}">
						<i class="fab fa-google"></i>
					</a>
					<a href="{{ setting('snapchat') }}">
						<i class="fab fa-snapchat-ghost"></i>
					</a>
					<a href="{{ setting('instagram') }}">
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
        <script type="text/javascript" src="{{ url('site') }}/js/main.js"></script>
	</body>
</html>