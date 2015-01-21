
		<?php
			
			require("connection_info.php");
			if ($_POST){
				// Recojemos los valores del POST por array asociativo, por eso van los valores entre comillas.
			    $proveedor = $_POST['p'];
				$componente = $_POST['c'];
				$articulo = $_POST['t'];
				$cantidad = $_POST['cantidad'];
				
				$gbd->query("INSERT INTO envios (p, c, t,cantidad) VALUES('$proveedor', '$componente','$articulo','$cantidad')");				
                $gbd = null;
				//echo "INSERT INTO envios (p, c, t,cantidad) VALUES('$proveedor', '$componente','$articulo','$cantidad')";
			}
			
		?>
