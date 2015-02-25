
<html>
	<head>
	   <meta charset = "utf-8"></meta> 
	</head>
	<body>
       <?php
	    require("connection_info.php");
		include("navigation.php");
		require('cityClass.php');

		
		
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
		
		
        
		if($_GET['Submit']=='Editar'){
		    $ciudad = new cityClass($gbd);
			$ciudad->editar($_GET['ID'], $_GET['City_Name'],$_GET['City_Pop'],$_GET['City_Name']);
			$userText = "Editado correctamente";
		}
        else{
		    $userText = 'No ha sido editado';
		}		
		
		
print <<<Group1
<h2>$userText</h2>
<p><a href="city.php?ID=$city_Code">Volver al formulario</a></p>
Group1;
		$gbd = null;
		?>
	</body>
</html>