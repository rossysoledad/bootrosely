<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>proyecto rosely</title>
	<link rel="stylesheet" href="public/css/bootstrap.css">
	<link rel="stylesheet"  href="public/css/estilos.css">

</head>
<body>
	
	<div id="carousel-id" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-id" data-slide-to="0" class=""></li>
			<li data-target="#carousel-id" data-slide-to="1" class=""></li>
			<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item">
				<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="public/slider/rosy.png">
				<div class="container">
					<div class="carousel-caption">
						<h1>Example headline.</h1>
						<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
						<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
					</div>
				</div>
			</div>
			<div class="item">
				<img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="public/slider/osito.png">
				<div class="container">
					<div class="carousel-caption">
						<h1>Another example headline.</h1>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
					</div>
				</div>
			</div>
			<div class="item active">
				<img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="public/slider/elma.jpg">
				<div class="container">
					<div class="carousel-caption">
						<h1>One more for good measure.</h1>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>

	<div class="container">
 	
 	  
 	<div class="row">
 		<div class="col-md-6">
 			<div class="mi-video">
 				<video autobuffer autoloop loop controls>
 					<source src="public/musica/El condor pasa - PERU.mp4">
 				</video>
 			</div>
 		</div>
 		<div class="col-md-6">
 			<div class="mi-video">
 				<video autobuffer autoloop loop controls>
 					<source src="public/musica/SACSAYHUAMAN-CUSCO-PERU.mp4">
 				</video>
 			</div>
 		</div> 
 		 
	</div>
	<script src="public/js/jquery-1.12.1.js"></script>
	<script  src="public/js/bootstrap.js"></script>



</body>
</html>