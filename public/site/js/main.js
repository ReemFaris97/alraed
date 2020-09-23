$(document).ready(function () {
	
	
//	if($("#newsTicker2").length){
//		alert('exist')
//		if($("#en-lan").length){
//			alert('en')
//			$('#newsTicker2').breakingNews({
//			  direction: "ltr",
//			  play: true,
//			  delayTimer: 4000,
//			  scrollSpeed: 2,
//			  stopOnHover: true
//			});
//		}else{
//			alert('ar')
//			$('#newsTicker2').breakingNews({
//			  direction: "rtl",
//			  play: true,
//			  delayTimer: 4000,
//			  scrollSpeed: 2,
//			  stopOnHover: true
//			});
//		}
//	}
	
	//    Wow initialization
	wow = new WOW({
		boxClass: 'wow', // default
		animateClass: 'animated', // default
		offset: 0, // default
		mobile: true,
		live: true // default
	})
	wow.init();


	//	News Slider 
	if ($('#news-slider').length) {
		$('#news-slider').owlCarousel({
			animateOut: 'slideOutDown',
			animateIn: 'flipInX',
			items: 1,
			margin: 0,
			loop: true,
			stagePadding: 0,
			dots: true,
			rtl: true,
			nav: false,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 5000,
		});
	}
	//	News Slider 
	if ($('#multimedia-slider').length) {
		$('#multimedia-slider').owlCarousel({
			items: 1,
			loop: true,
			rtl: true,
			margin: 10,
			dots: false,
			nav: true
		});
	}
	if ($('#partners-slider').length) {
		$('#partners-slider').owlCarousel({
			loop: true,
			rtl: true,
			autoplay: true,
			margin: 10,
			responsiveClass: true,
			nav: false,
			dots: false,
			responsive: {
				0: {
					items: 1,
					margin: 0,
				},
				400: {
					items: 3,
					margin: 0,
				},
				1000: {
					items: 6
				}
			}
		})
	}

	//	Tooltip

	$('[data-toggle="tooltip"]').tooltip();
	// ـJump link
	document.querySelectorAll('a.jump').forEach(anchor => {
		anchor.addEventListener('click', function (e) {
			e.preventDefault();
			document.querySelector(this.getAttribute('href')).scrollIntoView({
				behavior: 'smooth'
			});
		});
	});

	//*************************************************
	//    For playing Youtube Videos in fancybox
	$("a.watch-vid-btn").click(function () {
		$.fancybox({
			'padding': 0,
			'autoScale': false,
			'transitionIn': 'none',
			'transitionOut': 'none',
			'title': this.title,
			'width': 680,
			'height': 495,
			'href': this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
			'type': 'swf',
			'swf': {
				'wmode': 'transparent',
				'allowfullscreen': 'true'
			}
		});

		return false;
	});


});