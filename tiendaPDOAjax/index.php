<html>
	<head>
	<h1><b> PRACTICA TIENDA 2015 </b></h1>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="/scripts/jquery.js"></script>
    <script src="/scripts/jqueryvalidation.js"></script>
	<script>
	$(document).ready(function(){
	    
		myArray = [];
		
		$(".tabla").hide();
		
		//BTN COMPRAR.
		$("#btnAgregar").click(function(){
			$(".tabla").show();
			$(".tabla:last-child").append($("<tr><td class='tdProveedor'></td><td class='tdComponentes'></td><td class='tdArticulos'></td><td class='tdCantidad'></td></tr>"));
			$(".tdProveedor:empty").append($("#selectProveedores option:selected").html());
			$(".tdComponentes:empty").append($("#selectComponentes option:selected").html());
			$(".tdArticulos:empty").append($("#selectArticulos option:selected").html());
			$(".tdCantidad:empty").append($("#cantidad").val());
			//Para meter los datos en el array. PUSH
			valorProveedor = $("#selectProveedores").val();
			valorComponente = $("#selectComponentes").val();
			valorArticulos = $("#selectArticulos").val();
			valorCantidad = $("#cantidad").val();
			
			params = { p:valorProveedor, c:valorComponente, t:valorArticulos, cantidad:valorCantidad};
			str = jQuery.param( params );			
			
			$.ajax({
				//dataType: 'json',
				url: 'compraRealizada.php',
				type: 'POST',
				async: true,
				data: str,
				success: function(data){console.log('OK: '+data)},
				error: function(xhr, ajaxOptions, thrownError){
				     alert(xhr);
					 alert(thrownError);
				}
			});
			
		});
		
		// validate signup form on keyup and submit
		//$("#formulario").validate({});
	});
	
	</script>
	</head>
    <body>
	<?php
	//Enlace para archivo donde tenemos datos de conexion a la bbdd
	require("connection_info.php");
	/* Query the City table */
	$stmt = $gbd->query('SELECT p, pnombre FROM proveedores ORDER BY pnombre');
	//Comienzo select proveedores
	//echo "<form method='POST' action='compraRealizada.php' id='formulario'>";
print <<<Group1
Proveedores: <select id="selectProveedores">
echo "<option>Proveedores</option>";
Group1;
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			echo "<option value='",$row["p"],"'>",$row["pnombre"],"</option>";
		}
		//Fin select proveedores
		echo "</select>";
		
		$stmt = $gbd->query('SELECT c, cnombre FROM componentes ORDER BY cnombre');
		
		//Comienzo select componentes
		echo "Componentes"."<select id = 'selectComponentes'>";
		echo "<option>Componentes</option>";
		
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			echo "<option value='",$row["c"],"'>",$row["cnombre"],"</option>";
		}
		//Fin select componentes
		echo "</select>";
		
		$stmt = $gbd->query('SELECT t, tnombre FROM articulos ORDER BY tnombre');
		
		//Comienzo select articulos
		echo "Articulos"."<select id = 'selectArticulos'>";
		echo "<option>Articulos</option>";
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			echo "<option value='",$row["t"],"'>",$row["tnombre"],"</option>";
		}
	    
		//Fin select articulos
		echo "</select>";
		
		echo "Cantidad"."<input id='cantidad' type='number' required>";
		echo "<button type='button' id = 'btnAgregar'> Agregar a la cesta </button>";
		echo "<button type='submit' id = 'btnComprar' name='Submit'>Realizar compra</button>";
		//Cerramos la conexion con el servidor
		$gbd = null;
		//echo "</form>";
		
		
		
	?>
		<div id="tablaPedido">
			<table border="1" cellspacing="5" cellpadding="1" class="tabla" width="50%">
				<tr>
					<th>Proveedor</th>
					<th>Componentes</th>
					<th>Articulos </th>
					<th>Cantidad</th>
				</tr>
			</table>
		</div>
    </body>
</html>