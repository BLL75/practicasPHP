
<html>
	<head>
	    <meta charset ="utf-8"></meta>
	<head>
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
	
	/* Query the City table */
	$query_results = mysql_query("SELECT ID, Name, CountryCode,
									District, Population FROM City
									WHERE ID =$city_Code", $enlace);
		/*Exit con error de mensaje si hay algún problema de ejecución con la query.*/
		
	if (!$query_results){
		die('<br> Consulta no válida'.mysql_error());
		  
	}
	
	
	while($row = mysql_fetch_assoc($query_results)){
	   $form_ID = $row["ID"];
	   $form_Name = $row["Name"];
	   $form_District = $row["District"];
	   $form_Pop = $row["Population"];
	}
	
print <<<Group2
<form action="city_save.php" method="GET">
City Name: <input type="text" name="City_Name" value="$form_Name"><br/>
<br/>
City District: <input type="text" name="City_District" value="$form_District"><br/>
<br/>
City_Population: <input type="text" name="City_Pop" value="$form_Pop"><br/>
<br/>
<input type="hidden" name="ID" value="$form_ID">
<input type="reset" name="reset" value="Delete">
<input type="submit" name="Submit" value="Insert">
</form>
Group2;
	mysql_free_result($query_results);
	mysql_close($enlace);
	?>
	
	
	</body>
</html>