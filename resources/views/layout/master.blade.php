<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<title>@yield('title')</title>
		 <link href="https://fonts.googleapis.com/css?family=Alegreya|Monda|Taviraj" rel="stylesheet"> 
		 <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet"> 
		 <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" rel="stylesheet"> 
		 <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet"> 
		 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
		<!-- Add the slick-theme.css if you want default styling -->
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>
		<link href="{!! asset('css/style.css') !!}" rel="stylesheet">
		@yield('head')
	</head>
	<body>
		<div class="top hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
						Mon - Fri 11.00 - 19.00

					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						Klinik Jati Elok Komp Bumi Jati Elok Blok A I No. 7
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						kje@gmail.com
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						 0215977529
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						icons
					</div>
				</div>
			</div>
		</div>
		<div class="head-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<div class="project-name">
							<span class="project-name1">Klinik</span>
							<span class="project-name2">JatiElok</span>
						</div>
					</div>
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 menu-top">
						<nav id="bs-navbar" class="collapse navbar-collapse">
							<ul class="nav navbar-nav">
								<li class="active">
									<a href="home">Home</a>
								</li>
								<li>
									<a href="home">Service</a>
									<ul>
										<a class="" href="#">
											<li>
												Facial
											</li>
										</a>
										<a class="" href="#">
											<li>
												Microdermabrasi
											</li>
										</a>
										<a class="" href="#">
											<li>
												IPL
											</li>
										</a>
										<a class="" href="#">
											<li>
												Laser
											</li>
										</a>
										<a class="" href="#">
											<li>
												Radiofrequency
											</li>
										</a>
									</ul>
								</li>
								<li>
									<a href="home">Promo</a>
									<ul>
										<a class="" href="#">
											<li>
												75 ribu facial Pelajar
											</li>
										</a>
										<a class="" href="#">
											<li>
												Paket Laser dan IPL
											</li>
										</a>
										<a class="" href="#">
											<li>
												IPL 4 kali gratis 1 kali
											</li>
										</a>
										<a class="" href="#">
											<li>
												Facial 5 kali gratis 1 x 
											</li>
										</a>
										<a class="" href="#">
											<li>
												Paket pelangsingan
											</li>
										</a>
									</ul>
								</li>
								<li>
									<a href="home">Gallery</a>
								</li>
								<li>
									<a href="home">Contact</a>
								</li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		@yield('article')
		<div class="footer bg-black">
			<div class="container">
				<div class="row">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<div class="row padding-footer palatino">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h3> <span class='skin-footer'>Skin</span> <span class="beauty-footer">Beauty</span> </h3>
							</div>
						</div>
						<div class="row footer-text">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maece nas sed diam eget risus varius blandit sit amet non magna.
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<h3 class="footer-title padding-footer palatino">Recent Articles</h3>
						<div class="footer-recent-article-text">
							<ul>
								<li>
									<div class="row">
										<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
											>
										</div>
										<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
											<a class="{{ url('') }}" href="#" class="link-no-style">
												Nullam Lorem Mattis Purus	
											</a>
										</div>
									</div>
								
								</li>
								<li>
									<div class="row">
										<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
											>
										</div>
										<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
											<a class="{{ url('') }}" href="#" class="link-no-style">
												Nullam Lorem Mattis Purus	
											</a>
										</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
											>
										</div>
										<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
											<a class="{{ url('') }}" href="#" class="link-no-style">
												Nibh Sem Sit Ullamcorper
											</a>
										</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
											>
										</div>
										<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
											<a class="{{ url('') }}" href="#" class="link-no-style">
												Donec luctus imperdiet
											</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<h3 class="footer-title padding-footer palatino">Treatment Plans</h3>
						<div class="footer-treatment-plans">
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<img src="{{ url('img/footer-treatment-plan/Fotolia_24881759_Subscription_Monthly_XXL-150x150.jpg') }}" class="img-rounded">
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<img src="{{ url('img/footer-treatment-plan/Fotolia_24881759_Subscription_Monthly_XXL-150x150.jpg') }}" class="img-rounded">
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<img src="{{ url('img/footer-treatment-plan/Fotolia_43785736_Subscription_Monthly_XL-150x150.jpg') }}" class="img-rounded">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<img src="{{ url('img/footer-treatment-plan/photodune-5179310-male-plastic-surgeon-with-patient-m-150x150.jpg') }}" class="img-rounded">
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<img src="{{ url('img/footer-treatment-plan/photodune-7064054-woman-face-and-beautician-hands-with-syringes-m-150x150.jpg') }}" class="img-rounded">
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<img src="{{ url('img/footer-treatment-plan/photodune-8600513-peaceful-brunette-getting-facial-from-beauty-therapist-in-the-health-spa-m-150x150.jpg') }}" class="img-rounded">
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 contact-info">
						<h3 class="footer-title padding-footer palatino">Contact Info</h3>
						<div class="row">
							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
								4th Floor. BB Plaza Bd. Anton St.
							</div>
						</div>
						<div class="row">
							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
								1800-222-222
							</div>
						</div>
						<div class="row">
							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
								 contact@beautycare.com
							</div>
						</div>
						<div class="row">
							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
								<i class="fa fa-clock-o" aria-hidden="true"></i>
							</div>
							<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
								Everyday 9:00-17:00
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-after">
			<div class="social-media">
				<i class="fa fa-facebook"></i>
				<i class="fa fa-twitter"></i>
				<i class="fa fa-instagram"></i>
				<i class="fa fa-pinterest"></i>
				<i class="fa fa-dribbble"></i>
			</div>	
			<div class="menu_under">
				<span class="item-menu-under">Home</span> | <span class="item-menu-under">About</span> | <span class="item-menu-under">News</span> | <span class="item-menu-under">Contact</span>
			</div>
			<div class="copyright">
				Copy Right 2015 All Right Reserved
			</div>
		</div>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.3/jquery.sticky.min.js" type="text/javascript" charset="utf-8"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js" type="text/javascript" charset="utf-8"></script>
			<script type="text/javascript" charset="utf-8">
				//efect menu 
				$('.fadeInUpEffect').addClass('animated');
				$('.fadeInUpEffect').addClass('transparent');
				fadeInTemplate();
				fadeInUpStart();
				$('.head-menu').sticky({
					 topSpacing:0
				});
				$(window).scroll(function() {
					  if ($(document).scrollTop() > 50) {
						$('.head-menu').addClass('shrink');
						$('.project-name1').addClass('shrink');
						$('.project-name2').addClass('shrink');
					  } else {
						$('.head-menu').removeClass('shrink');
						$('.project-name1').removeClass('shrink');
						$('.project-name2').removeClass('shrink');
					  }
					  fadeInUpTemplate();
					  fadeInTemplate();
				});	
				function fadeInUpTemplate(){
					$('.fadeInUpEffect').each( function(i){
						
						var bottom_of_object = parseInt( $(this).offset().top ) + 100;
						var bottom_of_window = $(window).scrollTop() + $(window).height();
						
						if( bottom_of_window > bottom_of_object ){
							$(this).removeClass('transparent').addClass('fadeIn');								
							$(this).animate({
								bottom: '0px'
							}, 1500);
						}
					}); 
				}
				function fadeInTemplate(){
					$('.fadeInEffect').each( function(i){
						var bottom_of_object = parseInt( $(this).offset().top ) + 100;
						var bottom_of_window = $(window).scrollTop() + $(window).height();
						if( bottom_of_window > bottom_of_object ){
							$(this).removeClass('transparent').addClass('fadeIn');								
						}
					}); 
				}
				function fadeInUpStart(){
				  $('.fadeInUpEffect').css('bottom', '-20px');
				  fadeInUpTemplate();
				}


			</script>
			@yield('footer')
	</body>
</html>
