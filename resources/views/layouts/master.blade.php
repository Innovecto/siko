<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sistem Informasi Kependudukan Online</title>

  		<meta content="width=device-width, initial-scale=1.0" name="viewport">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<meta content="Metronic Shop UI description" name="description">
		<meta content="Metronic Shop UI keywords" name="keywords">
		<meta content="keenthemes" name="author">

		<meta property="og:site_name" content="-CUSTOMER VALUE-">
		<meta property="og:title" content="-CUSTOMER VALUE-">
		<meta property="og:description" content="-CUSTOMER VALUE-">
		<meta property="og:type" content="website">
		<meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
		<meta property="og:url" content="-CUSTOMER VALUE-">

		<link rel="shortcut icon" href="favicon.ico">

		<!-- Fonts START -->
		{!! Html::style('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all') !!}
		<!-- Fonts END -->

		{!! Html::style('/css/vendor.css') !!}
		{!! Html::style('/css/plugin.css') !!}
		{!! Html::style('/css/component.css') !!}
		</head>
	<body class="corporate">
		@include('layouts.topbar')
		@include('layouts.header')
		@yield('content')
		@include('layouts.footer')
		{!! Html::script('/js/vendor.js') !!}
		{!! Html::script('/js/plugin.js') !!}
		{!! Html::script('/js/revo1.js') !!}
		{!! Html::script('/js/revo2.js') !!}
		{!! Html::script('/js/revo3.js') !!}
		{!! Html::script('/js/component.js') !!}
		<script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            RevosliderInit.initRevoSlider();
            Layout.initTwitter();
            //Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            //Layout.initNavScrolling(); 
        });
    </script>
	</body>
</html>