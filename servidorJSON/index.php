<html>
	<head>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
	  // Obtener la instancia del objeto XMLHttpRequest
	$(document).ready(function(){
	    
		
		
		$.ajax({
			url: "cargaProvinciasJSON.php",
			type: 'GET',
			dataType: 'json',
			success: function(data){
			$(data.provincias).each(function(){
			//Con este this sería igual a data.provincias
		    $("#selectProvincia").append("<option value = '"+ this.provincia.codigo +"'>" + this.provincia.nombre + "</option>")
			
			 
		   });}
		});

		
		
		$('#selectProvincia').change(function(){
		    valor = $('#selectProvincia').val();
			$('#selectLocalidad').empty();
		    $.ajax({
			  url: 'cargaMunicipiosXML.php',
			  type: 'POST',
			  async: true,
			  data: 'provincia=' + valor,
			  success: function(data){$(data).find('municipio').each(function(){
			  //Con este $(this) seria un selector del objeto
				          $('#selectLocalidad').append("<option>" + $(this).find('nombre').text() + "</option>");
			           });}
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
				//Fin select Provincia
				echo "</select>";
			echo "</form>";	
				
			//Comienzo select Localidad	
			echo "Localidad "."<select id = 'selectLocalidad'>";
				echo "<option>-Localidad-</option>";
				//Fin select Localidad
			echo "</select>";
            		
		?>
		
	</body>
</html>