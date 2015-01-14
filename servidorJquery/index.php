<html>
	<head>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
	  // Obtener la instancia del objeto XMLHttpRequest
	$(document).ready(function(){
	    
		
		
		$.get("cargaProvinciasXML.php", function(data) {
		   $(data).find('provincia').each(function(){
		   
		     //$("#selectProvincia").append("<option>" + $(this).find('nombre').text() + "</option>")
			 $('#selectProvincia').append("<option value = '" + $(this).find('codigo').text() +"'>" + $(this).find('nombre').text() + "</option>");
			 
		   });			
		});

		
        $('#selectProvincia').change(function(){
		    alert($( "#selectProvincia" ).val());
			$.post( "cargaMunicipiosXML.php", function( valor ) {
			    
				var formData = new FormData(); // Para meter formato que acepte el POST
                data = formData.append("provincia", valor);
				$( ".result" ).text( data );
			});
        });		
		
		
	});
	
	</script>
	</head>
	<body>
		<?php

			echo "<form method='POST' action='index.php' id='formulario'>";
			//Comienzo select Provincia
				echo "Provincia"."<select id = 'selectProvincia'>";
				echo "<option>-Provincia-</option>";
				//echo "<option value='",$row["provincia"],"'>",$row["nombre"],"</option>";
				//Fin select Provincia
				echo "</select>";
			echo "</form>";	
				
			//Comienzo select Localidad
				echo "<textarea class = 'result'></textarea>";
				echo "Localidad "."<select id = 'selectLocalidad'>";
				echo "<option>Localidad</option>";
				//Fin select Localidad
				echo "</select>";
				
		?>
		
	</body>
</html>