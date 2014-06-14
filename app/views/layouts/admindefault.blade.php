<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>@yield("title")</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		@yield("css_stylesheet")
		@yield("js_scripts")
	</head>
	<body>

		<div class="container">
				@include('includes.adminheader')
				@yield("content")
				@include('includes.adminfooter')
		</div>	
	</body>
</html>