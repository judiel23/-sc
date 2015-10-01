<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once 'excel_reader2.php';
require_once '../../modelo/conexion.php';
$con=new Connex();
$data = new Spreadsheet_Excel_Reader("tw.xls");



for ($i=0; $i < $data->colcount(); $i++) {
	//for ($j=0; $j< $data->rowcount(); $j++) {
		# code...


	$col= $data->val(1,$i);
	$query="ALTER TABLE twitter_temp ADD ".$col."  varchar(200)";
	$c=$con->query($query);


	//}


}



?>

