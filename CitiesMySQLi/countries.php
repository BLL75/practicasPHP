
<html>
<head>
   
   


</head>
<body>

   <a name = "top"><h1> Paises del mundo </h1></a>
	<?php
	require("connection_info.php");
	include("navigation.php");

	
	


	// En la query le pasamos la variable
	
    $results = $link_id->query("SELECT name, region, surfacearea, population 
	FROM country");
	
	if (!$results) {
			echo "Query Error: $link_id->error";
			exit;
	}

	//Recojemos datos de la consulta por array asociativo
	
	while ($row = $results->fetch_assoc()) {
		    echo "  <h3>"." - <a href='http://en.wikipedia.org/w/index.php?title=",
		    $row["name"],"'>".$row["name"]."</a>";
	}

	//Creamos el ancla y le pasamos la variable $id.La cual recibe la ID del pais.
	//echo "<a href=connection.php#",$id,">","Volver a paises</a>";

	$link_id->close();
	?>


</body>
</html>