<?php

	require('navigation.php');
	//require 'libs/Smarty.class.php';
		
	$smarty = new Smarty;
	$smarty->caching = false;
	
	$smarty->display('index.tpl');
?>