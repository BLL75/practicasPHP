<html>
<head>
<title>Cities of the World</title>
</head>
<body>

		<?php
			require("connection_info.php");
			
			// conexion a la BBDD con funcion		
			$link = mysql_connect($dbhost, $dbuser, $dbpass);
			
			if (!$link) {
				die('<br> No hemos podido conectar: ' . mysql_error());
			} else {echo 'Conectados!! <br>';}
			
			// seleccion a la BBDD
			if (mysql_select_db($dbdb, $link)) {
				echo 'Base de datos $dbdb seleccionada <br>';
			} else {
				echo 'Horror seleccionando la base de datos! <br>';
			}
			echo "<br>";
			// cojo de la url la ciudad a mostrar
			if ($_GET['CityCode']) {
				$city_Code = $_GET['CityCode'];
			} else {
				$city_Code = 1;
			}
			
			// Consulta a la BBDD para traer datos de la ciudad
			$resultado = mysql_query('SELECT ID, Name, CountryCode, District, Population
				FROM City WHERE ID=$city_Code', $link);			
			if (!$resultado) {
				die('<br> Consulta no válida: ' . mysql_error());
			}
			
			while ($fila = mysql_fetch_assoc($resultado)) {
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

			$resultado2 = mysql_query('SELECT Code, Name FROM Country ORDER BY Name', $link);	
			if (!$resultado2) {
				die('<br> Consulta no válida: ' . mysql_error());
			}
			
			/* Display the results of the query */
			while ($fila2 = mysql_fetch_assoc($resultado)) {
				if ($fila2["Code"] == $form_Code) {
					echo "<option value='",$fila2["Code"],"' selected>",
					$fila2["Name"],"</option>";
				} else {
					echo "<option value='",$fila2["Code"],"'>",
					$fila2["Name"],"</option>";
				}
			}
			
print <<<Group2
</select><br/>
<br/>
City Name: <input type="text" name="City_Name" value="$form_Name"><br/>
<br/>
City District: <input type="text" name="City_District"
value="$form_District"><br/>
<br/>
City Population: <input type="text" name="City_Pop"
value="$form_Pop"><br/>
<br/>
<input type="hidden" name="City_ID" value="$form_ID">
<input type="submit" name="Submit" value="Submit">
</form>
Group2;

			mysql_close($link);
			// $linkID1->close();
		?>
	     
 	
    </body>

</html>
