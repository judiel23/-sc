<?php
require ("session.php");
?>
<!DOCTYPE HTML>

<html>
	<head>
		<link rel="icon" href="images/logot.png" type="image" sizes="16x16">
		<title>Bitacora</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
        <script type="text/javascript" src="../fusioncharts/js/fusioncharts.js"></script>
        <script type="text/javascript" src="../fusioncharts/js/themes/fusioncharts.theme.carbon.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<!--
		Note: Set the body element's class to "left-sidebar" to position the sidebar on the left.
		Set it to "right-sidebar" to, you guessed it, position it on the right.
	-->
	<body class="left-sidebar">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Content -->
					<div id="content">
						<div class="inner">


								<article class="box post post-excerpt">
									<header>

										<h2><a href="#">Reporte de Bitacora</a></h2>
										<hr>
										<div align="right"><a href="../controlador/bdexcel_bitacora.php">Exportar Data</a></div>

									</header>
									<div class="info">

										<span class="date"><span class="month">Bitacora</span>
										<ul class="stats">

										</ul>
									</div>


</span></div></article>

                                                    <div>    <?php require ("../controlador/con_grafico.php");

                                                         //php echo "En estos momentos existen: ".$resultado." casos registrados en sistema";?></div>
<div id="chartContainer1"><script type="text/javascript"> FusionCharts.ready(function(){
      var revenueChart = new FusionCharts({
        "type": "column3d",
        "renderAt": "chartContainer1",

        "width": "700",
        "height": "321",
        "dataFormat": "json",
        "dataSource": {
          "chart": {
              "caption": "Alcance",
              "subCaption": " ",
              "xAxisName": "",
              "yAxisName": "Cantidad de Registros",
              "theme": "carbon"
           },
          "data": [

            <?php bitacora();?>
           ]
        }
    });

    revenueChart.render();
})</script></div>
						</div>
					</div>


				<?php
require ("menu.php");
?>

	</body>
</html>