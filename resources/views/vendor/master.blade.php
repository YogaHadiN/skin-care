<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<title>@yield('title')</title>
		<link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
		<link href="{!! asset('css/bootstrap-select.min.css') !!}" rel="stylesheet">
		<link href="{!! asset('css/plugins/dataTables/dataTables.bootstrap.css') !!}" rel="stylesheet">
		<link href="{!! asset('css/plugins/dataTables/dataTables.responsive.css') !!}" rel="stylesheet">
		<link href="{!! asset('css/plugins/dataTables/dataTables.tableTools.min.css') !!}" rel="stylesheet">
		<link href="{!! asset('css/animate.css') !!}" rel="stylesheet">
		<link href="{!! asset('css/style.css') !!}" rel="stylesheet">
		<link href="{!! asset('css/jquery-ui.min.css') !!}" rel="stylesheet">
		<link href="{!! asset('css/plugins/datepicker/datepicker3.css') !!}" rel="stylesheet">
	</head>
	<body>
		@yield('body')
		<script src="{!! url('js/jquery-2.1.1.js') !!}"></script>
		<script src="{!! url('js/bootstrap.min.js') !!}"></script>
		<script src="{!! url('js/plugins/metisMenu/jquery.metisMenu.js') !!}"></script>
		<script src="{!! url('js/plugins/slimscroll/jquery.slimscroll.min.js') !!}"></script>
		<script src="{!! url('js/plugins/jeditable/jquery.jeditable.js') !!}"></script>
		<script src="{!! url('js/bootstrap-select.min.js') !!}"></script>
		<script src="{!! url('js/plugins/datepicker/bootstrap-datepicker.js') !!}" type="text/javascript"></script>
		<script src="{!! url('js/plugins/dataTables/jquery.dataTables.min.js') !!}"></script>
		<script src="{!! url('js/plugins/dataTables/dataTables.bootstrap.min.js') !!}"></script>
		<script src="{!! url('js/plugins/dataTables/dataTables.responsive.min.js') !!}"></script>
		<script src="{!! url('js/inspinia.js') !!}"></script>
		<script src="{!! url('js/plugins/pace/pace.min.js') !!}"></script>
		@yield('footer')
	</body>
</html>

