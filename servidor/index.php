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
				 list = p.getElementsByTagName("provincia");												
				
				// $.each es una función de ayuda de jquery
				$.each(list,function(indice, elemento) {
				     
					$('#selectProvincia').append("<option value = '" + elemento.getElementsByTagName("codigo")[0].innerHTML +"'>" + elemento.getElementsByTagName("nombre")[0].innerHTML + "</option>");
					
					//$('#selectProvincia').append('<option>' + $('elemento').html() + '</option>')
				    
                });
			  }
			  
			}
		}
		
		$( "#selectProvincia" ).change(function() {
		  
			
			var valor = $( "#selectProvincia" ).val();
			
		  
		    if(window.XMLHttpRequest) {
			    peticion_municipios = new XMLHttpRequest();
			}
			else if(window.ActiveXObject) {
				peticion_municipios = new ActiveXObject("Microsoft.XMLHTTP");
			}
			// Preparar la funcion de respuesta
			peticion_municipios.onreadystatechange = muestraContenido2;
			 
			// Realizar peticion HTTP
			peticion_municipios.open('POST','cargaMunicipiosXML.php', true);
			//La siguiente linea es muy importante para darle formato al SEND.
			var formData = new FormData(); // Para meter formato que acepte el POST
            formData.append("provincia", valor);
		    peticion_municipios.send(formData);	
			
			
			
			function muestraContenido2() {
			    
				$('#selectLocalidad').empty();
				if(peticion_municipios.readyState == 4) {
				  if(peticion_municipios.status == 200) {
					
					//Parseamos el XML que tenemos.
					var p = $.parseXML(peticion_municipios.responseText);
					// Al cojer el elemento por TagName me crea un array'list'.
					list = p.getElementsByTagName("municipio");
                    
					// $.each es una función de ayuda de jquery
					$.each(list,function(indice, elemento) {
						$('#selectLocalidad').append("<option>" + elemento.getElementsByTagName("nombre")[0].innerHTML + "</option>");						
					});
				  }
				}
			} 
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
				echo "Localidad"."<select id = 'selectLocalidad'>";
				echo "<option>Localidad</option>";
				//Fin select Localidad
				echo "</select>";
				
		?>
		
	</body>
</html>