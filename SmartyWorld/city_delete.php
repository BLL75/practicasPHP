
<html>
	<head>
	   <meta charset = "utf-8"></meta>
	   <title>Deleting cities</title>
	</head>
	<body>
	   <?php
	    require("connection_info.php");
		include("navigation.php");

		
		
		//Parametro que pasamos por URL
		if($_GET['ID']){
			$city_Code = $_GET['ID'];
		}
		
		
		$stmt = $gbd->query("DELETE FROM City WHERE ID=$city_Code");

		
		
print <<<Group1
<h2>Ciudad eliminada</h2>
<p><a href="cities.php?ID=$city_Code">Volver al formulario</a></p>
Group1;
	    $gbd = null;
	   ?>
	</body>
</html>