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
@section('carousel') 
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
			{{--<div class="item">--}}
				{{--<img src="{{ url('img/slider-item-2-1.jpg') }}" alt="...">--}}
				{{--<div class="carousel-caption">--}}
					{{--...--}}
				{{--</div>--}}
			{{--</div>--}}
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
@stop
@section('pink-ribbon') 
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
@stop
@section('content') 
	this is article
@stop
@section('footer') 
<script type="text/javascript" charset="utf-8">
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
	
</script>
	
@stop

