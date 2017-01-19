<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<title>@yield('title')</title>
		 <link href="https://fonts.googleapis.com/css?family=Alegreya|Monda|Taviraj" rel="stylesheet"> 
		 <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" rel="stylesheet"> 
		<link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
		<link href="{!! asset('css/animate.css/animate.min.css') !!}" rel="stylesheet">
		<link href="{!! asset('css/style.css') !!}" rel="stylesheet">
		<link href="{!! asset('css/jquery-ui.min.css') !!}" rel="stylesheet">
		<link href="{!! asset('css/Font-Awesome/css/font-awesome.min.css') !!}" rel="stylesheet">
		<link href="{!! asset('css/slick.css') !!}" rel="stylesheet">
		<link href="{!! asset('css/slick-theme.css') !!}" rel="stylesheet">
		@yield('head')
	</head>
	<body>
		<div class="top">
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
								</li>
								<li>
									<a href="home">Promo</a>
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
		<div class="navigation">
			<div class="carousel-main">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						{{--<li data-target="#carousel-example-generic" data-slide-to="1"></li>--}}
					</ol>
					<!-- Wrapper for slides -->

					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="leftColumn">
								<div class="animated wellcome_to transparent">
									Welcome To
								</div>
								<div class="skin_beauty animated transparent">
									<span class="skin">Skin</span>
									<span class="beauty">Beauty</span> <br /> <br /><br />
									<div class="animated promo_button transparent">
										<a class="jumbo-button" href="http://www.google.com">Lihat Promo Terakhir</a>
									</div>
								</div>
							</div>
							<img src="{{ url('img/slider-item-1-1.png') }}" alt="..." class="animated main-img transparent">
							<div class="carousel-caption">
								...
							</div>
						</div>
						...
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
		<div class="pink-ribbon">
		</div>
		<img src="{{ url('img/spa.jpg') }}" alt="..." class="pink-img">
			<div class="pink-ribbon-text positionAbsolute">
				<div class="container">
					<div class="row rowPinkRibbon colorWhite">
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 pink-ribbon-item colPinkRibbon">
							<i class="fa fa-flask fa-5 pink-icon" aria-hidden="true"></i>
							<h2 class="pink-caption">Latest Technology</h2>
							<br />
							<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
							<br />
							<a class="learn-more" href=""><h5>LEARN MORE</h5></a>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 pink-ribbon-center colPinkRibbon">
							<i class="fa fa-certificate pink-icon" aria-hidden="true"></i>
							<h2 class="pink-caption">Certified Institute</h2>
							<br />
							<p class="colorWhite">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
							<br />
							<a class="learn-more" href=""><h5>LEARN MORE</h5></a>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 pink-ribbon-item colPinkRibbon">
							<i class="fa fa-stethoscope pink-icon" aria-hidden="true"></i>
							<h2 class="pink-caption">Best Doctor</h2>
							<br />
							<p class="colorWhite">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
							<br />
							<a class="learn-more" href=""><h5>LEARN MORE</h5></a>
						</div>
					</div>
				</div>
			</div>
		<div class="article">
			<div class="text-center palatino container paddArticle">
				TREATMENT PLANS
			</div>
			<div class="seeAllTreatment palatino text-center">
				<a class="" href="{{ url('') }}">View All Treatment</a>
			</div>
			<div class="container-fluid">
				<div class="treatment-slider">
					<div> 
						<div class="border-gallery">
							<p class="slider-icon"><i class="fa fa-link"></i></p> <br />
							<p>FACIAL THERAPY</p>
							<img src="{{ url('img/slider/photodune-1177463-spa-woman-hot-stones-massage-m-400x300.jpg') }}" alt="" /> 
						</div>
					</div>
					<div> 
						<div class="border-gallery">
							<p class="slider-icon"><i class="fa fa-link"></i></p><br />
							<p>FULL BODY MASSAGE</p>
							<img src="{{ url('img/slider/photodune-5179310-male-plastic-surgeon-with-patient-m-400x300.jpg') }}" alt="" /> 
						</div>
					</div>
					<div> 
						<div class="border-gallery">
							<p class="slider-icon"><i class="fa fa-link"></i></p><br />
							<p>BOTOX INJECTION</p>
							<img src="{{ url('img/slider/photodune-1792845-spa-womanday-spa-s-400x300.jpg') }}" alt="" /> 
						</div>
					</div>
					<div> 
						<div class="border-gallery">
							<p class="slider-icon"><i class="fa fa-link"></i></p><br />
							<p>SLIM BODY SESSION</p>
							<img src="{{ url('img/slider/photodune-3019155-chocolate-mask-facial-spa-beauty-spa-salon-m-400x300.jpg') }}" alt="" /> 
						</div>
					</div>
					<div> 
						<div class="border-gallery">
							<p class="slider-icon"><i class="fa fa-link"></i></p><br />
							<p>FACIAL THERAPY</p>
							<img src="{{ url('img/slider/photodune-7751505-luxury-home-with-swimming-pool-m1-400x300.jpg') }}" alt="" /> 
						</div>
					</div>
					<div> 
						<div class="border-gallery">
							<p class="slider-icon"><i class="fa fa-link"></i></p> <br />
							<p>FACIAL THERAPY</p>
							<img src="{{ url('img/slider/photodune-8600513-peaceful-brunette-getting-facial-from-beauty-therapist-in-the-health-spa-m-400x300.jpg') }}" alt="" /> 
						</div>
					</div>
					<div> 
						<div class="border-gallery">
							<p class="slider-icon"><i class="fa fa-link"></i></p> <br />
							<p>FACIAL THERAPY</p>
							<img src="{{ url('img/slider/photodune-1538118-high-cordilleras-mountain-m1-400x300.jpg') }}" alt="" /> 
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="gallery">
			<div class="text-gallery text-center">
				<h3 class="palatino colorWhite">Produk Kami</h3>
			</div>
			<img src="{{ url('img/product/product-bg.jpg') }}" alt="" class="product-bg" />
			<div class="container">
				<div class="product-display palatino text-medium">
					<div>
						<div class="border-item">
							<img src="{{ url('img/product/product-7.jpg') }}" alt="" /> 
							<div class="row positionAbsolute">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<p class="gallery-link link-fa-left"><i class="fa fa-shopping-cart"></i></p>
									<p class="gallery-link left">add to cart</p>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<p class="gallery-link link-fa-right"><i class="fa fa-link"></i></p>
									<p class="gallery-link right">read more</p>
								</div>
							</div>
						</div>
						<div class="gallery-item-caption text-center">
							<div class="row">
								<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 text-pink">
									Skin Moisturizer Crean
								</div>
								<div class="col-xs-4 cols4ize col44 col-lg-4 text-semiblue">
									$49.0
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="border-item">
							<img src="{{ url('img/product/product-8.jpg') }}" alt="" /> 
							<div class="row positionAbsolute">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<p class="gallery-link link-fa-left"><i class="fa fa-shopping-cart"></i></p>
									<p class="gallery-link left">add to cart</p>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<p class="gallery-link link-fa-right"><i class="fa fa-link"></i></p>
									<p class="gallery-link right">read more</p>
								</div>
							</div>
						</div>
						<div class="gallery-item-caption text-center">
							<div class="row">
								<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 text-pink">
									Skin Moisturizer Crean
								</div>
								<div class="col-xs-4 cols4ize col44 col-lg-4 text-semiblue">
									$49.0
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="border-item">
							<img src="{{ url('img/product/product-2.jpg') }}" alt="" /> 
							<div class="row positionAbsolute">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<p class="gallery-link link-fa-left"><i class="fa fa-shopping-cart"></i></p>
									<p class="gallery-link left">add to cart</p>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<p class="gallery-link link-fa-right"><i class="fa fa-link"></i></p>
									<p class="gallery-link right">read more</p>
								</div>
							</div>
						</div>
						<div class="gallery-item-caption text-center">
							<div class="row">
								<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 text-pink">
									Skin Moisturizer Crean
								</div>
								<div class="col-xs-4 cols4ize col44 col-lg-4 text-semiblue">
									$49.0
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="border-item">
							<img src="{{ url('img/product/product-3.jpg') }}" alt="" /> 
							<div class="row positionAbsolute">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<p class="gallery-link link-fa-left"><i class="fa fa-shopping-cart"></i></p>
									<p class="gallery-link left">add to cart</p>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<p class="gallery-link link-fa-right"><i class="fa fa-link"></i></p>
									<p class="gallery-link right">read more</p>
								</div>
							</div>
						</div>
						<div class="gallery-item-caption text-center">
							<div class="row">
								<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 text-pink">
									Skin Moisturizer Crean
								</div>
								<div class="col-xs-4 cols4ize col44 col-lg-4 text-semiblue">
									$49.0
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="border-item">
							<img src="{{ url('img/product/product-4.jpg') }}" alt="" /> 
							<div class="row positionAbsolute">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<p class="gallery-link link-fa-left"><i class="fa fa-shopping-cart"></i></p>
									<p class="gallery-link left">add to cart</p>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<p class="gallery-link link-fa-right"><i class="fa fa-link"></i></p>
									<p class="gallery-link right">read more</p>
								</div>
							</div>
						</div>
						<div class="gallery-item-caption text-center">
							<div class="row">
								<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 text-pink">
									Skin Moisturizer Crean
								</div>
								<div class="col-xs-4 cols4ize col44 col-lg-4 text-semiblue">
									$49.0
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="recent-article palatino text-grey">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 recent-article-col-div">
						<h3 class="article-title">
						RECENT ARTICLE
						</h3>
						@include('layout.article', [
							'img' => 'photodune-1792845-spa-womanday-spa-s-400x300.jpg',
						])
						@include('layout.article', [
							'img' => 'Fotolia_31103810_resized-400x300.png',
						])
						@include('layout.article', [
							'img' => 'photodune.jpg',
						])
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<h3 class="article-title">
						VIDEO TOUR
						</h3>
						<div class="row pad-custom">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<img src="{{ url('img/recent-articles/Fotolia_31103810_resized-400x300.png') }}" alt="" class="img-video" /> 
							</div>
						</div>
						<div class="row pad-custom">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h3>
									Tristique Egestas Mollis
								</h3>
							</div>
						</div>
						<div class="row pad-custom">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<p>
									Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Fusce dapibus. consectetur adipisici elit, sed eiusmod tempo
								</p>
							</div>
						</div>
						<div class="row pad-image">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<img src="{{ url('img/video/banner-1.png') }}" alt="" class="img-discount div-video-fade-in animated transparent fadeInEffect" /> 
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h3 class="testimonial-heading">
									TESTIMONIAL
								</h3>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="testimonial-slider fadeInUpEffect">
									@include('layout.testimonial', [
										'img' => 'testimonial-1.jpg',
										'name' => 'Ricardo Goff'

									])
									@include('layout.testimonial', [
										'img' => 'testimonial-2.jpg',
										'name' => 'John Doe'
									])
									@include('layout.testimonial', [
										'img' => 'testimonial-3.jpg',
										'name' => 'Jennifer Dawn'

									])
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="special_offers">
			<div class="container">
				<h2 class="text-center palatino container paddArticle">SPECIAL OFFERS</h2>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="product-display">
							@include('layout.special_offers', [
								'img' => 'coupon-1.jpg'
							])
							@include('layout.special_offers', [
								'img' => 'coupon-2.jpg'
							])
							@include('layout.special_offers', [
								'img' => 'coupon-3.jpg'
							])
							@include('layout.special_offers', [
								'img' => 'coupon-4.jpg'
							])
						</div>
					</div>
				</div>
			</div>	
		</div>
		<div class="cellebrity-quot">
			<div class="container-quot">
				<p class="quot-text">
					“Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis.”	
				<p class="quot-name">
					- ANGELINA JONES - 
				</p>
				<p class="quot-name-caption">
					The Most Succesful model
				</p>
			</div>
		</div>
		<div class="experts text-grey">
			<div class="container">
				<h2 class="text-center palatino container paddArticle">MEET OUR EXPERTS</h2>
				<div class="expert-slider">
					@include('layout.expert', [
						'img'       => 'personnel-6-300x300.jpg',
						'expertise' => 'Dermatologist',
						'name'      => 'Pamela Shyne',
					])
					@include('layout.expert', [
						'img'       => 'personnel-5-300x300.jpg',
						'expertise' => 'CEO',
						'name'      => 'Angelina Jones',
					])
					@include('layout.expert', [
						'img'       => 'personnel-4-300x300.jpg',
						'expertise' => 'Surgeon Expert',
						'name'      => 'Dr. Yoga Hadi',
					])
					@include('layout.expert', [
						'img'       => 'personnel-3-300x300.jpg',
						'expertise' => 'Skin Expert',
						'name'      => 'John Doe',
					])
				</div>
				
			</div>
		</div>
		<div class="gallery-div fadeInEffect">
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<h3 class="text-center gallery-div-gallery">GALLERY</h3>
						<div class="row">
							<div class="col-xs-15 col-sm-15 col-md-15 col-lg-15">
								<img src="{{ url('img/gallery_div/photodune-1177463-spa-woman-hot-stones-massage-m-750x480.jpg') }}" class="img-rounded">
							</div>
							<div class="col-xs-15 col-sm-15 col-md-15 col-lg-15">
								<img src="{{ url('img/gallery_div/photodune-5179310-male-plastic-surgeon-with-patient-m-750x480.jpg') }}" class="img-rounded"> 
							</div>
							<div class="col-xs-15 col-sm-15 col-md-15 col-lg-15">
								<img src="{{ url('img/gallery_div/photodune-8600513-peaceful-brunette-getting-facial-from-beauty-therapist-in-the-health-spa-m-750x480.jpg') }}" class="img-rounded">
							</div>
							<div class="col-xs-15 col-sm-15 col-md-15 col-lg-15">
								<img src="{{ url('img/gallery_div/photodune-5179310-male-plastic-surgeon-with-patient-m-750x480.jpg') }}" class="img-rounded">
							</div>
							<div class="col-xs-15 col-sm-15 col-md-15 col-lg-15">
								<img src="{{ url('img/gallery_div/photodune-3019155-chocolate-mask-facial-spa-beauty-spa-salon-m-750x480.jpg') }}" class="img-rounded">
							</div>
						</div>
						<div class="row">
							<div class="col-xs-15 col-sm-15 col-md-15 col-lg-15">
								<img src="{{ url('img/gallery_div/photodune-1177463-spa-woman-hot-stones-massage-m-750x480.jpg') }}" class="img-rounded">
							</div>
							<div class="col-xs-15 col-sm-15 col-md-15 col-lg-15">
								<img src="{{ url('img/gallery_div/photodune-1177463-spa-woman-hot-stones-massage-m-750x480.jpg') }}" class="img-rounded">
							</div>
							<div class="col-xs-15 col-sm-15 col-md-15 col-lg-15">
								<img src="{{ url('img/gallery_div/photodune-1177463-spa-woman-hot-stones-massage-m-750x480.jpg') }}" class="img-rounded">
							</div>
							<div class="col-xs-15 col-sm-15 col-md-15 col-lg-15">
								<img src="{{ url('img/gallery_div/photodune-1177463-spa-woman-hot-stones-massage-m-750x480.jpg') }}" class="img-rounded">
							</div>
							<div class="col-xs-15 col-sm-15 col-md-15 col-lg-15">
								<img src="{{ url('img/gallery_div/photodune-1177463-spa-woman-hot-stones-massage-m-750x480.jpg') }}" class="img-rounded">
							</div>
						</div>
					</div>
						<h3 class="text-center gallery-div-gallery">TWITTER</h3>
				</div>
			</div>
		</div>
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
			{!! HTML::script('js/jquery-2.1.1.js')!!}
			{!! HTML::script('js/bootstrap.min.js')!!}
			{!! HTML::script('js/sticky/jquery.sticky.js')!!}
			{!! HTML::script('js/plugins/metisMenu/jquery.metisMenu.js')!!}
			{!! HTML::script('js/plugins/slimscroll/jquery.slimscroll.min.js')!!}
			{!! HTML::script('js/plugins/jeditable/jquery.jeditable.js')!!}
			{!! HTML::script('js/inspinia.js')!!}
			{!! HTML::script('js/slick/slick/slick.min.js')!!}
			{!! HTML::script('js/plugins/pace/pace.min.js')!!}
			<script type="text/javascript" charset="utf-8">
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
					$('.fadeInUpEffect').each( function(i){
						
						var bottom_of_object = parseInt( $(this).offset().top ) + 100;
						var bottom_of_window = $(window).scrollTop() + $(window).height();
						
						if( bottom_of_window > bottom_of_object ){
							$(this).removeClass('transparent').addClass('fadeIn');								
							$(this).animate({
								bottom: '20px'
							}, 1500);
						}
						
					}); 

					$('.fadeInEffect').each( function(i){
						var bottom_of_object = parseInt( $(this).offset().top ) + 100;
						var bottom_of_window = $(window).scrollTop() + $(window).height();
						
						if( bottom_of_window > bottom_of_object ){
							$(this).removeClass('transparent').addClass('fadeIn');								
						}
						
					}); 

				});	
				fadeIn();
				$('#carousel-example-generic').on('slide.bs.carousel', function(){
					$('.main-img').addClass('transparent');
				});

				$('#carousel-example-generic').on('slid.bs.carousel', function(){
					{{--fadeIn();--}}
				});

				function fadeIn(){
					setTimeout(function(){
						$('.main-img').removeClass("transparent").addClass('fadeIn');
					}, 500);
					setTimeout(function(){
						$('.wellcome_to').removeClass('transparent').addClass('fadeIn');
					}, 1000);
					setTimeout(function(){
						$('.skin_beauty').removeClass("transparent").addClass('fadeIn');
					}, 1500);
					setTimeout(function(){
						$('.promo_button').removeClass('transparent').addClass('fadeInUp');
					}, 2000);
				}
				  $('.treatment-slider').slick({
					  arrows: true,
					  infinite: true,
					  slidesToShow: 4,
					  slidesToScroll: 1,
					  autoplay: false,
					  autoplaySpeed: 2000,
				  });
				  $('.product-display').slick({
					  arrows: true,
					  infinite: true,
					  slidesToShow: 3,
					  slidesToScroll: 1,
					  autoplay: false,
					  autoplaySpeed: 2000,
				  });
				  $('.testimonial-slider').slick({
					  arrows: false,
					  infinite: true,
					  slidesToShow: 1,
					  slidesToScroll: 1,
					  autoplay: false,
					  autoplaySpeed: 2000,
				  });
				  $('.expert-slider').slick({
					  arrows: true,
					  infinite: true,
					  slidesToShow: 4,
					  slidesToScroll: 1,
					  autoplay: false,
					  autoplaySpeed: 2000,
				  });
				


				//script untuk fadeIn on scroll
				    /* Every time the window is scrolled ... */
			</script>
	</body>
</html>
