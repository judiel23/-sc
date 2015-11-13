<?php
class reporte {
private $desde;
private $hasta;

	private $mysqlconn;


		public function garantia($mysqlconn){

		$query= "SELECT gar_nombges, COUNT( * ) as num FROM garantia GROUP BY gar_nombges";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function garantia
        public function info($mysqlconn){

        		$query= "SELECT in_nomges,  COUNT( * ) AS num FROM info GROUP BY in_nomges ";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function info


		public function info_n($mysqlconn){

		$query= "SELECT in_niv1, COUNT( * ) AS num FROM info GROUP BY in_niv1";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function info_n
		public function con_ges($mysqlconn){

		$query= "SELECT con_gestor, COUNT( * ) AS num FROM conatel GROUP BY con_gestor";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function con_ges
		public function con_asu($mysqlconn){

		$query= "SELECT con_tipocas, COUNT( * ) AS num FROM conatel GROUP BY con_tipocas";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function con_asu
		public function con_est($mysqlconn){

		$query= "SELECT con_estatus, COUNT( * ) AS num FROM conatel GROUP BY con_estatus";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function con_est
		public function al($mysqlconn){

		$query= "SELECT bit_alca, COUNT( * ) AS num FROM bitacora GROUP BY bit_alca";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function con_est
		public function voz_est($mysqlconn){

		$query= "SELECT voz_estatus, COUNT( * ) AS num FROM voz_usuario GROUP BY voz_estatus";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function voz_est
		public function voz_can($mysqlconn){

		$query= "SELECT voz_canal, COUNT( * ) AS num FROM voz_usuario GROUP BY voz_canal";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function voz_canal


}//class reporte
?>