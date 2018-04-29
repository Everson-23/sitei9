<?php
session_start();
?>
<!doctype html>
<html>
<head>
	<div>
		<meta charset="utf-8">
		<title>i9 Conceitos</title>
		<link rel="shortcut icon" type="image/png" href="../img/fav2.png"/>
		<link href="../css/materialize.css" rel="stylesheet">
		<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
		
		<link href="../fonts/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet">
		<link rel="stylesheet" href="../css/style.css">
	</div>
</head>
<body id="page-top">

	<nav class="navbar navbar-default navbar-fixed-top" id="mainNav">
		<div class="container-fluid">
			<div class="col-md-2"></div>
			<div class="navbar-header col-md-2 ">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span>
				</button> 		
				<a href="#page-top" class="navbar-brand js-scroll-trigger" data-placement="top" >
					<img src="../img/i92.png" width="50" class="imgi9">
				</a>
				<a href="#page-top " style="text-decoration: none;" class="js-scroll-trigger"><span class="typed"></span></a>	
			</div>
			<div class="col-md-4" >
			</div>
			<div class="col-md-4">
				<div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav pull-left" id="hover">
						<li role="presentation"><a href="../index.php" class="js-scroll-trigger"><i class="fas fa-home"></i></i>&nbsp VOLTAR </a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
      


<div>


		<h1 style="color: #f23674; padding: 20px; font-size: 32px; padding-top: 150px"><b>U &nbsp S &nbsp U &nbsp A &nbsp R &nbsp I &nbsp O  &nbsp : </b> </h1>
			<h2 style="font-size: 20px; padding: 20px;" > <?php 
					if(isset($_SESSION['email'])){
						echo utf8_encode($_SESSION['nome']); 
					
					} 

?>  <?php 
					if(isset($_SESSION['email'])){
						echo utf8_encode($_SESSION['sobrenome']); 
					
					} 

?> </h2> 
	<h1 style="color: #f23674; padding: 20px; font-size: 32px; padding-top: 50px"><b>E &nbsp M &nbsp A &nbsp I &nbsp L &nbsp : </b> </h1>
	<h2 style="font-size: 20px; padding: 20px;">
	<?php 
					if(isset($_SESSION['email'])){
						echo utf8_encode($_SESSION['email']); 
					
					} 

	?>
	</h2>
	

</div> 
<?php 
     
	include_once("conexao.php");
	$result_pedidos = "SELECT * FROM pedidos";
	$resultado_ped = mysqli_query($conn, $result_pedidos);
?>

			</div>
		
		<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Pedidos</h4>
      </div>
      <div class="modal-body"><p>
		
        <div class="col-md-12">
					<br><table class="table">
								<thead>
									<tr>
								<?php while($rows_pes = mysqli_fetch_assoc($resultado_ped)){ ?><p><?php echo $rows_pes['id']; ?></p>
							<p><?php echo $rows_pes['nome']; ?></p>
							<p><?php echo $rows_pes['data']; ?></p>
									<?php } ?>
									</tr>
			</thead>
			
			<tbody>
							<tr>
								<th>#</th>
								<th>usuário</th>
								<th>email</th>
							</tr>
							
						
						
						
						</br>
						</div>
							
							
						</tbody>
					 </table>
		</div>
	  
		</div>


	
       </p> 
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
				<button type="button" class="btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Pedidos</button>


	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/materialize.js"></script>
	<script src="../js/jquery.easing.js"></script>
	<script type="text/javascript" src="../js/typed.js"></script>
	<script  src="../js/index.js"></script>

	<style type="text/css">

	/*body{background: linear-gradient(to bottom left, #fe3578, #5ca3fe);}*/
	body{background-color: white; font-family: Montserrat;}
	#fundo{margin-top: 12%;}

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
		src: url('../fonts/trench100free.ttf');
	}
	@font-face {
		font-family: Montserrat;
		src: url('../fonts/Montserrat/Montserrat-Regular.ttf');
	}
	@font-face {
		font-family: Montserrat-light;
		src: url('../fonts/Montserrat/Montserrat-light.ttf');
	}
	@font-face {
		font-family: Montserrat-bold;
		src: url('../fonts/Montserrat/Montserrat-bold.ttf');
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
		h1.{
			color: black;
			font-size: 20px;
		
		}
		
</style>

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