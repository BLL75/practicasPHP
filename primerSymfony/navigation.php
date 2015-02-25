<?php
	require 'libs/Smarty.class.php';
	require("security.php");

	//var_dump($autenticar);	

	$smarty2 = new Smarty;
	$smarty2->caching = false;
	
	$smarty2->display('navigation.tpl');
?>			
		