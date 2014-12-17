
<html>
	<head>
	    <title>MySQL and PHP</title>
		<h1>Cities of the world</h1>
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
		
		
		
		

        /*Query the country table */
	
	    $query_results2 = mysql_query("SELECT ID, Name FROM City ORDER BY ID", $enlace);
		
		/* Resultado de la query */

		while($row2 = mysql_fetch_assoc($query_results2)){
			echo $row2["ID"]." - ".
			" - <a href='city_edit.php?ID=",
			$row2["ID"],"'>".$row2["Name"]."</a>"."<br>";
			echo "<a name =".$row2["ID"]."></a>";//creamos un ancla a las IDs encontradas.
		}
        
		mysql_close($enlace);
	   ?>
	</body>
</html>