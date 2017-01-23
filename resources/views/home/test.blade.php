@extends('layout.master')

@section('title') 
Klinik Jati Elok | Test
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
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{ url('img/slider-item-1-1.png') }}" alt="...">
      <div class="carousel-caption">
		  one
      </div>
    </div>
    <div class="item">
      <img src="{{ url('img/slider-item-2-1.jpg') }}" alt="...">
      <div class="carousel-caption">
		  two
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
@stop
@section('footer') 
	<script type="text/javascript" charset="utf-8">
	  $(document).ready(function(){
		$('.carousel').carousel({
		  interval: 3000
		})
	  });   	
	</script>
	
@stop

