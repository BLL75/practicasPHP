
<html>
<head>
<meta charset = "utf-8"></meta>
<title>Deleting cities</title>
</head>
	<body>
	<?php
	require("connection_info.php");
	include("navigation.php");
	include('cityClass.php');
	//require 'libs/Smarty.class.php';
	
	require_once 'vendor/autoload.php';
 
	use Symfony\Component\HttpFoundation\Request;
		
	$request = Request::createFromGlobals();
	 
	$smarty = new Smarty;
	$smarty->caching = false;
	
	//Parametro que pasamos por URL
	if($request->get('ID')){
	   $city_Code = $request->get('ID');
	}
	
	$ciudad = new cityClass($gbd);
	$ciudad->eliminarCiudad($city_Code);
	//$stmt = $gbd->query("DELETE FROM City WHERE ID=$city_Code");
	$smarty->assign('id',$city_Code);
	$smarty->display('city_delete.tpl');
	
	?>
	</body>
</html>