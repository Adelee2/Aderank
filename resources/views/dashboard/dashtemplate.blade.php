<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aderrank</title>
        <link type="text/css" href="{{ url('code/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ url('code/bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ url('code/css/theme.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ url('code/images/icons/css/font-awesome.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ url('code/http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600') }}"
            rel='stylesheet'>
    </head>
    <body>
    	@include('dashboard.dashlayout.header') 
	    <!-- Content Wrapper. Contains page content -->
	    @yield('wrapper')
	    <!-- /.content-wrapper -->

	    @include('dashboard.dashlayout.footer')
		<script src="{{ url('code/scripts/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('code/scripts/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('code/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('code/scripts/flot/jquery.flot.js') }}" type="text/javascript"></script>
        <script src="{{ url('code/scripts/flot/jquery.flot.resize.js') }}" type="text/javascript"></script>
        <script src="{{ url('code/scripts/datatables/jquery.dataTables.js') }}" type="text/javascript"></script>
        <script src="{{ url('code/scripts/common.js') }}" type="text/javascript"></script>
      
    </body>
</html>