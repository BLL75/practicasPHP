
<html>
	<head>
	   <meta charset = "utf-8"></meta> 
	</head>
	<body>
       <?php
	    require("connection_info.php");
		include("navigation.php");

		
		
		//Parametro que pasamos por URL
		if ($_GET) {
	    $City_Name = $_GET['City_Name'];
	    $City_District = $_GET['City_District'];
	    $City_Pop = $_GET['City_Pop'];
		$city_Code = $_GET['ID'];
		
		}
		else {
		   echo "Esta página no ha sido llamada correctamente";
		   exit;
		}
		
		

		if($_GET['Submit']=='Insert'){
				$link_id->query("REPLACE INTO City
							   (ID, Name, District,Population)
							   VALUES($city_Code, '$City_Name',
							   '$City_District',$City_Pop)");
				$userText = "Insertado correctamente";
		}	
        
		
        /*Sale con un mensaje de error si hay problema en la ejecución de la query
		if (!$results) {
			echo "Query Error: $link_id->error";
			exit;
		}*/
		
		
print <<<Group1
<h2>$userText</h2>
<p><a href="city.php?ID=$city_Code">Volver al formulario</a></p>
Group1;
		$link_id->close();
		?>
	</body>
</html>