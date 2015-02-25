<html>
	<head>
		<title>Editando ciudades del mundo</title>    
	<head>
	<body>
	  
	  
	    <div class="col-lg-2 col-lg-offset-4 text-center">
		    
			<h3>Editar la ciudad</h3>
			<form action="city_save.php" method="GET" class='form-horizontal'>
				City Name: <input type="text" class="form-control" name="City_Name" value="{$name}"><br/>
				<br/>
				City District: <input type="text" class="form-control" name="City_District" value="{$district}"><br/>
				<br/>
				City_Population: <input type="text" class="form-control" name="City_Pop" value="{$poblacion}"><br/>
				<br/>
				<input type="hidden" name="ID" value="{$id}">
				<input type="submit" class="btn btn-default" name="Submit" value="Editar">
			</form>
		</div>
		
	</body>
</html>