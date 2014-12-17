<html>
<head>
	   <a name = "top"><h1> Ciudades del mundo </h1></a>
	<?php
	require("connection_info.php");
	$enlace =  mysql_connect($dbhost, $dbuser, $dbpass);

	if (!$enlace) {
		die('No puedo conectarme:'.mysql_error());
	}


	if (mysql_select_db($dbdb, $enlace)){
	   echo 'Base de datos seleccionada <br>';
	}
	else{
	   echo 'Error seleccionando la base de datos <br>';
	}

//Consulta a la BBDD

//consulta la menor esperanza de vida y que no sea null ordenado por esperanza de vida.
	$resultado = mysql_query('SELECT name, lifeexpectancy FROM country WHERE lifeexpectancy is not null order by lifeexpectancy asc limit 15', $enlace);
	$resultado2 = mysql_query('select ID, Name, CountryCode, District, Population from city order by id asc');
	if (!$resultado){
		die('<br> Consulta no válida: '.mysql_error());
	}

	if (!$resultado2){
		die('<br> Consulta 2 válida: '.mysql_error());
	}

	echo "Número de resultados: ".mysql_num_rows($resultado)."<br><br><br>";

//Recojemos datos de la consulta por array asociativo
	while($fila = mysql_fetch_assoc($resultado)){
		echo "Nombre del pais:  ",$fila["name"]," Esperanza de vida:  ".$fila["lifeexpectancy"]."<br>";
	}



	while($fila2 = mysql_fetch_assoc($resultado2)){
		echo $fila2["ID"]." | ".$fila2["Name"]." | ".
		" - <a href='countryCodeURL.php?country_code=",
		$fila2["CountryCode"],"&id=",$fila2["ID"],"'>".$fila2["CountryCode"]."</a>"." | ".$fila2["District"].
		" | ".$fila2["Population"]."<br>";
		echo "<a name =".$fila2["ID"]."></a>";//creamos un ancla a las IDs encontradas.
	}




    mysql_close($enlace);
?>


</head>
<body>

   
   <a href = "#top"> Ir al principio de la pagina </a>

</body>
</html>