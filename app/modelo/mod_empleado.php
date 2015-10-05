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
  $this->conn= $this->conn->orm();
}


    public function crear()
    {
      $ar=  array('emp_nombre' => 'jolin', );
        $q=$this->conn->empleado()->insert($ar);
            return $q;
	}
  public function listar(){
      $empleados=array();
      foreach ($this->conn->empleado() as $empleado) {
          $empleados[] =array(
            'nombre'=>$empleado['emp_nombre']
            );
      }
      return $empleados;
  }

    public function buscar($ci){
        $empleado=$this->conn->empleado()->where('emp_cedula',$ci);
      return $empleado;
  }

}
?>