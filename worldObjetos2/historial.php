<?php
 
    require("connection_info.php");
	include("navigation.php");
    $smarty = new Smarty;
	$smarty->caching = false;
	
	
    $smarty->assign('sesion', $_SESSION['cities']);
	
    $smarty->display('historial.tpl')	

?>
