<html>
<head>
   <h1><b> CIUDADES DEL MUNDO </b></h1>
</head>
<body>
<?php
    //Enlace para archivo donde tenemos datos de conexion a la bbdd
	require("connection_info.php");
	
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
    if($_GET['CityCode']){
	   $city_Code = $_GET['CityCode'];
	}
	//Si no existe coje el uno por defecto
    else {
	   $city_Code = 1;
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
	
print <<<Group1
<form action="read_city.php" method="POST">
Country: <select name="City_CountryCode">
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
<input type="submit" name="Submit" value="Update">
<input type="submit" name="Submit" value="Delete">
<input type="submit" name="Submit" value="Insert">
</form>
Group2;


	
    //Cerramos la conexion con el servidor
    mysql_close($enlace);
      
?>
</body>
</html>