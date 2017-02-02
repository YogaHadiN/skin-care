@extends('layout.master')
@section('title') 
Klinik Jati Elok | Home
@stop
@section('page-title') 
<h2>Home</h2>
<ol class="breadcrumb">
	  <li>
		  <a href="{{ url('laporans')}}">Home</a>
	  </li>
	  <li class="active">
		  <strong>Home</strong>
	  </li>
</ol>
@stop
@section('article') 
<div class="navigation">
	<div class="carousel-main">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target=l-example-generic" data-slide-to="1"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="{{ url('img/slider-item-1-1.png') }}" alt="..." class="main-img efect transparent">
					<div class="carousel-caption">
						<div class="leftColumn">
							<div class="wellcome_to transparent efect">
								Welcome To
							</div>
							<div class="skin_beauty transparent efect">
								<span class="skin">Skin</span>
								<span class="beauty">Beauty</span> <br /> <br /><br />
								<div class="promo_button transparent efect">
									<a class="jumbo-button" href="http://www.google.com">Lihat Promo Terakhir</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="{{ url('img/slider-item-2-1.jpg') }}" alt="..." class="full-width">
					<div class="carousel-caption">
						<div class="caption-2">
							<div class="wellcome_to transparent efect">
								Welcome To
							</div>
							<div class="skin_beauty transparent efect">
								<span class="skin">Skin</span>
								<span class="beauty">Beauty</span> <br /> <br /><br />
								<div class="promo_button transparent efect">
									<a class="jumbo-button" href="http://www.google.com">Lihat Promo Terakhir</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="{{ url('img/slider-item-3-1.jpg') }}" alt="..." class="full-width">
					<div class="carousel-caption">
						<div class="caption-3">
							<div class="wellcome_to transparent efect">
								Welcome To
							</div>
							<div class="skin_beauty transparent efect">
								<span class="skin">Skin</span>
								<span class="beauty">Beauty</span> <br /> <br /><br />
								<div class="promo_button transparent efect">
									<a class="jumbo-button" href="http://www.google.com">Lihat Promo Terakhir</a>
								</div>
							</div>
						</div>
					</div>
				</div>
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
			<div class="col-xs12  col-sm-4 col-md-4 col-lg-4 pink-ribbon-item colPinkRibbon">
				<i class="fa fa-flask fa-5 pink-icon" aria-hidden="true"></i>
				<h2 class="pink-caption">Latest Technology</h2>
				<br />
				<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
				<br />
				<a class="learn-more" href=""><h5>LEARN MORE</h5></a>
			</div>
			<div class="col-xs12  col-sm-4 col-md-4 col-lg-4 pink-ribbon-center colPinkRibbon">
				<i class="fa fa-certificate pink-icon" aria-hidden="true"></i>
				<h2 class="pink-caption">Certified Institute</h2>
				<br />
				<p class="colorWhite">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
				<br />
				<a class="learn-more" href=""><h5>LEARN MORE</h5></a>
			</div>
			<div class="col-xs12  col-sm-4 col-md-4 col-lg-4 pink-ribbon-item colPinkRibbon">
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
@stop
@section('footer') 
<script type="text/javascript" charset="utf-8">
	fadeIn();
    $("#carousel-example-generic").on('slid.bs.carousel', function () {
		$('.item:not(.active) .efect').each(function(){
			if( $(this).hasClass('animated') ){
				$(this).removeClass('animated');
			}
			if( $(this).hasClass('fadeIn') ){
				$(this).removeClass('fadeIn');
			}
			if( $(this).hasClass('fadeInUp') ){
				$(this).removeClass('fadeInUp');
			}
			if( !$(this).hasClass('transparent') ){
				$(this).addClass('transparent');
			}
		});
		fadeIn();
    });

	function fadeIn(){
		setTimeout(function(){
			$('.item.active .main-img').removeClass("transparent").addClass('animated fadeIn');
		}, 500);
		setTimeout(function(){
			$('.item.active .wellcome_to').removeClass('transparent').addClass('animated fadeIn');
		}, 1000);
		setTimeout(function(){
			$('.item.active .skin_beauty').removeClass("transparent").addClass('animated fadeIn');
		}, 1500);
		setTimeout(function(){
			$('.item.active .promo_button').removeClass('transparent').addClass('animated fadeInUp');
		}, 2000);
	}
	  $('.treatment-slider').slick({
		  arrows: false,
		  infinite: true,
		  slidesToShow: 4,
		  slidesToScroll: 1,
		  autoplay: true,
		  autoplaySpeed: 2000,
	  });
	  $('.product-display').slick({
		  arrows: false,
		  infinite: true,
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  autoplay: true,
		  autoplaySpeed: 2000,
	  });
	  $('.testimonial-slider').slick({
		  arrows: false,
		  infinite: true,
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  autoplay: true,
		  autoplaySpeed: 2000,
	  });
	  $('.expert-slider').slick({
		  arrows: true,
		  infinite: true,
		  slidesToShow: 4,
		  slidesToScroll: 1,
		  autoplay: true,
		  autoplaySpeed: 2000,
	  });
</script>
	
@stop

