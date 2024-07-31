
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Objetos de Aprendizaje</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../assets/js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="../assets/css/sweet-alert.css">
    <link rel="stylesheet" href="../assets/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/jquery.mCustomScrollbar.css">
	
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	
	
    
    <script src="../assets/js/modernizr.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../assets/js/main.js"></script>
	
	<style>
	 .loading  {
		 position: fixed;
		 left: 0px;
		 top: 0px;
		 width: 100%;
		 height: 100%;
		 z-index: 9999;
		 background: url('../assets/images/Loading_2.gif') 50% 50% no-repeat rgb(249,249,249);
		opacity: .8; }
	</style>
	
</head>
<body onload="startTime()">
<div class="loading"></div>

				
						 
				
					
				

    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile nav-lateral-scroll">
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset" style="padding: 10px 0; color:#fff;">
                <figure>
                    <img src="../assets/images/quien.png" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
                </figure>
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
				    <li><a href="../vista/admin/admin_portada.php"><i class=""></i>Total</a></li>                   
                    <li><a href="grado.php"><i class=""></i>Suma de dos números</a></li>
					<li><a href="#"><i class=""></i>Resta de dos números</a></li>
					<li><a href="#"><i class=""></i>División de dos números</a></li>
					<li><a href="#"><i class=""></i>Imprimir la tabla del 10</a></li>
					<li><a href="#"><i class=""></i>Sacar la raiz cuadrada</a></li>
					<li><a href="#"><i class=""></i>Imprimir los números naturales</a></li>
					<li><a href="#"><i class=""></i>Imprimir los numeros impares</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="">
        <nav class="navbar-user-top full-reset">
        </nav>
		
		<div class="container-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
              <li role="presentation"><a href="grado.php">DESCRIPCION</a></li>
              <li role="presentation"><a href="tema.php">PLANTEAMIENTO</a></li>
              <li role="presentation"><a href="clase.php">DIAGRAMA DE FLUJO</a></li>
              <li role="presentation" class="active"><a href="#">PSEUDOCODIGO</a></li>
			   <li role="presentation"><a href="plan.php">CODIGO C</a></li>
			    <li role="presentation"><a href="asignacion.php">EJECUCION</a></li>
				<li role="presentation"><a href="asisalum.php">ARCHIVO EXE</a></li>
            </ul>
        </div>
		
		 <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    <h1>Pseudocodigo</h1>
                </div>
				<div class="col-xs-12 col-sm-4 col-md-7">
                    <img src="../assets/images/pse.jpg" alt="user" class="" style="max-width: 1100px;">
                </div>
            </div>
        </div>
       	
        
    </div>
	 <script src="../assets/js/reloj.js"></script> 
	 <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->
	 
	<script type="text/javascript">
$(document).ready(function () {
   (function($) {
       $('#FiltrarContenido').keyup(function () {
            var ValorBusqueda = new RegExp($(this).val(), 'i');
            $('.BusquedaRapida tr').hide();
             $('.BusquedaRapida tr').filter(function () {
                return ValorBusqueda.test($(this).text());
              }).show();
                })
      }(jQuery));
});
</script>  
	     		 	 <script>
$(window).on('load', function () {
      setTimeout(function () {
    $(".loading").css({visibility:"hidden",opacity:"0"})
  }, 500);
     
});
</script>
	 
</body>
</html>