<?php
session_start();
?>
<!doctype html>
<html>
<head>

	<meta charset="utf-8">
	<title>i9 Conceitos</title>
	<link rel="shortcut icon" type="image/png" href="img/fav2.png"/>
	<link href="css/materialize.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/7/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="fonts/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>


<body id="page-top">

	<nav class="navbar navbar-default navbar-fixed-top" id="mainNav">
		<div class="container-fluid">
			<div class="navbar-header col-md-3 ">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span>
				</button> 
				<a href="#page-top" title="Tooltip on top" target="_top" class="navbar-brand pull-right js-scroll-trigger" data-toggle="tooltip" data-placement="top" >
					<img src="img/i92.png" width="50" class="imgi9"></a>
				</div>
				<div class="col-md-3">
					<a href="#page-top " style="text-decoration: none;" class="js-scroll-trigger"><span class="typed"></span></a>
				</div>
				<div class="col-md-4	">
					<div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav pull-right" id="hover">
							<li role="presentation"> <a href="index.php" class="js-scroll-trigger" ><i class="fas fa-question fa-1x"></i>&nbsp SOBRE </a></li>
							<li role="presentation"> <a href="#index.php" class="js-scroll-trigger" ><i class="fas fa-shopping-basket fa-1x"></i>&nbsp PRODUTOS</a> </li>
						</ul>
					</div>
				</div>
				<div class="col-md-2"></div>
			</div>
		</nav> 

<br><br><br><br><br><br><br><br>
		<section class="content-section content" style="padding-top: 5%; margin-bottom: 15%;">
			<div class="row">
				<div class="col-md-3">
					<img src="img/otavio.jpg" class="img-circle pull-right" style="box-shadow: 0px 0px 0px 10px #d9e7f4;" width="200px;"/>
				</div>
				<div class="col-md-4" style="padding-left: 30px;">
					<h1 style="font-family: Montserrat-light; font-weight: bold; text-align: left; font-weight: bold; color: #ff3578;"><i class="fas fa-user"></i></i> Usuário:</h1>
				<h2> <?php 
					if(isset($_SESSION['email'])){
						echo utf8_encode($_SESSION['nome']); 
					
					} 

?>  <?php 
					if(isset($_SESSION['email'])){
						echo utf8_encode($_SESSION['sobrenome']); 
					
					} 

