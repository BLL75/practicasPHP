
<html>
	<head>
	    <meta charset ="utf-8"></meta>
	<head>
	<body>
	<?php
	require("connection_info.php");
	include("navigation.php");
	require("cityClass.php");
	//require 'libs/Smarty.class.php';

	$smarty = new Smarty;
	$smarty->caching = false;
	


	
	//Parametro que pasamos por URL
	if($_GET['ID']){
		$city_Code = $_GET['ID'];
	}
	
	/* Query the City table */
	
	
    $ciudad = new cityClass($gbd);
    $ciudad->cargarCiudad($city_Code);	    
	
	//var_dump($lista);
	
	
	//var_dump($_SESSION['cities'][0]);
	
	$smarty->assign('lista', $ciudad);
	$smarty->assign('name', $ciudad->name);
	$smarty->assign('district', $ciudad->district);
	$smarty->assign('poblacion', $ciudad->population);
	$smarty->assign('id', $ciudad->id);
	$smarty->display('city_edit.tpl');
	

	//mysql_free_result($query_results);
	$gbd = null;
	?>
	
	
	</body>
</html>