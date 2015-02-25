<?php
   
   require('navigation.php');
   require('citiesClass.php');
   
   
   //$pais = 'germany';
   
  
   
    if(isset($_POST['City_Name'])){
	   
	   
	   $pais = $_POST['City_Name'];
    }
    
    $ciudades = new citiesClass($gbd);
    $ciudades->cargarCiudadesPais($pais);
	
	
   
    $smarty = new Smarty;
    $smarty->caching = false;
   
   
	if($ciudades->existeId =='existe'){
		$smarty->assign('lista',$ciudades->ciudades);
        $smarty->display('ciudadesPais.tpl');
	}
	else{
        $smarty->assign('lista',$ciudades->maxId);		
		$smarty->display('noExiste.tpl');
	}
	   
    
	
	
   
   
   
   
   
   
?>