
<html>
	<head>
	   <meta charset = "utf-8"></meta> 
	</head>
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
				$SQLexecute = "REPLACE INTO City
							   (ID, Name, District,Population)
							   VALUES($city_Code, '$City_Name',
							   '$City_District',$City_Pop)";
				$userText = "Insertado correctamente";
		}	
        $query_results = mysql_query($SQLexecute, $enlace);
		
        /*Sale con un mensaje de error si hay problema en la ejecución de la query*/
		if (!$query_results){
		  die('<br> Consulta no válida'.mysql_error());
		  
	    }
		
		
print <<<Group1
<h2>$userText</h2>
<p><a href="city.php?ID=$city_Code">Volver al formulario</a></p>
Group1;
		mysql_close($enlace);
		?>
	</body>
</html>