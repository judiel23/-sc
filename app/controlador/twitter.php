<?php
header('Content-Type: application/json');
 header("Access-Control-Allow-Origin: *");
 header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
require_once('../modelo/mod_twitter.php');





/*
function agregar_data(){

$Todo= new Tarea();
    $agregar=$Todo->agregar($tarea,);
  return "ok";
}

function obtener_tareas(){
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

}


*/
/*
if($_GET['sol']=='agregar'){
$agregar=agregar_tarea($mysqlconn);
    echo json_encode($agregar);
}elseif($_GET['sol']=='listar'){
$obtener=obtener_tareas($mysqlconn);
    echo $obtener ;
}
*/
?>