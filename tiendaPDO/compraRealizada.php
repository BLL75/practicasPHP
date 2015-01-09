<?php
    
    require("connection_info.php");
	
	function cuatroValores($a){
	
	   if(sizeof($a) == 4 || sizeof($a) % 4 == 0){
	    return true;
	   }
	   return false;
	};
	
	foreach($_POST as $valor){
	     $asignacion = "$valor";   
	};
	
	var_dump($asignacion);
	$array = explode(",", $asignacion);
	
	$max = sizeof($array);
	
	

	for($i= 0; $i < $max ; $i= $i+4){
		if(cuatroValores($array)){
		   $proveedor = $array[$i];
		   $componente = $array[$i+1];
		   $articulo = $array[$i+2];
		   $cantidad = $array[$i+3];
		   
		};
		try{
		   $gbd->query("INSERT INTO envios (p, c, t,cantidad) VALUES('$proveedor', '$componente','$articulo','$cantidad')");
		}catch (PDOException $e) {
			print "¡Error!: " . $e->getMessage() . "<br/>";
			die();
		}
	    
	};
	$gbd = null;
	
	
?>