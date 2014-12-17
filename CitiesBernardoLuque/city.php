
<html>
	<head>
	  <title>Cities of the world</title>
	  <h1 align = "center">Name of the City</h1>
	</head>
	<body>
	   <?php
	    //Enlace para archivo donde tenemos datos de conexion a la bbdd
		require("connection_info.php");
		include("navigation.php");
		// Creamos variable para la conexion 
		$enlace =  mysql_connect($dbhost, $dbuser, $dbpass);
		
		// Si falla la conexion y nos indica el error
		if (!$enlace) {
			die('No puedo conectarme:'.mysql_error());
		}
		
		// Selección de la bbdd
		if (mysql_select_db($dbdb, $enlace)){
			//echo 'Base de datos seleccionada <br>';
		}
		// Mensaje error si no conectamos a la bbdd
		else{
			echo 'Error seleccionando la base de datos <br>';
		}
		
		//Parametro que pasamos por URL
		if($_GET['ID']){
		   $city_Code = $_GET['ID'];
		}
		
		/* Query the City table */
		$query_results = mysql_query("SELECT ID, Name, CountryCode,
											District, Population FROM City
											WHERE ID =$city_Code", $enlace);
		/*Exit con error de mensaje si hay algún problema de ejecución con la query.*/
		
		if (!$query_results){
		   die('<br> Consulta no válida'.mysql_error());
		  
		} 
		
		/*Store the results of the query*/
	
	while($row = mysql_fetch_assoc($query_results)){
	   $form_ID = $row["ID"];
	   $form_Code = $row["CountryCode"];
	   $form_Name = $row["Name"];
	   $form_District = $row["District"];
	   $form_Pop = $row["Population"];
	}
	
	echo "<a href=countries.php?",$form_Code,">","Country:</a>";
	
	mysql_free_result($query_results);

print <<<Group1
 <select name="City_CountryCode">
Group1;
	
	/*Query the country table */
	
	$query_results2 = mysql_query("SELECT Code, Name FROM Country ORDER BY Name", $enlace);
    
   /* Exit with error si tenemos problema con la ejecución de la query */

   if (!$query_results2){
      die('<br> Consulta no válida'.mysql_error());
	  
   }

   /* Resultado de la query */

   while ($row2 = mysql_fetch_assoc($query_results2)) {
		if ($row2["Code"] == $form_Code) {
			echo "<option value='",$row2["Code"],"' selected>",
			$row2["Name"],"</option>";
		} else {
			echo "<option value='",$row2["Code"],"'>",
			$row2["Name"],"</option>";
		}
	}
	mysql_free_result($query_results2);
print <<<Group2
</select><br/>
<br/>
City Name: <input type="text" name="City_Name" value="$form_Name"><br/>
<br/>
City District: <input type="text" name="City_District" value="$form_District"><br/>
<br/>
City_Population: <input type="text" name="City_Pop" value="$form_Pop"><br/>
<br/>
<input type="hidden" name="City_ID" value="$form_ID">
<p><a href="city_edit.php?ID=$city_Code">Editar ciudad</a></p>
<p><a href="city_delete.php?ID=$city_Code">Eliminar ciudad</a></p>
Group2;
	echo "<a href=http://en.wikipedia.org/w/index.php?title=",$form_Name,">","Consulta esta ciudad en Wikipedia</a>";    

		//Cerramos la conexion con el servidor
		mysql_close($enlace);	
	   ?>
	   
	</body>
	
</html>