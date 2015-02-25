

	   <?php
	    //Enlace para archivo donde tenemos datos de conexion a la bbdd orientada a objetos.
		require("connection_info.php");
		include("navigation.php");
		include('citiesClass.php');
		

		$smarty = new Smarty;
		$smarty->caching = false;
		
        $ciudades = new citiesClass($gbd);
		$ciudades->cargarCiudades();

		$smarty->assign('lista',$ciudades->ciudades);
		$smarty->display('cities.tpl');		

		$gbd = null;
	   ?>
