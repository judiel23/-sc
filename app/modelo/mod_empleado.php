<?php
require('conexion.php');
class Empleado extends Connex
{

	private 	$usu_cedula;
	private 	$usu_nombre;
   	private 	$usu_apellido;
      	private 	$usu_clave;
    	private 	$usu_telefono;
    	private 	$usu_correo;
    	private 	$dep_cod;
    	private 	$per_cod;
          private 	$conn;

public function __construct(){
	$this->conn=new Connex;
}


    public function ()
    {
 		$query = $this->conn->query("")or die("Consulta errónea: ".;
		if ($query)
		{
			return $query;
		}
	}

}
?>