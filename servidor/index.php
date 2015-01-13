<html>
	<head>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
	  // Obtener la instancia del objeto XMLHttpRequest
	$(document).ready(function(){
	
		if(window.XMLHttpRequest) {
			peticion_http = new XMLHttpRequest();
		}
		else if(window.ActiveXObject) {
			peticion_http = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		// Preparar la funcion de respuesta
		peticion_http.onreadystatechange = muestraContenido;
		 
		// Realizar peticion HTTP
		peticion_http.open('GET','cargaProvinciasXML.php', true);
		peticion_http.send(null);
		
		function muestraContenido() {
		    console.log(peticion_http.readyState);
			if(peticion_http.readyState == 4) {
			  if(peticion_http.status == 200) {
			    alert(peticion_http.status);
				
				//Parseamos el XML que tenemos.
				var p = $.parseXML(peticion_http.responseText);
				console.log(p);
				// Al cojer el elemento por TagName me crea un array'list'.
				var list = p.getElementsByTagName("provincia");												
				
				// $.each es una función de ayuda de jquery
				$.each(list,function(indice, elemento) {
					$('#selectProvincia').append('<option>' +elemento.getElementsByTagName("nombre")[0].innerHTML + '</option>')
				    
                });
			  }
			  else {
			    
			  }
			}
		}
		
		
	});
	
	</script>
	</head>
	<body>
		<?php

			
			//Comienzo select Provincia
				echo "Provincia"."<select id = 'selectProvincia'>";
				echo "<option>-Provincia-</option>";
				//echo "<option value='",$row["provincia"],"'>",$row["nombre"],"</option>";
				//Fin select Provincia
				echo "</select>";
				
				
			//Comienzo select Localidad
				echo "Localidad"."<select id = 'selectLocalidad'>";
				echo "<option>Localidad</option>";
				//Fin select Localidad
				echo "</select>";
				
				
		?>
		<ol>
			<li>chupa 1</li>
			<li>Elemento 2</li>
			<li>Elemento 3</li>
			<li>Elemento 4</li>
		</ol>
	</body>
</html>