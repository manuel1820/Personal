@extends('layouts.about-us')

@section('css_stylesheet')
<link rel="stylesheet" type="text/css" href="css/tango/skin.css">
@stop

@section('js_scripts')
<script type="text/javascript" src="js/home.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
@stop

@section('content')

<div class="container">
	
	<div class="banner">
		<img src="../public/img/about-banner.png" id="banner">
	</div>

	<div class="contenido">
		
	
		<div class="content">
				
			<span>{{ trans('about.parrafo_uno') }}</span>
			<span>{{ trans('about.parrafo_dos') }}</span>
			<span>{{ trans('about.parrafo_tres') }}</span>

			<div class="imagen-about"></div>
		</div>
	<div class="carousel">
		<div class="content-carrusel">
			<span>{{ trans('about.parrafo_cuatro') }}</span>
				
			<ul id="mycarousel2" class="jcarousel-skin-tango">
				<li><img src="../public/img/uno.png"></li>
				<li><img src="../public/img/dos.png"></li>
				<li><img src="../public/img/tres.png"></li>
				<li><img src="../public/img/uno.png"></li>
				<li><img src="../public/img/dos.png"></li>
				<li><img src="../public/img/tres.png"></li>
			</ul>
	</div>		
		</div>
	</div>
</div>



@stop

@section('js_extra_script')

<script type="text/javascript">
$("document").ready(function(){

   	$ ('#myCarousel').carousel();

    });
	
	
	jQuery('#mycarousel2').jcarousel({
    	wrap: 'circular',
		scroll: 1,
		visible: 3,
    });
	
	
</script>

@stop