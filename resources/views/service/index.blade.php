@extends('layout.master')

@section('title') 
Klinik Jati Elok | Service
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
<style type="text/css" media="all">
</style>
@stop
@section('article') 
<div class="about-us-head">
	<img src="{{ url('img/skin-care-about/page-title-background.jpg') }}" class="img-rounded" alt="Responsive image">
	<div class="about-us-head-title">
		<div class="container palatino text-black">
			<p class="about-main-title">Portofolio Service</p>
			<p class="about-main-subtitle" >The best you can have</p>
		</div>
	</div>
</div>
<div class="service-portofolio palatino text-black">
	<div class="container">
		<div id="service" class="row row-service">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<ul class="bold">
					<a class="" href="{{ url('') }}"><li>ALL</li></a>
					<a class="" href="{{ url('') }}"><li>BEAUTY</li></a>
					<a class="" href="{{ url('') }}"><li>BODY THERAPY</li></a>
					<a class="" href="{{ url('') }}"><li>FACIAL THERAPY</li></a>
					<a class="" href="{{ url('') }}"><li>SALON</li></a>
				</ul>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				@include('service.item', [
					'img' => 'Fotolia_24881759_Subscription_Monthly_XXL-400x300.jpg',
					'title' => 'Facial Therapy'
				])
				@include('service.item', [
					'img' => 'Fotolia_43785736_Subscription_Monthly_XL-400x300.jpg',
					'title' => 'Slimming Programe'
				])
				@include('service.item', [
					'img' => 'photodune-7064054-woman-face-and-beautician-hands-with-syringes-m-400x300.jpg',
					'title' => 'Plastic Surgeon'
				])
				@include('service.item', [
					'img' => 'photodune-8600513-peaceful-brunette-getting-facial-from-beauty-therapist-in-the-health-spa-m-400x300.jpg',
					'title' => 'Spa and Massage'
				])
			</div>
		</div>
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

