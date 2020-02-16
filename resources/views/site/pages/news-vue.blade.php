@extends('site.layouts.app')

@section('styles')
		<link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/news.css" />
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
		<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
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
				</div>																																						
			<button id="menu-toggle" class="menu-toggle"><span>Menu</span></button>
			<div id="theGrid" class="main">
				<section class="grid">
					{{-- @foreach($news as $s_news) --}}
					<a class="grid__item" v-for="s_news in news">
						<h2 class="title title--preview">@{{ s_news.title }}</h2>
						<div class="loader"></div>
						<span class="category">@{{ s_news.category_name }}</span>
						<div class="meta meta--preview">
							<img class="meta__avatar" :src="s_news.image" :alt="s_news.title" /> 
							<span class="meta__date"><i class="fa fa-calendar-o"></i> @{{ s_news.created_clock }}</span>
							<span class="meta__reading-time"><i class="fa fa-clock-o"></i> @{{ s_news.created_time }}</span>
						</div>
					</a>
					{{-- @endforeach --}}
					
					<footer class="page-meta" v-show="show">
						<span class="transparented"><a href="#" v-on:click="getNews(++pageNumber)" class="first-site-btn">@lang('trans.see_more')</a></span>
					</footer>
				</section>
				<section class="content">
					<div class="scroll-wrap">
						{{-- @foreach($news as $news_s) --}}
						<article class="content__item" v-for="s_news in news">
							<span class="category category--full">@{{ s_news.category_name }}</span>
							<h2 class="title title--full">@{{ s_news.title }}</h2>
							<div class="meta meta--full">
								<img class="meta__avatar" :src="s_news.image" alt="author01" />
								<span class="meta__author">@{{ s_news.writer_name }}</span>
								<span class="meta__date"><i class="fa fa-calendar-o"></i> @{{s_news.created_clock }}</span>
								<span class="meta__reading-time"><i class="fa fa-clock-o"></i> @{{ s_news.created_time }}</span>
							</div>
							<p>
								@{{ s_news.description }}
							</p>
						</article>
						{{-- @endforeach --}}
						
						
						
					</div>
					<button class="close-button" id="close-it"><i class="fa fa-times"></i><span>Close</span></button>
				</section>
			</div>
		</div><!-- /container -->
<!--     *************************  End      of ٍSection ********************-->

@endsection

@section('scripts')

		<script>
			new Vue({
				el: "#app",
				data: {
					news : {},
					show : false,
					pageNumber: 1,
					noData: {!! $newsCount !!}
				},
				mounted() {
					this.getNews(this.pageNumber);
				},
				methods: {
					getNews(page) {
							// console.log(typeof this.news.data);
							var el=this;
						axios.get('/more-news?page='+page)
						  .then(function (response)	 {
						   if (el.news.length >= 10) {
						   		response.data.data.map(function(d){
						   			el.news.push(d);
						   		})
						   		//console.log(el.news);
						   } else {
						  		el.news = response.data.data;
						   }
						   if (el.news.length < el.noData) {
					  			el.show = true;
					  		}	  	
						  })
						  .catch(function (error) {
						    // handle error
						    console.log(error);
						  });
					}
				}
			})
		</script>
		<script type="text/javascript" src="{{ url('site') }}/js/news/classie.js"></script>
		<script type="text/javascript" src="{{ url('site') }}/js/news/main-news.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.grid__item').click(function(){
					NewsFunction();
				});
			})
		</script>
@endsection