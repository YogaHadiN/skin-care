<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<title>This</title>
		 <link href="https://fonts.googleapis.com/css?family=Alegreya|Monda|Taviraj" rel="stylesheet"> 
		 <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" rel="stylesheet"> 
		<link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
		<link href="{!! asset('css/animate.css') !!}" rel="stylesheet">
		<link href="{!! asset('css/jquery-ui.min.css') !!}" rel="stylesheet">
		<style type="text/css" media="all">
		</style>
	</head>
	<body>
		<div class="container">
			<div>
				<h1 class="animated fadeIn">
				this
				</h1>
			</div>
			<div class="button">
				<a class="btn btn-success" onclick="efect();return false;">btn btn-success</a>
			</div>
			
		</div>

		{!! HTML::script('js/jquery-2.1.1.js')!!}
		{!! HTML::script('js/bootstrap.min.js')!!}
		{!! HTML::script('js/plugins/metisMenu/jquery.metisMenu.js')!!}
		{!! HTML::script('js/plugins/slimscroll/jquery.slimscroll.min.js')!!}
		{!! HTML::script('js/plugins/jeditable/jquery.jeditable.js')!!}
		{!! HTML::script('js/inspinia.js')!!}
		{!! HTML::script('js/plugins/pace/pace.min.js')!!}
		<script type="text/javascript" charset="utf-8">
			function efect(){
				$('.efect').addClass('fadeIn');
			}
		</script>
	</body>
</html>
