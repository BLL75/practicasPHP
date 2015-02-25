
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
	$smarty = new Smarty;
	$smarty->caching = false;
	
	//Parametro que pasamos por URL
	if($_GET['ID']){
	   $city_Code = $_GET['ID'];
	}
	
	$ciudad = new cityClass($gbd);
	$ciudad->eliminar($city_Code);
	//$stmt = $gbd->query("DELETE FROM City WHERE ID=$city_Code");
	$smarty->assign('id',$city_Code);
	$smarty->display('city_delete.tpl');
	
	?>
	</body>
</html>