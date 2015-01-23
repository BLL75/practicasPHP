
<html>
<head>
   
   


</head>
<body>

   <a name = "top"><h1> Paises del mundo </h1></a>
	<?php
	require("connection_info.php");
	include("navigation.php");

	//require 'libs/Smarty.class.php';
		
		
		
	$smarty = new Smarty;
	$smarty->caching = false;
	$smarty->debugging=true;
	


	// En la query le pasamos la variable
	
    
	$stmt = $gbd->query("SELECT name, region, surfacearea, population 
	FROM country");
	

	//Recojemos datos de la consulta por array asociativo
	
    $lista = array();
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			 
			$lista[] = array("name" => $row['name']);
	}
	
	$smarty->assign('lista',$lista);
    $smarty->display('countries.tpl');

	//Creamos el ancla y le pasamos la variable $id.La cual recibe la ID del pais.
	//echo "<a href=connection.php#",$id,">","Volver a paises</a>";

	$gbd = null;
	?>


</body>
</html>