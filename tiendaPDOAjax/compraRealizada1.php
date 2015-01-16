
		<?php
			
			require("connection_info.php");

			//Con esto recogeriamos los datos pasados por POST(JQuery).
			var_dump($_GET);
			/*
			if ($_POST) {
				
				echo ($_POST);
				//json_decode interpreta JSON.
				//$array=json_decode($_POST['Submit']);
				
			}
			try{
				foreach($array as $valor){
					$proveedor = $valor[0];
					$componente = $valor[1];
					$articulo = $valor[2];
					$cantidad = $valor[3]; 
					
					$gbd->query("INSERT INTO envios (p, c, t,cantidad) VALUES('$proveedor', '$componente','$articulo','$cantidad')");
					
				};
			}catch (PDOException $e) {
				print "¡Error!: " . $e->getMessage() . "<br/>";
				die();
			}
			$gbd = null;
			echo "<h1>Compra realizada</h1>";
			*/
		?>
