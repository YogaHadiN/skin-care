@extends('layout.master')

@section('title') 
Klinik Jati Elok | About
@stop
@section('page-title') 
<h2>Home</h2>
<ol class="breadcrumb">
	  <li>
		  <a href="{{ url('laporans')}}">Home</a>
	  </li>
	  <li class="active">
		  <strong>About</strong>
	  </li>
</ol>

@stop
@section('head') 
@stop
@section('article') 
<div class="about-us-head">
	<img src="{{ url('img/skin-care-about/page-title-background.jpg') }}" class="img-rounded" alt="Responsive image">
	<div class="about-us-head-title">
		<div class="container palatino text-black">
			<p class="about-main-title">About Us</p>
			<p class="about-main-subtitle" >Example of about us page</p>
		</div>
	</div>
</div>
<div class="about-article palatino text-black">
	<div class="container">
		<div class="row fadeInUpEffect">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<h4>CONDIMENTUM PARTURIENT MAGNA <i class="fa fa-heart-o"></i></h4>
				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<h4>CONDIMENTUM PARTURIENT MAGNA <i class="fa fa-rotate-right"></i></h4>
				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
			</div>
		</div>
		<div class="row fadeInUpEffect">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<h4>CONDIMENTUM PARTURIENT MAGNA <i class="fa fa-star-o"></i></h4>
				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<h4>CONDIMENTUM PARTURIENT MAGNA <i class="fa fa-circle-o-notch"></i></h4>
				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
			</div>
		</div>
	</div>
</div>
<div class="about-testimonial palatino">
	<div class="about-text-testimonial">
		<h2>TESTIMONIALS</h2>	
		<div class="about-tertimonial-slider">
			<div>
				<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Nulla vitae elit libero, a pharetra augue. Sed posuere consectetur est at lobortis. Sed posuere consectetur est at lobortis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
				<p class="about-testimonial-name">
				
					John Doe
				
				</p>
			</div>
			<div>
				<p>
					Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec id elit non mi porta gravida at eget metus.
				</p>
				<p class="about-testimonial-name">
				
					John Doe
				
				</p>
			</div>
		</div>
	</div>
	
</div>
<div class="about-icons text-center palatino text-black">
	<div class="container">
		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="imag-circle">
					<i class="fa fa-book"></i>
				</div>
				<h3 class="about-icon-title">Tortor Tellus Cras</h3>
				<p>Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condi mentum nibh. Porta Aenean Adipiscing</p>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="imag-circle">
					<i class="fa fa-automobile"></i>
				</div>
				<h3 class="about-icon-title">Tortor Tellus Cras</h3>
				<p>Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condi mentum nibh. Porta Aenean Adipiscing</p>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="imag-circle">
					<i class="fa fa-bank"></i>
				</div>
				<h3 class="about-icon-title">Tortor Tellus Cras</h3>
				<p>Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condi mentum nibh. Porta Aenean Adipiscing</p>
			</div>
		</div>
	</div>
</div>
<div class="about-story palatino text-black">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<h2>STORY ABOUT US</h2>
				<p>Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis euismod. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras justo odio, dapibus ac facilisis in. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				@include('about.skill-bar', ['skill_name' => 'Banking & Financial', 'bar_name' => 'banking'])
				@include('about.skill-bar', ['skill_name' => 'Corporate Issue', 'bar_name' => 'corporate'])
				@include('about.skill-bar', ['skill_name' => 'Family Law', 'bar_name' => 'family'])
				@include('about.skill-bar', ['skill_name' => 'Real Estate', 'bar_name' => 'real_estate'])
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a class="read_more" href="#">LEARN MORE</a>
			</div>
		</div>
	</div>
</div>
<div class="about-pink palatino">
	<div class="container">
		
		<h1>Commodo Tellus Sit Sem</h1>
		<p class="regular-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. Donec sed odio dui. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Curabitur blandit tempus porttitor. Vestibulum id ligula porta felis euismod semper. </p>
	</div>
</div>
@stop
@section('footer') 
	<script type="text/javascript" charset="utf-8">
		  $('.about-tertimonial-slider').slick({
			  arrows: false,
			  infinite: true,
			  slidesToShow: 1,
			  slidesToScroll: 1,
			  autoplay: true,
			  autoplaySpeed: 2000,
		  });
	</script>
	
@stop