?> </h2> 
<h1 style="font-family: Montserrat-light; font-weight: bold; text-align: left; font-weight: bold; color: #ff3578;">Email:</h1>

				<h2> <?php 
					if(isset($_SESSION['email'])){
						echo utf8_encode($_SESSION['email']); 
					
					} 
					?>
					</h2>
					<a href="perfilmaster.php"><button class="class="btn i9 btn-lg">"></button>

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/7/bootstrap.js"></script>	
		<script type="text/javascript" src="js/materialize.js"></script>
		<script src="js/jquery.easing.js"></script>
		<script type="text/javascript" src="js/typed.js"></script>
		<script src="js/jquery-migrate.min.js"></script>
		<script src="js/jquery-min.js"></script>
		<script  src="js/index.js"></script>

		<style type="text/css">


          h2{
          	font-family: Montserrat-light; 
      color: #000;
          }

		

		.i9{
			background: linear-gradient(to bottom left, #ff3578, #fe6195);
			color: white;
			border: none;
			padding: 17px;
		}
		.i9:hover{
			transition: all 0.5s !important;
			color: white;
			background: linear-gradient(to bottom left, #1f81ff, #65a8ff);
		}
		.navbar{
			background-color:rgba(255,255,255,0.8);
			/* background-color: white;*/
			border-color:transparent;
			box-shadow: 1px 1px 5px rgba(0,0,0,0.2);
			font-size: 17px;
			font-family: trench100free;
			padding: 10px;
		}


		#hover a{
			font-weight: 1000;
			color: #4b81fa;
		}
		#hover a:hover{
			color: #ea58dc;
		}


		.btn-circle
		{font-size:26px;width:55px;height:55px;margin-top:15px;line-height:45px;-webkit-transition:background .3s ease-in-out;-moz-transition:background .3s ease-in-out;transition:background .3s ease-in-out;color:#fff;border:2px solid #fff;border-radius:100%!important;background:0 0}
		.btn-circle:focus,.btn-circle:hover
		{color:#fff;outline:0;background:rgba(255,255,255,.1)}


		.panel-body {
			color: white;
			background-color: #1f81ff;
			padding: 15px;
		}
		.panel-heading {
			background-color: #ff3578;
			padding: 10px 15px;
			border-top-left-radius: 3px;
			border-top-right-radius: 3px;
		}
		.edit{
			border-radius: 20px;
			padding: 30px;
			margin: 10px;
		}

		.navbar.black{
			background-color: #282828;
		}
		.imgi9{
			margin-top: -15px;
		}		
		.carousel {
			overflow: hidden;
			position: relative;
			width: 100%;
			height: 300px;
			margin-bottom: 35px;
			-webkit-perspective: 500px;
			perspective: 500px;
			-webkit-transform-style: preserve-3d;
			transform-style: preserve-3d;
			-webkit-transform-origin: 0% 50%;
			transform-origin: 0% 50%;
		}

		.carousel.carousel-slider {
			top: 0;
			left: 0;
		}

		.carousel.carousel-slider .carousel-fixed-item {
			position: absolute;
			left: 0;
			right: 0;
			bottom: 20px;
			z-index: 1;
		}

		.carousel.carousel-slider .carousel-fixed-item.with-indicators {
			bottom: 68px;
		}

		.carousel.carousel-slider .carousel-item {
			width: 100%;
			height: 100%;
			min-height: 400px;
			position: absolute;
			top: 0;
			left: 0;
		}

		.carousel.carousel-slider .carousel-item h2 {
			font-size: 24px;
			font-weight: 500;
			line-height: 32px;
		}

		.carousel.carousel-slider .carousel-item p {
			font-size: 15px;
		}

		.carousel .carousel-item {
			visibility: hidden;
			width: 200px;
			height: 200px;
			position: absolute;
			top: 0;
			left: 0;
		}

		.carousel .carousel-item > img {
			width: 100%;
		}

		.carousel .indicators {
			position: absolute;
			text-align: center;
			left: 0;
			right: 0;
			bottom: 0;
			margin: 0;
		}

		.carousel .indicators .indicator-item {
			display: inline-block;
			position: relative;
			cursor: pointer;
			height: 8px;
			width: 8px;
			margin: 24px 4px;
			background-color: rgba(255, 255, 255, 0.5);
			-webkit-transition: background-color .3s;
			transition: background-color .3s;
			border-radius: 50%;
		}

		.carousel .indicators .indicator-item.active {
			background-color: #fff;
		}

		.carousel.scrolling .carousel-item .materialboxed,
		.carousel .carousel-item:not(.active) .materialboxed {
			pointer-events: none;
		}		
		@font-face {
			font-family: trench100free;
			src: url('fonts/trench100free.ttf');
		}
		@font-face {
			font-family: Montserrat;
			src: url('fonts/Montserrat/Montserrat-Regular.ttf');
		}
		@font-face {
			font-family: Montserrat-light;
			src: url('fonts/Montserrat/Montserrat-light.ttf');
		}
		@font-face {
			font-family: Montserrat-bold;
			src: url('fonts/Montserrat/Montserrat-bold.ttf');
		}
		
		.navbar-nav  > li > a:before {
			content: "" !important;
			position: absolute !important;
			width: 100% !important;
			height: 2px !important;
			bottom: 0 !important;
			left: 0 !important;
			background-color: #ea58dc;
			visibility: hidden !important;
			-webkit-transform: scaleX(0) !important;
			transform: scaleX(0) !important;
			-webkit-transition: all 0.3s ease-in-out 0s !important;
			transition: all 0.3s ease-in-out 0s !important;
		}
		.navbar-nav a:hover:before, .navbar-nav  li:hover > a:before, .navbar-nav .active > a:before {
			visibility: visible!important;
			-webkit-transform: scaleX(1)!important;
			transform: scaleX(1)!important;
		}

		.typed{
			color: #ff8af5;
			font-size: 35px;
			font-weight: bold;
			text-decoration: none;
		}
		footer{
			height: 300px;
			background-color: #4d4d4d;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.carousel').carousel({
				duration: 1000,
				dist: -200,
			});
		});
		$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
	</script>

	<!-- ESTE É O CAROUSEL HOVER -->
	<style type="text/css">

	.carousel2{
		display: block !important;
		-webkit-transform: translateZ(0) !important;
		/*  for demo only */

		width: 55%;
		height: 200px;
		min-width: 550px;
		margin: auto;
		font-size: 0;
		background: white;
		padding: 8px;
		border-radius: 6px;
		/********************/
		height: 200px;
		-webkit-overflow-scrolling: touch;
		/* for tablets */
	}
	.touch .carousel2 {
		overflow: auto !important;
	}
	.carousel2:before, .carousel2:after {
		content: '' !important;
		opacity: 0 !important;
		position: absolute !important;
		top: 0 !important;
		bottom: 0 !important
		z-index: 2 !important;
		width: 50px !important;
		font-size: 80px !important;
		line-height: 190px !important;
		font-family: arial !important;
		color: white !important;
		font-weight: bold !important;
		pointer-events: none !important;
		transition: 0.2s ease-out !important;
	}
	.carousel2:before {
		content: '\2039' !important;
		left: 0 !important;
		text-align: left !important;
		text-indent: -20px !important;
	}
	.carousel2:after {
		content: '\203A' !important;
		right: 0 !important
		text-align: right !important;
		text-indent: 40px !important;
	}
	.carousel2.right:after, .carousel2.left:before {
		opacity: 1 !important;
	}
	.carousel2.right:after {
		right: 0 !important;
		text-indent: 60px !important;
	}
	.carousel2.left:before {
		left: 0 !important
		text-indent: -40px !important;
	}
	.carousel2 > a {
		position: absolute !important;
		margin: 0 !important;
		top: 0 !important;
		bottom: 0 !important;
		color: #CCC !important;
		font-size: 1.5em !important;
		transition: 0.1s !important;
	}
	.carousel2 > a:hover {
		color: #FFF !important;
	}
	.carousel2 > a.prev {
		left: -20px !important;
	}
	.carousel2 > a.next {
		right: -20px !important;
	}
	.carousel2 > .indicator {
		pointer-events: none !important;
		position: absolute !important;
		z-index: 4 !important;
		bottom: 0 !important;
		left: 0 !important;
		background: #D82B6A !important;
		height: 4px !important;
		border-radius: 10px !important;
		opacity: 0 !important;
		transition: opacity 0.2s, bottom 0.2s !important;
	}
	.carousel2:hover > .indicator {
		opacity: 1 !important;
		bottom: -10px !important;
	}
	.carousel2 > .wrap {
		overflow: hidden !important;
		border-radius: 5px !important;
	}
	.carousel2 > .wrap > ul {
		list-style: none !important;
		white-space: nowrap !important;
		height: 200px !important;
	}
	.carousel2 > .wrap > ul > li {
		display: inline-block !important;
		vertical-align: middle !important;
		height: 100% !important;
		margin: 0 0 0 5px !important;
		position: relative !important;
		overflow: hidden !important;
		transition: 0.25s ease-out !important;
	}
	.carousel2 > .wrap > ul > li:first-child {
		margin: 0 !important;
	}
	.carousel2 > .wrap > ul > li > img {
		display: block !important;
		height: 100% !important;
		margin: auto !important;
		vertical-align: bottom !important;
		position: relative !important;
		z-index: 1 !important;
		transition: 1s ease !important;
	}	
</style>


<!-- DIGITANDO-->
<script>
	$(document).ready(function() {
		var typed = $(".typed");
		$(function() {
			typed.typed({
				strings: ["I9 Conceitos"],
				typeSpeed: 100,
				loop: true,

			});
		});
	});

</script>

</body>
</html>