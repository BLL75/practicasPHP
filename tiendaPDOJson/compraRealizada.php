<?php
    
    require("connection_info.php");

	//Con esto recogeriamos los datos pasados por POST(JQuery).
	if ($_POST) {
		echo "Array recogidos por POST. Definidos en Javascript" . "<br>";
		//json_decode interpreta JSON.
		$array=json_decode($_POST['Submit']);
		var_dump($array);
	}
	try{
		foreach($array as $valor){
			$proveedor = $valor[0];
			$componente = $valor[1];
			$articulo = $valor[2];
			$cantidad = $valor[3]; 
			
			$gbd->query("INSERT INTO envios (p, c, t,cantidad) VALUES('$proveedor', '$componente','$articulo','$cantidad')");
			var_dump($valor);
		};
	}catch (PDOException $e) {
		print "¡Error!: " . $e->getMessage() . "<br/>";
		die();
	}
	
	$gbd = null;
	
	
?>