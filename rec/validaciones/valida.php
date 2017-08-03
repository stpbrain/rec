<?php
	include_once __DIR__."/../conexion/conexion.php";
	
	
	//consultar si validaBD no se encuentra en $_POST:  lo que hace es devolver un mensaje y terminar la ejecucion.
	if(!isset($_POST["validaBD"])) {
		echo "NULL";
		return;
	}
	
	//ahora si se encuentra en $_POSt seguir
	$valida = $_POST["validaBD"];
	// si $valida es igual a "porfavor" consultar si la base de datos existe
	if($valida == "crea"){
		$conexion =crearBD();
		print_r($conexion);
		echo "OK";
		return;
	}
	//si $valida no es igual a porfavor mostrar mensaje y terminar la ejecucion.
	echo "NO_OK";
	return;