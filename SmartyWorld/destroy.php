
	    
	<?php
	// Inicializar la sesión.
	// Si está usando session_name("algo"), ¡no lo olvide ahora!
	session_start();
    session_unset();
    session_destroy();
	require 'libs/Smarty.class.php';
	$smarty = new Smarty;
	$smarty->caching = false;
	$smarty->debugging=true;
	$smarty->display('destroy.tpl');
    ?>

	    
		
		
	