
<html>
	<head>
	  
	</head>
	<body>
	   <?php
	    //Enlace para archivo donde tenemos datos de conexion a la bbdd
		require("connection_info.php");
		include("navigation.php");
		require("cityClass.php");
		require_once 'vendor/autoload.php';
 
		use Symfony\Component\HttpFoundation\Request;
		
	    $request = Request::createFromGlobals();
	 
	    $city_Code = $request->get('ID');
	 
	
		$smarty = new Smarty;
		$smarty->caching = false;
		
		
			
		$ciudad = new cityClass($gbd);
		$ciudad->cargarCiudad($city_Code);

        
        /*Store the results of the query*/
		$smarty->assign('list',$ciudad);
		$smarty->assign('id', $ciudad->id);
		
		
		
		$stmt2 = $gbd->query("SELECT Code, Name FROM Country ORDER BY Name");
		//$row2Name = [];
		//$row2Code = [];
		
		while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
			$fila2[] = array("code" => $row2['Code'], "name" => $row2['Name']);	
	    }
		
		
		
		$smarty->assign('fila2', $fila2);
		$smarty->display('city.tpl');
		
		
	   ?>
	   
	</body>
	
</html>