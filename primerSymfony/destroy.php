
	    
	<?php
	// Inicializar la sesión.
	// Si está usando session_name("algo"), ¡no lo olvide ahora!
	//session_start();
    //session_unset();
    //session_destroy();
	require 'libs/Smarty.class.php';
	require 'securityClass.php';
	$smarty = new Smarty;
	$smarty->caching = false;

	$sesionAbierta = new securityClass($gbd);
	$sesionAbierta->cerrarSesion();

	$smarty->display('destroy.tpl');
    ?>

	    
		
		
	