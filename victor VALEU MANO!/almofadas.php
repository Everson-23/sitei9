 <?php
session_start();
include_once("php/conexao.php");
?>
<!doctype html>
<html>
<head>

	<meta charset="utf-8">
	<title>i9 Conceitos</title>
	<link rel="shortcut icon" type="image/png" href="img/fav2.png"/>
	<link href="css/materialize.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/chat.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/jquery.js"></script>

    <script src="js/jqueryform.js" type="text/javascript"></script> 
    <script type="text/javascript">
		$(document).ready(function(){
	        $(".resultado").hide();
	        $("#meufrm").ajaxForm({
	          target: '.resultado',
	          success: function(retorno){
		          $(".resultado").html(retorno);
		          $(".resultado").show();
	          }
	        });
      	});
	</script>

	
	<link href="fonts/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body id="page-top">
	<!-- ----------------------------------- MENU DE NAVEGAÇÃO ----------------------------------- -->
	<nav class="navbar navbar-default navbar-fixed-top" id="mainNav">
		<div class="container-fluid">
			<div class="col-md-2"></div>
			<div class="navbar-header col-md-2 ">
			
					
				<a href="#page-top" class="navbar-brand js-scroll-trigger" data-placement="top" >
					<img src="img/i92.png" width="50" class="imgi9">
				</a>
				<a href="#page-top " style="text-decoration: none;" class="js-scroll-trigger"><span class="typed"></span></a>	
			</div>
			<div class="col-md-2" >
			</div>
			<div class="col-md-6">
				<div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav pull-right" id="hover">
						<li role="presentation"><a href="../index.php" class="js-scroll-trigger"><i class="fas fa-home"></i></i>&nbsp VOLTAR </a></li>
				</div>
			</div>
		</div>
	</nav> 

	<!-- ----------------------------------- LOGO I9 CONCEITOS ----------------------------------- -->


		<br> 	<br>	<br>	<br>	<br>   
		<div class="col-md-12">
	<center><h2 style="font-family:Montserrat; font-size: 30px; margin-top: 30px;">Escolha o Tipo de Almofada:</h2></center>
			</div>
			<div class="row" style="margin-top: 70px;"> 
			<div class="col-md-2">
			<button style="background: transparent; border: transparent;"><img src="img/p/a1.png"  id="img" style=" width: 80%;"> <h2 style="font-family:Montserrat; font-size: 20px; ">Personalizada</h2>
</button>
			   
</div>		
			<div class="col-md-2">
		
		<button style="background: transparent; border: transparent;"><img src="img/p/a1.png"  id="img" style=" width: 80%;" </button>
			<h2 style="font-family:Montserrat; font-size: 20px;">Colorida</h2>
			</div>
        </div> 
        <br> <br> <br> <br>
	<div class="col-md-2">
		<button style="background: transparent; border: transparent;"><img src="img/p/a3.png"  id="img" style=" width: 80%;"><h2 style="font-family:Montserrat; font-size: 20px;">Com frases</h2></button>	
			
			</div>          
				<div class="col-md-2">  
				<button style="background: transparent; border: transparent;"><img src="img/p/a4.png"  id="img" style=" width: 80%;"><h2 style="font-family:Montserrat; font-size: 20px;">Desenho</button>
			
			</div>

		
<div class="row">
    <form class="col s6" style=" margin-top: -300; margin-left: 200px; padding-right: : 100px;">
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Descreva seu pedido</label>
        </div>
      </div>
    </form>
</div>
				
			</div>









	<!-- ----------------------------------- IMPORTS JS ----------------------------------- -->

	<!-- 
	 -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/materialize.js"></script>
	<script src="js/jquery.easing.js"></script>
	<script type="text/javascript" src="js/typed.js"></script>
	<script  src="js/index.js"></script>


	<!-- ----------------------------------- EDIÇÕES CSS LOCAIS ----------------------------------- -->
	<style type="text/css">
		body{ background-repeat: no-repeat; background-color: white;}
		/*body{background: linear-gradient(to bottom left, #fe3578, #5ca3fe);}*/
		body{background-color: white; font-family: Montserrat;overflow-x: hidden; }
		#fundo{height: 800px;}
		#fundo img{margin-top: 10%}

		.produtos{
			font-size: 15px;
		}
		.fundobot{
			background: linear-gradient(to bottom, white ,#f23674, #569efb, white);
		}
		.navbar-default{
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
			padding: 50px;
			background-color: black;
		}
	</style>

	<!-- ----------------------------------- EDIÇÕES JS LOCAIS ----------------------------------- -->
	<script type="text/javascript">



		$(document).ready(function(){
			$('.carousel').carousel({
				numVisible: 9,
				dist: -50
			});
		});
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		})
		$('#myModal').on('shown.bs.modal', function () {
			$('#myInput').focus()
		})	
		$(document).ready(function(){
			$('.modal').modal();
		});	


		/*DIGITANDO*/
		$(document).ready(function() {
			var typed = $(".typed");
			$(function() {
				typed.typed({
					strings: ["Conceitos"],
					typeSpeed: 100,
					loop: true,

				});
			});
		});
		function formatar(mascara, documento){
			var i = documento.value.length;
			var saida = mascara.substring(0,1);
			var texto = mascara.substring(i)

			if (texto.substring(0,1) != saida){
				documento.value += texto.substring(0,1);
			}

		}
	</script>



</body>
</html>