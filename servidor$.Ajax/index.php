<html>
	<head>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
	  // Obtener la instancia del objeto XMLHttpRequest
	$(document).ready(function(){
	    
		$.ajax({url:"cargaProvinciasXML.php",success:function(result){
			$(result).find('provincia').each(function(){
			    $('#selectProvincia').append("<option value = '" + $(this).find('codigo').text() +"'>" + $(this).find('nombre').text() + "</option>"); 
			});
		}});
		
		
		$('#selectProvincia').change(function(){
		    valor = $('#selectProvincia').val();
			$('#selectLocalidad').empty();
		    $.ajax({
			  url: 'cargaMunicipiosXML.php',
			  type: 'POST',
			  async: true,
			  data: 'provincia=' + valor,
			  success: function(data){$(data).find('municipio').each(function(){
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