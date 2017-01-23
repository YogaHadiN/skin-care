@extends('layout.master')

@section('title') 
Klinik Jati Elok | Facial Therapy
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
		'title' => 'Treatment Detail',
		'subtitle' => 'Facial Spa',
	])
<div class="treatment-detail">
	<div class="container">
		<div class="row rowMargin">
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<img src="{{ url('img/skin-facial/photodune-8600513-peaceful-brunette-getting-facial-from-beauty-therapist-in-the-health-spa-m.jpg') }}" class="img-rounded" alt="Responsive image">
			</div>
			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				<h2 class='palatino text-pink'>Treatment Info</h2>
				<div class="text-grey">
					<table class="table table-hover no-border">
						<tbody>
							<tr>
								<td class="bold">Time</td>
								<td>Tue / 14:00-18:00 , Fri / 9:00-15:00</td>
							</tr>
							<tr>
								<td class="bold">Staff</td>
								<td>Tanya Landry</td>
							</tr>
							<tr>
								<td class="bold">Price</td>
								<td> $ 70</td>
							</tr>
							<tr>
								<td class="bold">Tags</td>
								<td>Facial / Massage</td>
							</tr>
						</tbody>
					</table>
					<h5 class='bold'><i class="icon-file-text fa fa-file-pdf-o"></i> DOWNLOAD BROCHURE</h5>
					<div class="treatment-detail-social-media">
						<i class="fa fa-facebook"></i>
						<i class="fa fa-twitter"></i>
						<i class="fa fa-instagram"></i>
						<i class="fa fa-pinterest"></i>
						<i class="fa fa-dribbble"></i>
					</div>
				</div>
				<h2 class='palatino text-pink'>Treatment Detail</h2>
				<p class='text-grey text-treatment-detail'>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis lacus vel augue laoreet rutrum faucibus. Integer legentibus erat a ante historiarum dapibus. At nos hinc posthac, sitientis piros Afros. Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Lorem ipsum dolor.</p>
			</div>
		</div>
		<div class="row rowMargin">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h2 class='palatino'>Related Treatment</h2>
				<div class="row">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						@include('service.related', ['img' => 'photodune-5179310-male-plastic-surgeon-with-patient-m-400x300.jpg'])
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						@include('service.related', ['img' => 'photodune-7064054-woman-face-and-beautician-hands-with-syringes-m-400x300.jpg'])
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						@include('service.related', ['img' => 'Fotolia_24881759_Subscription_Monthly_XXL-400x300.jpg'])
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						@include('service.related', ['img' => 'photodune-3019155-chocolate-mask-facial-spa-beauty-spa-salon-m-400x300.jpg'])
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
@stop
@section('footer') 
@stop

