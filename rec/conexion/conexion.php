<?php




	 const server = "localhost"; 
	const user = "root";
	const pass = "";
	const DB = "recuerdameBD";

 function conexion()
{

if (!$conexion=mysql_connect($server,$user,$pass))
{
echo "Error al conectar a la base de datos ".mysql_error();;	
exit();
}
 if (!@mysql_select_db($DB,$conexion)) 
			{
		   echo "Error al seleccionar la base de datos ".mysql_error();;  
		   exit();
			}

}

	 function crearBD()
	{
		$conexionBase = mysql_connect($server,$user,$pass);
		$sql = "CREATE database $DB";
		$crear =mysql_query($sql,$conexionBase);
		if(!$crear)
		{
			echo "error creando instancia";
		}else {
			echo "creacion exitosa";
		}


	}




?>