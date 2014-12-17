<html>
<head>
<meta charset="utf-8">
<title>Cities of the World</title>
</head>
<body>

		<?php
			require("connection_info.php");
			
			// conexion a la BBDD con funcion		
			$link = mysql_connect($dbhost, $dbuser, $dbpass);
			
			if (!$link) {
				die('<br> No hemos podido conectar: ' . mysql_error());
			}
			
			// seleccion a la BBDD
			if (!mysql_select_db($dbdb, $link)) {
				echo 'Error seleccionando BBDD<br>';
			}
			
			if ($_POST) {
				$City_CountryCode = $_POST["City_CountryCode"];
				$City_Name = $_POST["City_Name"];
				$City_District = $_POST["City_District"];
				$City_Pop = $_POST["City_Pop"];
				$City_ID = $_POST["City_ID"];
			} else {
				echo "This page was not called correctly.";
				exit;
			}
			// Consulta a la BBDD para traer datos de la ciudad
			$resultado = mysql_query("UPDATE City SET CountryCode='$City_CountryCode',
				Name='$City_Name', District='$City_District',
				Population=$City_Pop WHERE ID=$City_ID", $link);			
			if (!$resultado) {
				die('<br> Consulta no válida: ' . mysql_error());
			} else {
				echo "Cambios realizados con éxito <br>";
				echo '<p><a href="city_form.php?CityCode=$City_ID">Return to City Form</a></p>';
			}
			
			mysql_close($link);
			// $linkID1->close();
		?>
	     
 	
    </body>

</html>
