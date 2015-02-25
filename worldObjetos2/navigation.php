<?php
	require 'libs/Smarty.class.php';
	require("security.php");	

	$smarty2 = new Smarty;
	$smarty2->caching = false;
	
	$smarty2->display('navigation.tpl');
?>			
		