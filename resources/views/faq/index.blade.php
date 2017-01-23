@extends('layout.master')

@section('title') 
Klinik Jati Elok | Frequently Asked Question
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
@include('service.head', [
	'title' => 'Frequently Asked Question',
	'subtitle' => 'Yout question answered here',
])
<div class="collapseable-divs rowMargin">
	<div class="container">
		<div class="row">
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				  <div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
					  <h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							Bibendum Porta Fermentum?
						</a>
					  </h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						<div class="panel-body">
							<p class="text-grey">Donec sed odio dui. Maecenas sed diam eget risus varius blandit sit amet non magna. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec id elit non mi porta gravida at eget metus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
							</p>
							<ul class="text-grey">
								<li>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</li>
								<li>Etiam porta sem malesuada magna mollis euismod.</li>
								<li>Aenean lacinia bibendum nulla sed consectetur.</li>
								<li>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</li>
							</ul>
							<p class="text-grey">Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Curabitur blandit tempus porttitor. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
							<p class="text-grey">Nullam quis risus eget urna mollis ornare vel eu leo. Nulla vitae elit libero, a pharetra augue. Sed posuere consectetur est at lobortis. Curabitur blandit tempus porttitor. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
							<a class="learn-more-orange" href="{{ url('') }}">LEARN MORE</a>
						</div>
					</div>
				  </div>
				  <div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingTwo">
					  <h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						Praesent commodo cursus magna, vel scelerisque nisl consectetur et?
						</a>
					  </h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					  <div class="panel-body">
							<p class="text-grey">Donec sed odio dui. Maecenas sed diam eget risus varius blandit sit amet non magna. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec id elit non mi porta gravida at eget metus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
							</p>
							<ul class="text-grey">
								<li>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</li>
								<li>Etiam porta sem malesuada magna mollis euismod.</li>
								<li>Aenean lacinia bibendum nulla sed consectetur.</li>
								<li>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</li>
							</ul>
							<p class="text-grey">Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Curabitur blandit tempus porttitor. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
							<p class="text-grey">Nullam quis risus eget urna mollis ornare vel eu leo. Nulla vitae elit libero, a pharetra augue. Sed posuere consectetur est at lobortis. Curabitur blandit tempus porttitor. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
							<a class="learn-more-orange" href="{{ url('') }}">LEARN MORE</a>
						</div>
					</div>
				  </div>
				  <div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingThree">
					  <h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							Sollicitudin Fermentum Risus Commodo Nibh?
						</a>
					  </h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					  <div class="panel-body">
							<p class="text-grey">Donec sed odio dui. Maecenas sed diam eget risus varius blandit sit amet non magna. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec id elit non mi porta gravida at eget metus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
							</p>
							<ul class="text-grey">
								<li>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</li>
								<li>Etiam porta sem malesuada magna mollis euismod.</li>
								<li>Aenean lacinia bibendum nulla sed consectetur.</li>
								<li>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</li>
							</ul>
							<p class="text-grey">Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Curabitur blandit tempus porttitor. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
							<p class="text-grey">Nullam quis risus eget urna mollis ornare vel eu leo. Nulla vitae elit libero, a pharetra augue. Sed posuere consectetur est at lobortis. Curabitur blandit tempus porttitor. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
							<a class="learn-more-orange" href="{{ url('') }}">LEARN MORE</a>
						</div>
					</div>
				  </div>
					<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingTwo">
					  <h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							Sem Purus Bibendum Pharetra?
						</a>
					  </h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					  <div class="panel-body">
							<p class="text-grey">Donec sed odio dui. Maecenas sed diam eget risus varius blandit sit amet non magna. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec id elit non mi porta gravida at eget metus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
							</p>
							<ul class="text-grey">
								<li>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</li>
								<li>Etiam porta sem malesuada magna mollis euismod.</li>
								<li>Aenean lacinia bibendum nulla sed consectetur.</li>
								<li>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</li>
							</ul>
							<p class="text-grey">Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Curabitur blandit tempus porttitor. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
							<p class="text-grey">Nullam quis risus eget urna mollis ornare vel eu leo. Nulla vitae elit libero, a pharetra augue. Sed posuere consectetur est at lobortis. Curabitur blandit tempus porttitor. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
							<a class="learn-more-orange" href="{{ url('') }}">LEARN MORE</a>
						</div>
					</div>
				  </div>
				</div>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 web-features">
				<h2 class="palatino text-center text-pink">FEATURES</h2>
				<ul class="normal-list">
					<a href="#" class="xxxxx"><li> <span class="carret-icon">></span> Custom Skin</li></a>
					<a href="#" class="xxxxx"><li> <span class="carret-icon">></span> Sidebar Size Customizable</li></a>
					<a href="#" class="xxxxx"><li> <span class="carret-icon">></span> Optimized Code & SEO</li></a>
					<a href="#" class="xxxxx"><li> <span class="carret-icon">></span> Master Slider</li></a>
					<a href="#" class="xxxxx"><li> <span class="carret-icon">></span> Post Format</li></a>
					<a href="#" class="xxxxx"><li> <span class="carret-icon">></span> Google Font</li></a>
					<a href="#" class="xxxxx"><li> <span class="carret-icon">></span> Unlimited Sidebar</li></a>
					<a href="#" class="xxxxx"><li> <span class="carret-icon">></span> Font Uploader</li></a>
					<a href="#" class="xxxxx"><li> <span class="carret-icon">></span> Shortcode Generator</li></a>
					<a href="#" class="xxxxx"><li> <span class="carret-icon">></span> Font Awesome</li></a>
					<a href="#" class="xxxxx"><li> <span class="carret-icon">></span> Scalable Container</li></a>
					<a href="#" class="xxxxx"><li> <span class="carret-icon">></span> Visual Editor in Page Builder</li></a>
				</ul>
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

