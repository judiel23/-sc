<?php
require('conexion.php');
class Twitter extends Connex
{


public function __construct(){
	$this->conn=new Connex;
}


    public function data ()
    {
 		$query = $this->conn->query("")or die("Consulta errónea: ");
		if ($query)
		{
			return $query;
		}
	}

}
?>