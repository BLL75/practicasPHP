<html>

    <head>
	<script>
	</script>
	</head>
    <body>

		<?php
			require("connection_info.php");
			
			// conexion a la BBDD con funcion		
			$link = mysql_connect($dbhost, $dbuser, $dbpass);
			// conexion a la BBDD con objetos
			// $linkID1 = new mysqli($dbhost,$dbuser,$dbpass,"world");
			if (!$link) {
				die('<br> No hemos podido conectar: ' . mysql_error());
			}
			echo 'Conectados!! <br>';			
			// seleccion a la BBDD
			if (mysql_select_db($dbdb, $link)) {
				echo 'Base de datos $dbdb seleccionada <br>';
			} else {
				echo 'Horror seleccionando la base de datos! <br>';
			}
			echo "<br>";
			// Consulta a la BBDD
			$resultado = mysql_query('SELECT name FROM COUNTRY', $link);			
			// consulta a la BBDD con objetos 			
			// $query_results = $linkID1->query("SELECT ID, Name, CountryCode,
			//	District, Population FROM City WHERE ID=$city_Code");
			if (!$resultado) {
				die('<br> Consulta no válida: ' . mysql_error());
			}
			// while ($row = $query_results->fetch_assoc()) {}
			while ($fila = mysql_fetch_assoc($resultado)) {
				echo "Nombre del pais: <b>",$fila["name"],"</b><br/>";
			}
			mysql_close($link);
			// $linkID1->close();
		?>
	     
 	
    </body>

</html>
