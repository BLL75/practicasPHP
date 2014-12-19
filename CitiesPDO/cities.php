
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

		$stmt = $gbd->query('SELECT ID, Name FROM City ORDER BY ID');
		var_dump($stmt);
 
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			echo $row["ID"]." - ".
			" - <a href='city_edit.php?ID=",
			$row["ID"],"'>".$row["Name"]."</a>"."<br>";
			echo "<a name =".$row["ID"]."></a>"; 
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