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
			<div class="othersTitle">الكاراتيه</div>
			<p class="othersParagraph">
                يمتاز نادي الرائد بامتلاكه لفريق ملاكمة على أعلى مستوى من خيرة شباب المملكة الأقوياء القادرون على تحقيق أعلى البطولات العالمية حيث فازوا بببطولات عديدة على مستوى المملكة وخارجها وإليكم بعض الصور أثناء تكريم شبابنا الأفاضل
			</p>
			<section id="photostack" class="photostack photostack-start">
				<div>
					<figure>
						<a href="{{ url('site') }}/img/karateh/1.jpeg" class="photostack-img" data-fancybox="karateh" data-caption="التتويج ببطوالة الكاراتيه الدولية">
							<img src="{{ url('site') }}/img/karateh/1.jpeg" alt="التتويج ببطوالة الكاراتيه الدولية"/>
						</a>
						<figcaption>
							<h2 class="photostack-title">التتويج ببطوالة الكاراتيه الدولية</h2>
							<div class="photostack-back">
								<p>
									صورة التكريم أثناء الإحتفال بالفوز بالبطولة
								</p>
							</div>
						</figcaption>
					</figure>
					<figure>
						<a href="{{ url('site') }}/img/karateh/2.jpeg" class="photostack-img" data-fancybox="karateh" data-caption="البطل كريم المرسي">
							<img src="{{ url('site') }}/img/karateh/2.jpeg" alt="البطل كريم المرسي"/></a>
						<figcaption>
							<h2 class="photostack-title">البطل كريم المرسي</h2>
						</figcaption>
					</figure>
					<figure data-shuffle-iteration="2">
						<a href="{{ url('site') }}/img/karateh/3.jpeg" class="photostack-img" data-fancybox="karateh" data-caption="بطولة تونس المفتوحة">
							<img src="{{ url('site') }}/img/karateh/3.jpeg" alt="بطولة تونس المفتوحة"/></a>
						<figcaption>
							<h2 class="photostack-title">بطولة تونس المفتوحة</h2>
							<div class="photostack-back">
								<p>
                                    على اليمين يقف لاعبنا محمد المرسي اثناء فوزه بالمركز الثاني
                                </p>
							</div>
						</figcaption>
					</figure>

					<figure data-shuffle-iteration="2">
						<a href="{{ url('site') }}/img/karateh/4.jpeg" class="photostack-img" data-fancybox="karateh" data-caption="رجال الكاراتيه">
							<img src="{{ url('site') }}/img/karateh/4.jpeg" alt="رجال الكاراتيه "/></a>
						<figcaption>
							<h2 class="photostack-title">رجال الكاراتيه</h2>
							<div class="photostack-back">
								<p>
                                    صورة التكريم
								</p>
							</div>
						</figcaption>
					</figure>
					<figure data-shuffle-iteration="2">
						<a href="{{ url('site') }}/img/karateh/5.jpeg" class="photostack-img" data-fancybox="karateh" data-caption="فريق الكاراتيه فى المقصورة الرياضية">
							<img src="{{ url('site') }}/img/karateh/5.jpeg" alt="فريق الكاراتيه فى المقصورة الرياضية"/>
						</a>
						<figcaption>
							<h2 class="photostack-title">فريق الكاراتيه </h2>
							<div class="photostack-back">
								<p>
                                    فريق الكاراتيه فى المقصورة الرياضية
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
					//console.log(item)
				}
			} );
		</script>
	</body>
</html>
