
<html>
	<head>
	    <meta charset ="utf-8"></meta>
	<head>
	<body>
	<?php
	require("connection_info.php");
	include("navigation.php");
	require("cityClass.php");
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Session\Session;
	
	$request = Request::createFromGlobals();

	$smarty = new Smarty;
	$smarty->caching = false;
	
	//Parametro que pasamos por URL
	if($request->get('ID')){
		$city_Code = $request->get('ID');
	}

    $ciudad = new cityClass($gbd);
    $ciudad->cargarCiudad($city_Code);

	$autenticar->meterDatoHistorial($ciudad->name);
	
	$smarty->assign('lista', $ciudad);
	$smarty->assign('name', $ciudad->name);
	$smarty->assign('district', $ciudad->district);
	$smarty->assign('poblacion', $ciudad->population);
	$smarty->assign('id', $ciudad->id);
	$smarty->display('city_edit.tpl');
	

	
	$gbd = null;
	?>
	
	
	</body>
</html>