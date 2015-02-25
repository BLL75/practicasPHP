
<html>
	<head>
	   <meta charset = "utf-8"></meta> 
	</head>
	<body>
       <?php
	    require("connection_info.php");
		include("navigation.php");
		require_once 'vendor/autoload.php';
 
		use Symfony\Component\HttpFoundation\Request;
		use Symfony\Component\HttpFoundation\Session\Session;
			
		$request = Request::createFromGlobals();
		//Parametro que pasamos por URL
		if ($request){
		$city_Code = $request->get('ID');
	    $City_Name = $request->get('City_Name');
	    $City_District = $request->get('City_District');
	    $City_Pop = $request->get('City_Pop');
		}
		else {
		   echo "Esta página no ha sido llamada correctamente";
		   exit;
		}
		
		
        
		if($_GET['Submit']=='Insert'){
				$gbd->query("REPLACE INTO City
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
		$gbd = null;
		?>
	</body>
</html>