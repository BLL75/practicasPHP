
<html>
	<head>
	  
	</head>
	<body>
	   <?php
	    //Enlace para archivo donde tenemos datos de conexion a la bbdd
		require("connection_info.php");
		include("navigation.php");
		
		//require 'libs/Smarty.class.php';
		
		
		
		$smarty = new Smarty;
		$smarty->caching = false;
		
		
		//$smarty->assign("codigoCiudad","probando la cosa",true);
		
		
		
		//Parametro que pasamos por URL
		if($_GET['ID']){
		   $city_Code = $_GET['ID'];
		}
		
		/* Query the City table */
											
			
        $stmt = $gbd->query("SELECT ID, Name, CountryCode,
							District, Population FROM City
							WHERE ID =$city_Code");
        
        /*Store the results of the query*/
		
		$list = array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {		   
			$list['ID']=$row['ID'];
			$list['countryCode']=$row['CountryCode'];
			$list['Name']=$row['Name'];
			$list['District']=$row['District'];
			$list['Population']=$row['Population'];	   
		}
		
		$smarty->assign("codigoPais",$list['countryCode'],true);
		$smarty->assign('id', $list['ID']);
		$smarty->assign('list', $list);
		
		
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