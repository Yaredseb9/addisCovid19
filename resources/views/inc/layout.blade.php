
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Covid vulnerebility</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">


	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> -->
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/core.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/style.css') }}">
<script src="{{ asset('vendors/scripts/jQuery v3.2.1.min.js') }}"></script>
	<script src="{{ asset('vendors/scripts/core.js') }}"></script>
	<script src="{{ asset('vendors/scripts/script.min.js') }}"></script>
	<script src="{{ asset('vendors/scripts/process.js') }}"></script>
	<script src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>
	<script src="{{ asset('src/plugins/apexcharts/apexcharts.min.js') }}"></script>
	<script src="{{ asset('src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>

	<link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/sweetalert2/sweetalert2.css') }}">
	

	<!-- Global site tag (gtag.js) - Google Analytics -->

<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"> </script> -->

	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	
	@yield('nave')
	@yield('sidebar')

	<div class="main-container">
		@yield('content')	

		<foorer class="   ">
			<div class="footer-wrap pd-20 mb-20 card-box">
				Copyright © May.2021  <a href="https://alephtav.com" target="_blank">AlephTav</a>
			</div>
		</foorer>
			


</body>
	</div>
	
</html>