
<html>
	<head>
	    <title>MySQL and PHP</title>
		<h1>Cities of the world</h1>
	</head>
	<body>
	   <?php
	    //Enlace para archivo donde tenemos datos de conexion a la bbdd orientada a objetos.
		require("connection_info.php");
		include("navigation.php");


        /*Query the country table */
		$results = $link_id->query("SELECT ID, Name FROM City ORDER BY ID");
		

		if (!$results) {
			echo "Query Error: $link_id->error";
			exit;
		}
		
		
		/* Resultado de la query */

		
		while ($row = $results->fetch_assoc()) {
		    echo $row["ID"]." - ".
			" - <a href='city_edit.php?ID=",
			$row["ID"],"'>".$row["Name"]."</a>"."<br>";
			echo "<a name =".$row["ID"]."></a>";//creamos un ancla a las IDs encontradas.
		}
        
		$link_id->close();
	   ?>
	</body>
</html>