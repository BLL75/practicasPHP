


    
	<?php
		require("connection_info.php");
		include("navigation.php");
		require('countriesClass.php');
		
		$smarty = new Smarty;
		$smarty->caching = false;
		
		$pais = new countryClass($gbd);
		
		$paises= new countriesClass($gbd);
		$paises->cargarPaises();

		$smarty->assign('lista',$paises->paises);
		$smarty->display('countries.tpl');

		$gbd = null;
	?>

