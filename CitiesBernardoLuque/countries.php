
<html>
<head>
   
   


</head>
<body>

   <a name = "top"><h1> Paises del mundo </h1></a>
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

	


	// En la query le pasamos la variable
	$resultado = mysql_query("SELECT name, region, surfacearea, population 
	FROM country", $enlace);


	//Recojemos datos de la consulta por array asociativo
	while($fila = mysql_fetch_assoc($resultado)){
		echo "  <h3>"." - <a href='http://en.wikipedia.org/w/index.php?title=",
		$fila["name"],"'>".$fila["name"]."</a>";
	}

	//Creamos el ancla y le pasamos la variable $id.La cual recibe la ID del pais.
	//echo "<a href=connection.php#",$id,">","Volver a paises</a>";

	mysql_close($enlace);
	?>


</body>
</html>