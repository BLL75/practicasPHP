
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
		
		
		//Parametro que pasamos por URL
		if($_GET['ID']){
		   $city_Code = $_GET['ID'];
		}
		
		/* Query the City table */
											
			
        $stmt = $gbd->query("SELECT ID, Name, CountryCode,
							District, Population FROM City
							WHERE ID =$city_Code");											
		/*Exit con error de mensaje si hay algún problema de ejecución con la query.*/
		
		
		
		/*Store the results of the query*/

		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			   $form_ID = $row["ID"];
			   $form_Code = $row["CountryCode"];
			   $form_Name = $row["Name"];
			   $form_District = $row["District"];
			   $form_Pop = $row["Population"]; 
		}
	
	    echo "<a href=countries.php?",$form_Code,">","Country:</a>";
	    
	

print <<<Group1
 <select name="City_CountryCode">
Group1;
	
	/*Query the country table */
	
	
	
	
    $stmt2 = $gbd->query("SELECT Code, Name FROM Country ORDER BY Name");
   /* Exit with error si tenemos problema con la ejecución de la query */

   

   /* Resultado de la query */

   
	
	
	
	while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
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
<p><a href="city_edit.php?ID=$city_Code">Editar ciudad</a></p>
<p><a href="city_delete.php?ID=$city_Code">Eliminar ciudad</a></p>
Group2;
	echo "<a href=http://en.wikipedia.org/w/index.php?title=",$form_Name,">","Consulta esta ciudad en Wikipedia</a>";    

		//Cerramos la conexion con el servidor
		$gbd = null;	
	   ?>
	   
	</body>
	
</html>