<?php 

include("con_db.php");


if (isset($_POST['register'])) {
	if (
	strlen($_POST['dni']) >= 1 &&
	strlen($_POST['apellido_paterno']) >= 1 &&
	strlen($_POST['apellido_materno']) >= 1 &&
	strlen($_POST['name']) >= 1 &&
	strlen($_POST['email']) >= 1 &&
	strlen($_POST['celular']) >= 1 &&
	strlen($_POST['domicilio']) >= 1 &&
	strlen($_POST['documento']) >= 1 &&
	strlen($_POST['n_doc']) >= 1 &&
	strlen($_POST['n_folio']) >= 1 &&
	strlen($_POST['asunto']) >= 1 &&
	strlen($_POST['archivo']) >= 1 &&
	strlen($_POST['terminos']) >= 1 &&
	strlen($_POST['notificacion']) >= 1) {
		$dni = trim($_POST['dni']);
		$apellido_paterno = trim($_POST['apellido_paterno']);
		$apellido_materno = trim($_POST['apellido_materno']);
	    $name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$celular = trim($_POST['celular']);
		$domicilio = trim($_POST['domicilio']);
		$documento = trim($_POST['documento']);
		$n_doc = trim($_POST['n_doc']);
		$n_folio = trim($_POST['n_folio']);
		$asunto = trim($_POST['asunto']);
		$_FILES = trim($_POST['archivo']);
		$terminos = trim($_POST['terminos']);
		$notificacion = trim($_POST['notificacion']);

	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(dni, apellido_paterno, apellido_materno, nombre, email, celular,domicilio,documento,n_doc, n_folio, asunto, archivo, terminos, notificacion, fecha_reg) VALUES ('$dni','$apellido_paterno','$apellido_materno','$name','$email','$celular','$domicilio','$documento','$n_doc','$n_folio','$asunto','$_FILES','$terminos','$notificacion','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>