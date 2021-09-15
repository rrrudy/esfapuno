<!doctype html>
<html lang="es">

<head>
	<title>MESA DE PARTES VIRTUAL-ESFA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="php/estilo.css">
	<link rel="stylesheet" href="css/menu2.css">
	
	<link rel="stylesheet" href="css/contacto.css">
	<link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
	<link rel="icon" href="img/favicon.png">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	  <!-- Font Awesome -->
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  	<!-- Google Fonts -->
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&	display=swap">
  	<!-- Bootstrap core CSS -->
  	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.	css" rel="stylesheet">
  	<!-- Material Design Bootstrap -->
  	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" 	rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@700&display=swap" 	rel="stylesheet"> 
	
</head>

<body>
  <!--menu-->
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark   scrolling-navbar fixed-top border border-primary">
    <div class="container-fluid d-flex justify-content-center">
      <a class="navbar-brand" href="#">
        <img class="img " src="imagenes/logo.png" width="170" height="40" alt="" loading="lazy">
	  </a>
	  
      <h2 class="text-white text-center"style="font-size:calc(1.2em + .9vw)">MESA DE PARTES VIRTUAL</h2>
	 
    </div>
  </nav>
  <br>
  <br>
  <!--fin de menu-->
  
	<div class=" container border border-primary mt-5">
    	<form method="post" enctype="multipart/for-data">
    	<h3 class=" tituloA mt-2"style="font-size:calc(.9em + .9vw)">Envio de Documentos</h3>
			<div class="mb-4 container border border-primary">
			<h3 class="  mt-4 "style="font-size:calc(.6em + .9vw)">Datos de Remitente</h3>
			<div class="row">
				<div class="col-lg-6"style="text-align: left"  >
					<label for="dni" >Tipo de Documento  de Identidad</label>
					<input minlength="8" maxlength="8" 	type="text" class="form-control text-left" name="dni" id="dni" placeholder="Ingrese Número de DNI" required="" pattern="[0-9]+">
				</div>
				<div class="col-lg-6"style="text-align: left">
					<label for="text">Apellido Paterno</label>
					<input  minlength="5" maxlength="40" type="text" class="form-control text-left" name="apellido_paterno"  placeholder="Ingrese su Apellido Paterno" required="" pattern="[A-Za-z.0-9]+">
				</div>
			</div> 
			<div class="row">
				<div class="col-lg-6"style="text-align: left">
					<label for="text" >Apellido Materno</label>
					<input type="text" class="form-control text-left" name="apellido_materno" placeholder="Ingrese su Apellido Materno" required="" pattern="[a-zA-Z]+">
				</div>
				<div class="col-lg-6"style="text-align: left">
					<label for="text" >Nombres</label>
					<input type="text" class="form-control text-left" name="name" placeholder="Ingrese sus Nombres"required="" pattern="([AZ] {1} [az] {1,30} [-] {0,1} | [AZ] {1} [-\'] {1} [AZ] {0, 1} [az] {1,30} [-] {0,1} | [az] {1,2} [-\'] {1} [AZ] {1} [az] {1,30}) {2,5}" >

				</div>
			</div>
			<div class="row">
				<div class="col-lg-6"style="text-align: left">
					<label >Correo Electronico</label>
					<input type="email" class="form-control text-left" name="email" placeholder="Ingrese su Correo Electrónico"required="">
				</div>
				<div class="col-lg-6"style="text-align: left">
					<label >Numero de Celular</label>
					<input  type="text" class="form-control text-left" name="celular" placeholder="Ingrese su Numero Celular"required="" pattern="[0-9]{9}" >
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12"style="text-align: left">
					<label >Domicilio</label>
					<input type="domicilio" class="mb-4 form-control text-left" name="domicilio" placeholder="Ingrese su Domicilio Actual"required="" >
				</div>
			</div>
			</div>
			<div class="mb-4 container border border-primary">
			<h3 class="  mt-4 "style="font-size:calc(.6em + .9vw)">Datos del Documento</h3>
			<div class="row">
				<div class="col-lg-12"style="text-align: left">
					<div class="form-group text-left">

    					<label for="documento">Tipo de Documento</label>
    					<select  type="text" class="form-control text-left" name="documento" required="">
							<option value=""></option>
			  				<option value="Solicitud">Solicitud</option>
    		  				<option value="Oficio">Oficio</option>
    		  				<option value="Carta">Carta</option>
    		  				<option value="Informe">Informe</option>
			  				<option value="Memorando">Memorando</option>
			  				<option value="Resolución">Resolución</option>
			  				<option value="Directiva">Directiva</option>
    					</select>
 		 			</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6"style="text-align: left">
					<label >N° de Documento</label>
					<input type="text" class="form-control text-left" name="n_doc" placeholder="Número de Documento"required="">
				</div>
				<div class="col-lg-6"style="text-align: left">
					<label >N° de Folios</label>
					<input type="text" class="form-control text-left" name="n_folio" placeholder="Número de Folio"required="">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12"style="text-align: left">
					<div class="form-group text-left">
 						<label for="asunto">Asunto</label>
 			   			<textarea type="text" class="form-control text-left" name="asunto"  rows="3"></textarea>
 					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
			  		<div class="form-group text-left">
			    		<label for="archivo">Adjuntar Documento</label>
			   			<input type="file" class="form-control-file border border-secondary text-left" name="archivo"accept="application/pdf"required="">
			  		</div>
				</div>
			</div>
			<div class="row">
				<div class=" col-lg-12 form-group text-left">
		    		<label for="terminos">He leido y Acepto los Terminos Y condiciones</label>
		    		<select  type="text" class="form-control text-left" name="terminos" required="">
		      			<option></option>
						
		      			<option>Si</option>
 		    		</select>
		  		</div>
			</div>
			<div class="row">
				<div class=" col-lg-12 form-group text-left">
    				<label for="notificacion">Acepto la  notificacionmediante  correo electrónico registrado</label>
					<select  type="text" class="form-control text-left" name="notificacion" required="">
						<option></option>
					    
    		  			<option>Si</option>
    				</select>
  				</div>
			</div>
	
		<input class="mb-4" type="submit" name="register">
		</div>
    </form>
	</div>
        <?php 
		include("registrar.php");
		 
        ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>