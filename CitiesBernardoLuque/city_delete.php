
<html>
	<head>
	   <meta charset = "utf-8"></meta>
	   <title>Deleting cities</title>
	</head>
	<body>
	   <?php
	    require("connection_info.php");
		include("navigation.php");

		$enlace =  mysql_connect($dbhost, $dbuser, $dbpass);

		if (!$enlace) {
			die('No puedo conectarme:'.mysql_error());
		}


		if (mysql_select_db($dbdb, $enlace)){
		   
		}
		else{
		   echo 'Error seleccionando la base de datos <br>';
		}
		
		//Parametro que pasamos por URL
		if($_GET['ID']){
			$city_Code = $_GET['ID'];
		}
		
		$SQLexecute = "DELETE FROM City WHERE ID=$city_Code";
		
		$query_results = mysql_query($SQLexecute, $enlace);
		
		/*Sale con un mensaje de error si hay problema en la ejecución de la query*/
		if (!$query_results){
		  die('<br> Consulta no válida'.mysql_error());
		  
	    }
print <<<Group1
<h2>Ciudad eliminada</h2>
<p><a href="cities.php?ID=$city_Code">Volver al formulario</a></p>
Group1;
	    mysql_close($enlace);
	   ?>
	</body>
</html>