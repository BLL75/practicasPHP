<html>
<head>

<meta charset="utf-8">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	
	<script>
		$(document).ready(function(){
		   //ICONO AÑADIR ARTICULOS CESTA COMPRA
		   var tr = '<td>'
		    $("#tablaPedido").hide();
					$("#agregarPedido").click(function(){
						$("#tablaPedido").show();
						$("#pnombre").append(tr).append($("#selectProveedor").val());
						$("#cnombre").append(tr).append($("#selectComponentes").val());
						$("#tnombre").append(tr).append($("#selectArticulos").val());
						$("#tablaCantidad").append(tr).append($("#cantidad").val());
					});
		});
	</script>
</head>
	<body>
	<?php
	    require("conexion.php");
	    // Creamos variable para la conexion 
	    $enlace =  mysql_connect($dbhost, $dbuser, $dbpass);
	// Si falla la conexion y nos indica el error
		if (!$enlace) {
			die('No puedo conectarme:'.mysql_error());
		}
		
		// Selección de la bbdd
		if (mysql_select_db($dbdb, $enlace)){
			//echo 'Base de datos seleccionada <br>';
		}
		// Mensaje error si no conectamos a la bbdd
		else{
			echo 'Error seleccionando la base de datos <br>';
		}
		
		/*Query the country table */
	
	    $query_proveedores = mysql_query("SELECT p, pnombre FROM proveedores", $enlace);
		
		/* Resultado de la query */
print <<<Group1
<form action="comprarealizada.php" method="POST">
Group1;
		
        echo "<select id='selectProveedor'>";
		echo "<option value='' selected='selected'>Proveedores</option>";
	    while ($row = mysql_fetch_assoc($query_proveedores)) {
			
			echo "<option value='",$row["pnombre"],"'>",
			$row["pnombre"],"</option>";
		}
		echo "</select>";

        /*Query the country table */
	
	    $query_componentes = mysql_query("SELECT c,cnombre FROM componentes", $enlace);
		
		/* Resultado de la query */
        echo "<select id='selectComponentes'>";
		echo "<option value='' selected='selected'>Componentes</option>";
	    while ($row = mysql_fetch_assoc($query_componentes)) {
			
			echo "<option value='",$row["cnombre"],"'>",
			$row["cnombre"],"</option>";
		}
		echo "</select>";

        $query_articulos = mysql_query("SELECT t,tnombre FROM articulos", $enlace);
		
		/* Resultado de la query */
        echo "<select id='selectArticulos'>";
		echo "<option value='' selected='selected'>Articulos</option>";
	    while ($row = mysql_fetch_assoc($query_articulos)) {
			
			echo "<option value='",$row["tnombre"],"'>",
			$row["tnombre"],"</option>";
		}
		echo "</select>";
	    
print <<<Group2
<input type="number" id="cantidad" name="cantidad" value="cantidad" />
<button type="button" id="agregarPedido"> Añadir a la cesta </button> 
<input type="submit" id="realizarPedido" value="Realizar pedido" />

</form>
Group2;
		mysql_close($enlace);
	?>
	
	<div id="tablaPedido">		
		<table border="3" cellspacing="3" cellpadding="0" class="tabla" width="70%">
			<tr>
				
				<th>Proveedor</th>
				<th>Componentes</th>
				<th>Articulos  </th>
				<th>Cantidad</th>
				
			</tr>
				
		    <tr>
			   
				<td id = "pnombre"></td>
				<td id = "cnombre"></td>
				<td id = "tnombre"></td>
				<td id = "tablaCantidad"></td>
			   
		    </tr>
		   
		</table>
	</div>
	</body>
<html>