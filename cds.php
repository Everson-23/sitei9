
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
   <meta charset="utf-8">
  <title>i9 Conceitos</title>
  <link rel="shortcut icon" type="image/png" href="img/fav2.png"/>
  <link href="css/materialize.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/7/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="fonts/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

    <!-- CSS a parte -->
<style type="text/css">
 
    body{background-color: white}
    #fundo{height: 800px;}
    #fundo img{margin-top: 10%}

    

    .i9{
      background:to bottom left, #ff3578, #fe6195);
      
      border: none;
      padding: 17px;
    }
    .i9:hover{
      transition: all 0.5s !important;
      color: white;
      background: to bottom left, #1f81ff, #65a8ff);
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
#fone{
      color: black;
    }
    #encomenda{
      background-color: white;
    }
    
  #vermais{
    height: 50px;
    width: 15%;
  
  }
  .primary-heading{
    text-shadow: 1px 1px 1px black;
     font-family: "Pinyon Script", serif;
     color: rgb(255,163,62);
     font-size: 48pt;
  }
  .form-dinamic{
    display: block;
  width: 50%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
       -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
          transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;

  }

  </style>
	

	<script>
		function formatar(mascara, documento){
		  var i = documento.value.length;
		  var saida = mascara.substring(0,1);
		  var texto = mascara.substring(i)
		  
		  if (texto.substring(0,1) != saida){
		            documento.value += texto.substring(0,1);
		  }
		  
		}
		</script>


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
        <a href="#page-top" title="Inicio" target="_top" class="navbar-brand pull-right js-scroll-trigger" data-toggle="tooltip" data-placement="top" >
          <img src="img/i92.png" width="50" class="imgi9"></a>
        </div>
        <div class="col-md-3">
          <a href="#page-top " style="text-decoration: none;" class="js-scroll-trigger"><span class="typed"></span></a>
        </div>
        <div class="col-md-4  ">
          <div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav pull-right" id="hover">
              <li role="presentation"> <a href="#sobre" class="js-scroll-trigger" ><i class="fas fa-question fa-1x"></i>&nbsp SOBRE </a></li>
              <li role="presentation"> <a href="#produtos" class="js-scroll-trigger" ><i class="fas fa-shopping-basket fa-1x"></i>&nbsp PRODUTOS</a> </li>
              <li role="presentation"> <a href="Perfil2.php" class="js-scroll-trigger" ><i class="fas fa-user"></i></i>&nbsp Perfil</a> </li>
              <li role="presentation"><a href="login2.php" class="js-scroll-trigger" ><i class="fas fa-lock"></i>&nbsp Login</a> </li> 
            </ul>
          </div>
        </div>
        	<?php 
				if(isset($_SESSION['email'])){
					echo "<a class='logs'>Olá Sr(a) ".utf8_encode($_SESSION['sobrenome'])."</a> | <a class='ae' href='sair.php'>SAIR</a> <a class='car' style='font-size: 20px; color: black;' href='carrinho.php'><img src='img/car.png' width='30px'></a>";
				}else{
					echo "<a href='login.php' class='log'>Login</a>";
				}

			?>

			<?php
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg']."<br><br><br>";
					unset($_SESSION['msg']);
				}
				if(isset($_SESSION['deu'])){
					echo $_SESSION['deu']."<br><br><br>";
					unset($_SESSION['deu']);
				}
				?>
			</h2>

        <div class="col-md-2"></div>
      </div>
    </nav> 
<section class="content-section content" style="padding-top: 10%; margin-bottom: 15%;">

    <form method="post" action="cadastro.php" class="probootstrap-form" id="form">
      <div class="container" >
      <h2 class="primary-heading" style="font-family: trench100free;color: #ff3578">Cadastro</h2>
         <form role="form">
      <fieldset>
         <div class="row">
          <div class="form-group col-lg-4">
            <label for="exampleInputEmail1">Nome</label>
            <input class="form-control" id="exampleId" placeholder="" type="text" name="nome">
        <div class="row">
          <div class="form-group col-lg-4">
            <label for="exampleInputEmail1">id</label>
            <input class="form-control" id="exampleInputEmail1" placeholder="" type="text" name="id">
          </div>
          <div class="form-group col-lg-8">
            <label for="exampleInputEmail1">Sobrenome</label>
            <input class="form-control" id="exampleInputEmail1" placeholder="Insira seu texto aqui" type="text" name="sobrenome">
          </div>
        </div>
        
        </div>
        <div class="row">
          <div class="form-group col-lg-3">
            <label for="exampleInputEmail1">Senha</label>
            <input class="form-control" id="exampleInputEmail1" placeholder="senha" type="password" name="senha">
          </div>
          <div class="form-group col-lg-6">
            <label for="exampleInputEmail1">Email</label>
            <input class="form-control" id="exampleInputEmail1" placeholder="Insira seu emai aqui" type="email" name="email">
          </div>
           <div class="form-group col-lg-3">
            <label for="exampleInputEmail1">CPF</label>
         <input type="text" name="cpf" placeholder="123.123.123-00" maxlength="14" required OnKeyPress="formatar('###.###.###-##', this)">
          </div>

          <div class="form-group col-lg-3">
            <label for="exampleInputEmail1">Nascimento</label>
            <input class="form-control" id="exampleInputEmail1" type="date" name="nascimento">
          </div>

          <div class="form-group col-lg-3">
            <label for="exampleInputEmail1">telefone</label>
            <input type="text" name="telefone" placeholder="99 88888-7777" maxlength="13" required OnKeyPress="formatar('## #####-####', this)">
          </div> 

        </div>
        <div class="box-actions">
    <a href="login2.php"> <input type="submit" class= "btn btn-primary" name="btenviar" value="Cadastrar"> 
          <button class="btn btn-danger">Cancelar</button>
        </div>
    
      </fieldset>
    </form>
  
    

       
    </form>
    </section>
   
    <script src="js/scripts.min.js"></script>
    <script src="js/custom.min.js"></script>


  </body>
</html>