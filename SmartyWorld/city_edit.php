
<html>
	<head>
	    <meta charset ="utf-8"></meta>
	<head>
	<body>
	<?php
	require("connection_info.php");
	include("navigation.php");
	require 'libs/Smarty.class.php';

	$smarty = new Smarty;
	$smarty->caching = false;
	$smarty->debugging=true;


	
	//Parametro que pasamos por URL
	if($_GET['ID']){
		$city_Code = $_GET['ID'];
	}
	
	/* Query the City table */
	
									
    $stmt = $gbd->query("SELECT ID, Name, CountryCode,
						District, Population FROM City
						WHERE ID =$city_Code");
	
	$lista = array();
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
           $lista['ID'] = $row["ID"];
           $lista['name'] = $row["Name"];
           $lista['district'] = $row["District"];
           $lista['poblacion'] = $row["Population"];		   
	}
	
	$smarty->assign('lista', $lista);
	$smarty->display('city_edit.tpl');
	

	//mysql_free_result($query_results);
	$gbd = null;
	?>
	
	
	</body>
</html>