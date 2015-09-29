<?php
header('Content-Type: application/json');
 header("Access-Control-Allow-Origin: *");
 header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
require_once('../modelo/conexion.php');
require_once('../modelo/toDo.php');
    $conexion = new Connex();
    $mysqlconn= $conexion->conectar();
    
function agregar_tarea($mysql){
$tarea=$_GET['tarea'];   
$Todo= new Tarea();
    $agregar=$Todo->agregar($tarea,$mysql);
  return "ok";  
}
function obtener_tareas($mysql){
$Todo= new Tarea();
    $obtener=$Todo->obtener($mysql);
     for($i=0; $i<mysqli_num_rows($obtener); $i++){
    $fila=mysqli_fetch_array($obtener,MYSQLI_ASSOC);
   
$tareas=$fila["nom_tarea"];

 $array[$i] = array( 'nom_tarea'=>$tareas);
         
    }
   $tars=json_encode($array);
    return $tars;
     }

if($_GET['sol']=='agregar'){
$agregar=agregar_tarea($mysqlconn);
    echo json_encode($agregar);
}elseif($_GET['sol']=='listar'){
$obtener=obtener_tareas($mysqlconn);
    echo $obtener ;
}

?>