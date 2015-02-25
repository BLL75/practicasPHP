<?php
   
   require('navigation.php');
   require('citiesClass.php');
   
   
   //$pais = 'germany';
   
  
   
   if(isset($_POST['City_Name'])){
	   
	   
	   $pais = $_POST['City_Name'];
   }
   
   $ciudades = new citiesClass($gbd);
   //$ciudades->cargarCiudadesPais($pais);
   //$ciudades->maxId($pais);
   
   
   $id = $pais;
   
   
   if($ciudades->existeCiudad($id)){
    var_dump('existe');
   }
   else{
    var_dump('no no no existe');
   }
   
   
   
   
   $smarty = new Smarty;
   $smarty->caching = false;
   
   //$smarty->assign('lista',$ciudades->ciudades);
   //$smarty->display('ciudadesPais.tpl');
   
   
   
   
?>