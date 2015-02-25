
<html>
	<head>
	    <meta charset ="utf-8"></meta>
	<head>
	<body>
	<?php
	require("connection_info.php");
	include("navigation.php");
	require("countryClass.php");
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Session\Session;
	
	$request = Request::createFromGlobals();

	$smarty = new Smarty;
	$smarty->caching = false;
	
	//Parametro que pasamos por URL
	
	if($request->get('ID')){
	    var_dump($request->get('ID'));
		$nombrePais = $request->get('ID');
	}
	
	$country = new countryClass($gbd);
    $country->cargarPais($nombrePais);
	
	$autenticar->meterDatoHistorialPais($country->name);

	
	$smarty->assign('sesionPais', $autenticar->leerDatoHistorialPais());
	$smarty->display('country_edit.tpl');

	?>
	
	
	</body>
</html>