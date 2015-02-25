<html>
<head>
	<title>Cities of the world</title>
	
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	   
	
</head>
	<body>
	    <div class="row">
		   <div class="col-lg-2 col-lg-offset-4 text-center">
			   <h1>Name of the City</h1>
			   <h1>Editar la ciudad</h1>
		   </div>
		</div>
	    <div>
			
        </div>		
	    <div class="col-lg-2 col-lg-offset-4 text-center">
			{foreach  from=$list item=row key=key}
			    {if $key != 'gbd' and $key != 'countrycode'}
					<h2 class="form-control-static">{$key}</h2>
					<input type="text" class="form-control" value = {$row}></input></br>  			  				 
				{/if}
				
			{/foreach}
			<h2>Pais</h2>
			<select id="my_select" class="col-sm-12">
			{section name=outer loop=$fila2}
				{if $fila2[outer].code == $codigoPais}
					<option value='"{$fila2[outer].code}"' class="form-control" selected>{$fila2[outer].name}</option>
				{else}
				    
					<option value='"{$fila2[outer].code}"' class="form-control">{$fila2[outer].name}</option>
				{/if}
			{/section}
			</select>
		
		
			<input type="hidden" name="City_ID" class="form-control" value="$form_ID">
			<p><a href="city_edit.php?ID={$id}">Editar ciudad</a></p>
			<p><a href="city_delete.php?ID={$id}">Eliminar ciudad</a></p>
		</div>
		<script>
		/*console.log(document.getElementById('my_select'));*/
		//$.each(console.log($('option').val()));
		$('option').each(function(){
		console.log($(this).val());
		});
		</script>


