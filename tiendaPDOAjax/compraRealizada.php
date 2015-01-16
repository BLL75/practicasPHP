
		<?php
			
			require("connection_info.php");

			//Con esto recogeriamos los datos pasados por POST(JQuery).
			//var_dump($_POST);
			
			
			if ($_POST){
			
			    //var_dump($_POST[valorProveedor]);
				//var_dump($_POST[valorComponente]);
				//var_dump($_POST[valorArticulos]);
				//var_dump($_POST['p']);
				
				// Recojemos los valores del POST por array asociativo, por eso van los valores entre comillas.
			    $proveedor = $_POST['p'];
				$componente = $_POST['c'];
				$articulo = $_POST['t'];
				$cantidad = $_POST['cantidad'];
				
				$gbd->query("INSERT INTO envios (p, c, t,cantidad) VALUES('$proveedor', '$componente','$articulo','$cantidad')");				
                $gbd = null;
				//echo "INSERT INTO envios (p, c, t,cantidad) VALUES('$proveedor', '$componente','$articulo','$cantidad')";
			}
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
