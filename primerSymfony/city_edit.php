
<html>
	<head>
	    <meta charset ="utf-8"></meta>
	<head>
	<body>
	<?php
	require("connection_info.php");
	include("navigation.php");
	require("cityClass.php");
	//require("tplClass");
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Session\Session;
	
	$request = Request::createFromGlobals();

	
	
	//Parametro que pasamos por URL
	if($request->get('ID')){
		$city_Code = $request->get('ID');
	}

    $ciudad = new cityClass($gbd);
    $ciudad->cargarCiudad($city_Code);

	$autenticar->meterDatoHistorial($ciudad->name);

	//$smarty = new tplClass();
	$smarty->tplCityEdit();
	
	$gbd = null;
	?>
	
	
	</body>
</html>