
<html>
<head>
   
   


</head>
<body>

   <a name = "top"><h1> Paises del mundo </h1></a>
	<?php
	require("connection_info.php");
	include("navigation.php");
	require('countriesClass.php');

	//require 'libs/Smarty.class.php';
		
		
		
	$smarty = new Smarty;
	$smarty->caching = false;
	
	$pais = new paisClass($gbd);
	
	//$pais->cargarPais('germany');
	
	
    $paises= new countriesClass($gbd);
	$paises->cargarPaises();
	
	$smarty->assign('lista',$paises->paises);
    $smarty->display('countries.tpl');

	

	$gbd = null;
	?>


</body>
</html>