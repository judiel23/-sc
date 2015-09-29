<?php
class Tarea{
	private $nom_tarea;
	

	public function agregar($nom_tarea, $mysqlconn){

	$query = "INSERT INTO tarea (nom_tarea)

	VALUES ('$nom_tarea')";

		$consulta= mysqli_query($mysqlconn,$query);

		return $consulta;

		}//function agragar


		
	public function obtener($mysqlconn){
		$query= "SELECT * FROM tarea;";
		$consulta= mysqli_query($mysqlconn,$query) or die ("Consulta Errónea: ".mysqli_error($consulta));
		if($consulta){
			return ($consulta);
			}// if obtener
		}//class obtener

		
}//class empleado
?>