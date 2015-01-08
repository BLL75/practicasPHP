<html>
<head>
   <h1><b> PRACTICA TIENDA 2015 </b></h1>
   <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
   <script>
    $(document).ready(function(){
	    //BTN COMPRAR.
		myArray = [];
		
		$(".tabla").hide();
		
		$("#btnAgregar").click(function(){
		    $(".tabla").show();
			$(".tabla:last-child").append($("<tr><td class='tdProveedor'></td><td class='tdComponentes'></td><td class='tdArticulos'></td><td class='tdCantidad'></td></tr>"));
			$(".tdProveedor:empty").append($("#selectProveedores option:selected").html());
            $(".tdComponentes:empty").append($("#selectComponentes option:selected").html());
			$(".tdArticulos:empty").append($("#selectArticulos option:selected").html());
			$(".tdCantidad:empty").append($("#cantidad").val());
			//Para meter los datos en el array. PUSH
           	myArray.push([$("#selectProveedores").val(), $("#selectComponentes").val(),$("#selectArticulos").val(),$("#cantidad").val()]);
            $("#btnComprar").val(myArray);
            console.log(myArray);			
		});
		
	 
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
echo "Cantidad"."<input id='cantidad' type='number'>";
echo "<button type='button' id = 'btnAgregar'> Agregar a la cesta </button>";
echo "<form method='POST' action='compraRealizada.php'>";
echo "<button type='submit' id = 'btnComprar' name='Submit' value='Realizar compra'>Realizar compra</button>";
echo "</form>";
    //Cerramos la conexion con el servidor
    $gbd = null;
    
?>

    <div id="tablaPedido">		
		<table border="1" cellspacing="5" cellpadding="1"  class="tabla" width="50%">
			<tr>
				
				<th>Proveedor</th>
				<th>Componentes</th>
				<th>Articulos  </th>
				<th>Cantidad</th>
				
			</tr>
		</table>
	</div>
</body>
</html>